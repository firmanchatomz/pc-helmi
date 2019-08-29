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

class Ktp extends ModelClass
{
	private $ktp = 'ktp';

	function __construct()
	{
		parent::__construct();
		$this->_db->table($this->ktp);
	}

	public function readktpid($nik)
	{
		return $this->_db->fetchid($nik);
	}

	public function readktpsetnokk($no_kk)
	{
		$this->_db->where("no_kk = '$no_kk'");
		return $this->_db->fetch();
	}

	public function deletektpid($no_nik)
	{
		return $this->_db->delete($no_nik);
	}

	public function readktp($value='')
	{
		return $this->_db->fetch();
	}

	// format default class
	public function createktp($value='')
	{

		$d['no_kk'] 						= $this->filter_input($_POST['no_kk']);
		$d['no_urut'] 					= $this->filter_input($_POST['no_urut']);
		$d['no_nik'] 						= $this->filter_input($_POST['no_nik']);
		$d['nama'] 							= $this->filter_input($_POST['nama']);
		$d['no_akte'] 					= $this->filter_input($_POST['no_akte']);
		$d['jk'] 								= $this->filter_input($_POST['jk']);
		$d['hubungan_keluarga'] = $this->filter_input($_POST['hubungan_keluarga']);
		$d['tempat_lahir'] 			= $this->filter_input($_POST['tempat_lahir']);
		$d['tanggal_lahir'] 		= $this->filter_input($_POST['tanggal_lahir']);
		$d['tgl_dibuat'] 				= setdate();
		$d['perkawinan'] 				= $this->filter_input($_POST['perkawinan']);
		$d['agama'] 						= $this->filter_input($_POST['agama']);
		$d['golongan_darah'] 		= $this->filter_input($_POST['golongan_darah']);
		$d['kewarganegaraan'] 	= $this->filter_input($_POST['kewarganegaraan']);
		$d['suku'] 							= $this->filter_input($_POST['suku']);
		$d['pendidikan'] 				= $this->filter_input($_POST['pendidikan']);
		$d['pekerjaan'] 				= $this->filter_input($_POST['pekerjaan']);
		$d['nama_orangtua'] 		= $this->filter_input($_POST['nama_orangtua']);
		$d['kb'] 								= $this->filter_input($_POST['kb']);


		$d['cacat_fisik'] 			= $this->multi('cacat_fisik');
		$d['cacat_mental'] 			= $this->multi('cacat_mental');
		$d['wajib_pajak'] 			= $this->multi('wajib_pajak');
		$d['lembaga_pemerintahan'] 	= $this->multi('lembaga_pemerintahan');
		$d['lembaga_masyarakat'] 		= $this->multi('lembaga_masyarakat');
		$d['lembaga_ekonomi'] 			= $this->multi('lembaga_ekonomi');

		return $this->_db->insert($d);
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

	public function jumlahktp($value='')
	{
		$this->_db->table('ktp');
		return $this->_db->jumdata();
	}

		public function dashboardktp($value='')
	{
		$this->_db->table('ktp');
		$this->_db->where("jk = 'perempuan'");
		$jumperempuan     = $this->_db->jumdata();
		$jumktp 			= self::jumlahktp();
		$jumlakilaki			= $jumktp - $jumperempuan;

		$d =	[ 'jumktp' => $jumktp,
						'jumperempuan' => $jumperempuan,
						'jumlakilaki' => $jumlakilaki];
		return $d; 
	}
}