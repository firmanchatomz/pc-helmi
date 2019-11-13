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

class Home extends ModelClass
{
	public function dataadmin()
	{
		$id_admin = $_SESSION['admin'];
		
		$this->_db->table('admin','user');
		$this->_db->where("id_admin = '$id_admin'");
		return $this->_db->fetchjoin('id');
	}

	public function chart($value='')
	{
		// $this->_db->table('ktp');
		// $jumlahktp = $this->_db->jumdata();

		// $this->_db->table('ktp');
		// $this->_db->where("jk = 'perempuan'");
		// $jumperempuan     = $this->_db->jumdata();
		// $jumlakilaki			= $jumlahktp - $jumperempuan;


		// $this->_db->table('ktp');
		// $this->_db->where(" perkawinan= 'sudah kawin'");
		// $jumkawin     = $this->_db->jumdata();
		// $jumbelumkawin= $jumlahktp - $jumkawin;


		// $this->_db->table('kk');
		// $jumkk = $this->_db->jumdata();

		// per rt ----------------------------------------------
		// $namart 	= null;
		// $jumrt 		= null;
		// $rw 	= ['001','002','003','004','005','006','007'];
		// for ($i=0; $i < count($rw); $i++) {
		// 	$nort 	= $rw[$i]; 
		// 	$nrt 		= $i+1;
		// 	$this->_db->table('kk');
		// 	$this->_db->where("rw = '$nort'");
		// 	$namart .= "'RW ".$nrt."',";
		// 	$jumrt 	.= $this->_db->jumdata().",";
		// }

		// $namart = rtrim($namart,',');
		// $jumrt = rtrim($jumrt,',');

		// ------------------------------------
		// $chartjk['labelrt'] 	= $namart;
		// $chartjk['nilairt']		= $jumrt;

		// $chartjk['labeljk'] 	= "'laki-laki','perempuan'";
		// $chartjk['nilaijk']		= $jumlakilaki.','.$jumperempuan;

		// $chartjk['labelkw'] 	= "'Sudah Kawin','Belum Kawin'";
		// $chartjk['nilaikw']		= $jumkawin.','.$jumbelumkawin;

		// return $chartjk;
	}

	public function ceklogin($value='')
	{
		$this->settable('admin');
		return $this->proseslog();
	}

	public function simpanpenduduk($value='')
	{
		$nama 			= $_POST['nama'];
		// cek duplikat

		$this->_db->table('penduduk');
		$this->_db->where("nama = '$nama'");
		$cek = $this->_db->jumdata();

		if ($cek > 0) {
			return FALSE;
		}

		$d['no_kk']	= '327809xxxxxxxxxx';
		$d['no_nik']	= '32xxxxxxxxxxxxxx';
		$d['nama']	= $nama;
		$d['tempat_lahir']	= $_POST['tempat_lahir'];
		$d['tgl_lahir']	= $_POST['tgl_lahir'];
		$d['status_perkawinan']	= $_POST['status_perkawinan'];
		$d['jenis_kelamin']	= $_POST['jenis_kelamin'];
		$d['dusun']	= 'PERUM CIPTA GRAHA MANDIRI '.$_POST['dusun'];
		$d['rt']	= $_POST['rt'];
		$d['rw']	= $_POST['rw'];

		$this->_db->table('penduduk');
		$this->_db->insert($d);

		return TRUE;
	}

	public function datapenduduk($value='')
	{
		$this->_db->table('penduduk');
		$this->_db->opsi(" order by id_penduduk DESC limit 5");
		return $this->_db->fetch();
	}

	public function jumlahpenduduk($value='')
	{
		$this->_db->table('penduduk');
		return $this->_db->jumdata();
	}
}