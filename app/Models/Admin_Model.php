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

class Admin extends ModelClass
{
	function __construct()
	{
		parent::__construct(); // get __construct of modelclass
	}

	public function readsetting($value='')
	{
		$this->_db->table('setting');
		return $this->_db->fetch('id');
	}

	public function listadminrt($value='')
	{
		$id_admin 	= $_SESSION['rt'];
		$this->_db->table('admin');
		return $this->_db->fetchid($id_admin);
	}

		// function for update data
	public function updatesetting()
	{
		$id_setting 					= $_POST['id_setting'];
		$d['nama_aplikasi'] 		= $this->filter_input($_POST['nama_aplikasi']);
		$d['nama_perumahan'] 		= $this->filter_input($_POST['nama_perumahan']);
		$d['judul_footer'] 	= $this->filter_input($_POST['judul_footer']);
		if (isset($_POST['ubahgambar'])) {
				$set 									= self::setfileimage();
				$this->form->setfile($set);
				// cek validation file
				if ($this->form->validation()) {
					$d['logo']			= $this->form->getnamefile();
					$gambarlama 				= 'assets/img/'.$_POST['gambar'];
					if (file_exists($gambarlama)) {
						unlink($gambarlama);
					}
					
				} else {
					create_alert('Gagal', $this->form->alert()) ;
				}
			}
			create_alert('Berhasil','Setting sudah diperbaharui','success');
			$this->_db->table('setting');
			return $this->_db->update($d,$id_setting);
	}

	public function updateakun($value='')
	{

		if (isset($_POST['cek'])) {
			// ubah password
			$password1 		= $_POST['password1'];
			$password2 		= $_POST['password2'];
			if ($password1 != $password2) {
				return false;
			}
			$d['password'] = password_hash($password1, PASSWORD_DEFAULT);
		}
		$d['nama'] 		= $_POST['nama'];
		$d['username']	= $_POST['username'];
		$this->_db->table('admin');
		$this->_db->update($d,1);
		return TRUE;
	}

	public function simpanakun($value='')
	{
		// get user

		$password 		= $_POST['password'];
		$d['id_user'] = $_POST['id_user'];
		$d['nama'] 		= $_POST['nama'];
		$d['username']	= $_POST['username'];
		$d['password'] 	= password_hash($password, PASSWORD_DEFAULT);

		create_alert('berhasil','AKun baru sudah ditambahkan','success');

		$this->_db->table('admin');
		return $this->_db->insert($d);
	}

	public function setfileimage($value='')
	{
		$set = ['post' => 'logo',
						'file' => 'image',
						'type' => ['jpeg','jpg','png'],
						'size' => 1000000,
						'move' => 'assets/img/'];
		return $set;
	}

	public function laporan($value='')
	{
		$this->_db->table('rnd_pengadaan');
		$this->_db->where("status_kontrak='sudah' AND status_pembayaran='sudah' ");
		$data = $this->_db->fetch();

		$this->_db->table('saldo');
		$saldo = $this->_db->fetch('id');

		$saldo = $saldo->saldo;
		foreach ($data as $r) {
			$id_rnd = $r['id_rnd'];
			$saldo = $saldo - $r['nilai_rab'];
			// data kontrak
			$this->_db->table('kontrak');
			$this->_db->where("id_rnd='$id_rnd'");
			$kontrak = $this->_db->fetch('id');

				// data kontrak
			$this->_db->table('pembayaran');
			$this->_db->where("id_rnd='$id_rnd'");
			$pembayaran = $this->_db->fetch('id');
			$total = $pembayaran->n_100+$pembayaran->n_95+$pembayaran->n_5;

			// prk
			$this->_db->table('detail_prk');
			$this->_db->where("id_rnd='$id_rnd'");
			$prk = $this->_db->fetch();
			$index = 1;
			foreach ($prk as $p) {
				if ($index < 6) {
					$id_prk = $p['id_prk'];
					$this->_db->table('prk');
					$dprk = $this->_db->fetchid($id_prk);
					$dd[] = $dprk->nama_prk;
				}
				$index++;
			}

			$d['id_rnd'] 	= $id_rnd;
			$d['id_admin']	= $r['id_admin'];
			$d['id_jenis']	= $r['id_jenis'];
			$d['no_skki']	= $r['no_skki'];
			$d['no_nota']	= $r['no_nota'];
			$d['prk']		= $dd;
			$d['uraian']	= $r['uraian'];
			$d['tgl_dibuat']= $r['tgl_dibuat'];
			$d['nilai_rab']	= $r['nilai_rab'];
			$d['saldo']		= $saldo;
			$d['status_kontrak']	= $r['status_kontrak'];
			$d['status_pembayaran'] = $r['status_pembayaran'];

			// kontrak
			$d['no_smartone'] = $kontrak->no_smartone;
			$d['nama_vendor'] = $kontrak->nama_vendor;
			$d['tgl_akhir_kontrak'] = $kontrak->tgl_akhir;
			$d['no_spk'] = $kontrak->no_spk;
			$d['keterangan'] = $kontrak->keterangan;

			// pembayaran

			$d['id_pembayaran'] = $pembayaran->id_pembayaran;
			$d['r_100'] = $pembayaran->r_100;
			$d['r_95'] = $pembayaran->r_95;
			$d['r_5'] = $pembayaran->r_5;
			$d['n_100'] = $pembayaran->n_100;
			$d['n_95'] = $pembayaran->n_95;
			$d['n_5'] = $pembayaran->n_5;
			$d['status'] = $pembayaran->status;
			$d['total'] = $total;

			$result[] = $d;

		}

		return $result;
	}

	// function for add data
	public function create($value='')
	{
		# set code here
	}

	// function for update data
	public function update($value='')
	{
		# set code here
	}

	// function for delete data
	public function delete($value='')
	{
		# set code here
	}

	// function for read data
	public function read($value='')
	{
		# set code here
	}

	// function for count total data
	public function total($value='')
	{
		# set code here
	}
}