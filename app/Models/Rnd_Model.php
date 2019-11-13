<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 */

// -------------------------------------------------------------------------------------------------

namespace app\Models;

use app\Core\ModelClass;

class Rnd extends ModelClass
{
	private $rnd = 'rnd_pengadaan';

	function __construct()
	{
		parent::__construct();
		$this->_db->table($this->rnd);
	}

	public function readrndsetnornd($no_rnd)
	{
		$this->_db->where("no_rnd = '$no_rnd'");
		return $this->_db->fetch();
	}

	public function listrndkosong($value='')
	{
		$this->_db->where("status_kontrak='belum'");
		return $this->_db->fetch('obj');
	}
	public function listrndpembayaran($value='')
	{
		$this->_db->where("status_pembayaran='belum'");
		return $this->_db->fetch('obj');
	}

	public function deleterndid($no_nik)
	{
		return $this->_db->delete($no_nik);
	}

	public function readrnd($value='')
	{
		$data = $this->_db->fetch();
		if ($data) {
			$saldo =$this->saldo();
			foreach ($data as $row) {
				$saldo 										= $saldo - $row['nilai_rab'];
				$d['id_rnd']	= $row['id_rnd'];
				$d['nama_jenis'] 					= $this->namajenis($row['id_jenis']);
				$d['no_skki'] 						= $row['no_skki'];
				$d['no_nota'] 						= $row['no_nota'];
				$d['uraian'] 							= $row['uraian'];
				$d['nilai_rab'] 					= rupiah($row['nilai_rab']);
				$d['tgl_dibuat'] 					= $row['tgl_dibuat'];
				$d['prk'] 								= $this->namaprk($row['id_rnd']);
				$d['nama_user'] 					= $this->namaadmin($row['id_admin']);
				$d['saldo']								= rupiah($saldo);

				$result[] = $d;
			}

			return $result;
		} else {
			return NULL;
		}
	}

	public function saldo($value='')
	{
		$this->_db->table('saldo');
		$saldo = $this->_db->fetch('id');
		return $saldo->saldo;
	}

	public function sisasaldo($value='')
	{
		$saldo = $this->saldo();
		$this->_db->table('rnd_pengadaan');
		$rnd = $this->_db->fetch('obj');
		foreach ($rnd as $row) {
			$saldo = $saldo - $row->nilai_rab;
		}

		return rupiah($saldo);
	}

	public function namajenis($id_jenis)
	{
		$this->_db->table('jenis');
		$jenis = $this->_db->fetchid($id_jenis);
		return $jenis->nama_jenis;
	}

	public function namaadmin($id_admin)
	{
		$this->_db->table('admin','user');
		$this->_db->where("id_admin ='$id_admin'");
		$admin = $this->_db->fetchjoin('id');
		return $admin->nama_user;
	}

	public function namaprk($id_rnd)
	{
		$this->_db->table('detail_prk','prk');
		$this->_db->where("id_rnd ='$id_rnd'");
		$prk = $this->_db->fetchjoin();
		$result = "<ol>";
		foreach ($prk as $row) {
			$result .= "<li>".$row['nama_prk']. "</li>";
		}
		$result .= "</ol>";
		return $result;
	}

	// format default class
	public function creaternd($value='')
	{
		// save to rnd_pengadaan
		$d['id_admin'] 					= $_SESSION['admin'];
		$d['id_jenis'] 					= $this->filter_input($_POST['id_jenis']);
		$d['no_skki'] 						= $this->filter_input($_POST['no_skki']);
		$d['no_nota'] 						= $this->filter_input($_POST['no_nota']);
		$d['uraian'] 						= $this->filter_input($_POST['uraian']);
		$d['nilai_rab'] 							= $this->filter_input($_POST['nilai_rab']);
		$d['tgl_dibuat'] 								= setdate();
		
		$this->_db->insert($d);

		// get id rnd last
		$id_rnd = $this->_db->lastid();
		// save to detail prk
		$this->_db->table('detail_prk');

		for ($i=0; $i < count($_POST['id_prk']); $i++) { 
			$dd['id_rnd']	= $id_rnd;
			$dd['id_prk']	= $_POST['id_prk'][$i];
			$this->_db->insert($dd);
		}
		return TRUE;
	}

	// format default class
	public function updaternd($id_rnd)
	{
		// save to rnd_pengadaan
		$d['id_admin'] 					= $_SESSION['admin'];
		$d['id_jenis'] 					= $this->filter_input($_POST['id_jenis']);
		$d['no_skki'] 						= $this->filter_input($_POST['no_skki']);
		$d['no_nota'] 						= $this->filter_input($_POST['no_nota']);
		$d['uraian'] 						= $this->filter_input($_POST['uraian']);
		$d['nilai_rab'] 							= $this->filter_input($_POST['nilai_rab']);
		$d['tgl_dibuat'] 								= setdate();
		
		$this->_db->update($d,$id_rnd);

		// save to detail prk
		$this->_db->table('detail_prk');

		for ($i=0; $i < count($_POST['id_prk']); $i++) { 
			$id_prk 		= $_POST['id_prk'][$i];
			$dd['id_prk']	= $id_prk;

			// cek data
			$this->_db->table('detail_prk');
			$this->_db->where("id_rnd = '$id_rnd' AND id_prk = '$id_prk'");
			$cek = $this->_db->fetch('id');
			if ($cek) {
				$this->_db->update($dd,$cek->id_detailprk);
			} else {
				$dd['id_rnd']	= $id_rnd;
				$this->_db->insert($dd);
			}
		}
		return TRUE;
	}

	public function multi($post)
	{
		$result = '';
		if (isset($_POST[$post])) {
			$data 	= $_POST[$post];
			$result = null;
			for ($i=0; $i < count($data); $i++) { 
				$result .= $data[$i] . ',';
			}
			$result = rtrim($result,",");
			return $result;
		} else {
			return $result;
		}
	}

	public function jumlahrnd($value='')
	{
		$this->_db->table('rnd_pengadaan');
		return $this->_db->jumdata();
	}

	public function dashboard($value='')
	{
		$this->_db->where("status_kontrak = 'sudah'");
		$jumya     	= $this->_db->jumdata();
		$jumrnd 	= self::jumlahrnd();
		$jumtidak	= $jumrnd - $jumya;

		$d =	[ 'jumrnd' => $jumrnd,
						'jumya' => $jumya,
						'jumtidak' => $jumtidak];
		return $d; 
	}
}