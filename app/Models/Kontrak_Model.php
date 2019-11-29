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

class Kontrak extends ModelClass
{
	private $kontrak = 'kontrak';

	function __construct()
	{
		parent::__construct();
		$this->_db->table($this->kontrak);
	}
	// format default class
	public function readkontrakjoinrnd($value='')
	{
		$saldo = $this->saldo();
		$this->_db->table('kontrak','rnd_pengadaan');
		$data = $this->_db->fetchjoin('obj');
		if ($data) {
			foreach ($data as $row) {
				$id_admin 			= $row->id_admin;

				$this->_db->table('admin');
				$admin = $this->_db->fetchid($id_admin);

				$this->_db->table('user');
				$user = $this->_db->fetchid($admin->id_user);

				$saldo 	= $saldo - $row->nilai_rab;

				$d['id_kontrak'] = $row->id_kontrak;
				$d['no_smartone'] = $row->no_smartone;
				$d['no_spk'] = $row->no_spk;
				$d['nama_vendor'] = $row->nama_vendor;
				$d['tgl_akhir'] = $row->tgl_akhir;
				$d['tgl_dibuat'] = $row->tgl_dibuat;
				$d['keterangan'] = $row->keterangan;
				$d['nilai_rab'] = rupiah($row->nilai_rab);
				$d['nama_user']		= $user->nama_user;
				$d['uraian']		= $row->uraian;
				$d['saldo']			= rupiah($saldo);

				$return[]	= $d;
			}
			return $return;
		} else {
			return NULL;
		}
	}

	public function createkontrak($value='')
	{

		$no_smartone 	= $_POST['no_smartone'];

		// cek no smartone ada atau tidaknya
		$this->_db->table('kontrak');
		$this->_db->where("no_smartone = '$no_smartone'");
		$cek = $this->_db->fetch('id');

		if ($cek) {
			create_alert('gagal','Maaf, No smartone Sudah ada');
			return FALSE;
		}
		$id_rnd 		= $_POST['id_rnd']; 

		// ubah status kontrak

		$dd['status_kontrak']	= 'sudah';
		$this->_db->table('rnd_pengadaan');
		$this->_db->update($dd,$id_rnd);

		$d['id_rnd'] = $id_rnd;
		$d['no_smartone'] = $no_smartone;
		$d['no_spk'] = $_POST['no_spk'];
		$d['nama_vendor'] = $_POST['nama_vendor'];
		$d['tgl_akhir'] = $_POST['tgl_akhir'];
		$d['keterangan'] = $_POST['keterangan'];
		$this->_db->table('kontrak');
		return $this->_db->insert($d);
	}

	public function updatekontrak($id_kontrak)
	{
		$d['no_smartone'] = $_POST['no_smartone'];
		$d['no_spk'] = $_POST['no_spk'];
		$d['nama_vendor'] = $_POST['nama_vendor'];
		$d['tgl_akhir'] = $_POST['tgl_akhir'];
		$d['keterangan'] = $_POST['keterangan'];
		return $this->_db->update($d,$id_kontrak);
	}

	public function saldo($value='')
	{
		$this->_db->table('saldo');
		$saldo = $this->_db->fetch('id');
		return $saldo->saldo;
	}
}