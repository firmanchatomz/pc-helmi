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

class Pembayaran extends ModelClass
{
	private $pembayaran = 'pembayaran';

	function __construct()
	{
		parent::__construct();
		$this->_db->table($this->pembayaran);
	}
	// format default class
	public function readpembayaranjoinrnd($value='')
	{
		$saldo = $this->saldo();
		$this->_db->table('pembayaran','rnd_pengadaan');
		$data = $this->_db->fetchjoin('obj');
		if ($data) {
			foreach ($data as $row) {
				$id_admin 			= $row->id_admin;

				$this->_db->table('admin');
				$admin = $this->_db->fetchid($id_admin);

				$this->_db->table('user');
				$user = $this->_db->fetchid($admin->id_user);

				$saldo 	= $saldo - $row->nilai_rab;

				$d['id_pembayaran'] = $row->id_pembayaran;
				$d['r_100'] = $row->r_100;
				$d['r_95'] = $row->r_95;
				$d['r_5'] = $row->r_5;
				$d['n_100'] = $row->n_100;
				$d['n_95'] = $row->n_95;
				$d['n_5'] = $row->n_5;
				$d['nilai_rab'] = rupiah($row->nilai_rab);
				$d['nama_user']		= $user->nama_user;
				$d['status']		= $row->status;

				$return[]	= $d;
			}
			return $return;
		} else {
			return NULL;
		}
	}

	public function createpembayaran($value='')
	{
		$id_rnd 		= $_POST['id_rnd']; 

		// ubah status pembayaran

		$dd['status_pembayaran']	= 'sudah';
		$this->_db->table('rnd_pengadaan');
		$this->_db->update($dd,$id_rnd);

		$d['id_rnd'] = $id_rnd;
		$d['r_100'] = $_POST['r_100'];
		$d['r_95'] = $_POST['r_95'];
		$d['r_5'] = $_POST['r_5'];
		$d['n_100'] = $_POST['n_100'];
		$d['n_95'] = $_POST['n_95'];
		$d['n_5'] = $_POST['n_5'];
		$d['status'] = $_POST['status'];
		$this->_db->table('pembayaran');
		return $this->_db->insert($d);
	}

	public function updatepembayaran($id_pembayaran)
	{

		$d['r_100'] = $_POST['r_100'];
		$d['r_95'] = $_POST['r_95'];
		$d['r_5'] = $_POST['r_5'];
		$d['n_100'] = $_POST['n_100'];
		$d['n_95'] = $_POST['n_95'];
		$d['n_5'] = $_POST['n_5'];
		$d['status'] = $_POST['status'];
		return $this->_db->update($d,$id_pembayaran);
	}

	public function saldo($value='')
	{
		$this->_db->table('saldo');
		$saldo = $this->_db->fetch('id');
		return $saldo->saldo;
	}
}