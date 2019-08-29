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

class Arus extends ModelClass
{
	function __construct()
	{
		parent::__construct(); // get __construct of modelclass
		$this->_db->table('aruskk');
	}

	public function readkksetarus($status_arus)
	{
		$this->_db->table('aruskk','kk');
		$this->_db->part("no_kk,kepala_keluarga,tgl_arus");
		$this->_db->where("status_arus = '$status_arus'");
		return $this->_db->fetchjoin();
	}

	public function createarus($arus)
	{
		$d['no_kk']				= $_POST['no_kk'];
		$d['status_arus']	= $arus;
		$d['tgl_arus']		= $_POST['tgl_arus'];

		return $this->_db->insert($d);
	}

	public function jumlaharus($value='')
	{
		$this->_db->table('aruskk');
		return $this->_db->jumdata();
	}

	public function dashboardarus($value='')
	{
		$this->_db->table('aruskk');
		$this->_db->where("status_arus = 'masuk'");
		$jumarus 					= self::jumlaharus();
		$jumarusmasuk 		= $this->_db->jumdata();
		$jumaruskeluar		= $jumarus - $jumarusmasuk;


		$d =	[ 'jumarus' => $jumarus,
						'jumarusmasuk' => $jumarusmasuk,
						'jumaruskeluar' => $jumaruskeluar];
		return $d; 
	}

	public function updatekkkeluar($value='')
	{
		$d['no_kk'] = $_POST['no_kk'];
		$d['tgl_arus'] = $_POST['tgl_arus'];
		$d['status_arus'] = 'keluar';
		$this->_db->table('aruskk');
		$this->_db->insert($d);
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