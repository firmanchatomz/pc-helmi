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

class Kk extends ModelClass
{	
	private $kk 	= 'kk';

	function __construct()
	{
		parent::__construct();
		$this->_db->table($this->kk);
	}

	public function readkk($value='')
	{
		return $this->_db->fetch();
	}

	public function readkkid($no_kk)
	{
		return $this->_db->fetchid($no_kk);
	}

	public function createkk($value='')
	{
		$d['id_admin']				= $_SESSION['rw'];
		$d['no_kk']						= $this->filter_input($_POST['no_kk']);
		$d['kepala_keluarga']	= $this->filter_input($_POST['kepala_keluarga']);
		$d['alamat']					= $this->filter_input($_POST['alamat']);
		$d['rt']							= rtrw($_POST['rt']);
		$d['rw']							= rtrw($_POST['rw']);
		$d['nama_dusun']			= $this->filter_input($_POST['nama_dusun']);
		$d['pekerjaan']				= $this->filter_input($_POST['pekerjaan']);
		$d['jabatan']					= $this->filter_input($_POST['jabatan']);
		$d['tgl_dibuat']			= setdate();

		return $this->_db->insert($d);
	}

	public function jumlahkk($value='')
	{
		$this->_db->table('kk');
		return $this->_db->jumdata();
	}

	public function deletekkid($no_kk)
	{
		$this->_db->table('kk');
		return $this->_db->delete($no_kk);
	}

	public function cari($value='')
	{
		$kk 	= $_POST['term'];
		$this->_db->table('kk');
		$data = $this->_db->where(" no_nik LIKE '%$kk%'");
		foreach ($data as $row) {
			$d[]	= $row['no_kk'];
		}
		return $d;
	}
}