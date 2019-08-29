<?php
/**
 * This file is part of the Chatomz PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Firman Setiawan
 * @copyright      Copyright (c) Firman Setiawan
 *
 * ---------------------------------------------------------------------------------------------------------------
 */

namespace app\Controllers; // package untuk class HomeController

use app\Core\Controller; // alias namespace

// Controller class system
class AdminController extends Controller
{
	// method default
	function __construct()
	{
		if (!hak_akses())
			$this->redirect('home/login');
		$data['admin']	= $this->model('home')->dataadmin();
		$data['setting']= $this->model('admin')->readsetting();
		$this->setdata($data);
	}
	// all class use methos index for method default
	public function index()
	{
		$data['dashboardktp']		= $this->model('ktp')->dashboardktp();
		$data['dashboardkk']		= $this->model('kk')->jumlahkk();
		$data['datachart']					= $this->model('home')->chart();
		$this->adminpage('Administrator/beranda',$data);
	}

	// --------------------------------------------------------------------
	// fungsi KK
	public function lihatkk($value='')
	{
		$data['kk']	= $this->model('kk')->readkk();
		$this->adminpage('kk/lihatkk',$data);
	}

	public function detailkk($no_kk)
	{
		$data['kk']	= $this->model('kk')->readkkid($no_kk);
		$data['ktp']= $this->model('ktp')->readktpsetnokk($no_kk);
		$this->adminpage('kk/detailkk',$data);
	}

	public function tambahkk($arus=null)
	{
		$this->adminpage('kk/tambahkk');
	}

	public function simpanKk($arus=null)
	{
		$save 	= $this->model('kk')->createkk();
		if ($save) {
			$this->popup('Data berhasil tersimpan','admin/lihatkk');
		} else {
			$this->popup('Data Gagal Tersimpan','admin/tambahkk');
		}	
	}

	public function hapuskk($no_kk)
	{
		$this->model('kk')->deletekkid($no_kk);
		$this->popup('Data KK berhasil terhapus','admin/lihatkk');
	}

	// -------------------------------------------------------------------

	public function tambahktp($no_kk)
	{
		$data['no_kk'] 	= $no_kk;
		$this->adminpage('ktp/tambahktp',$data);
	}

	public function simpanktp($no_kk)
	{
		$save = $this->model('ktp')->createktp();
		if ($save) {
			$this->popup('Data berhasil tersimpan','admin/detailkk/'.$no_kk);
		} else {
			$this->popup('Data Gagal tersimpan','admin/tambahktp/'.$no_kk);
		}
	}

	public function detailktp($no_nik)
	{
		$data['ktp']	= $this->model('ktp')->readktpid($no_nik);
		$this->adminpage('ktp/detailktp',$data);
	}

	public function hapusktp($no_kk,$no_nik)
	{
		$this->model('ktp')->deletektpid($no_nik);
		$this->popup('Data Anggota Keluarga berhasil terhapus','admin/detailkk/'.$no_kk);
	}

// #########################################################################
	
// #########################################################################

// ########################################################################
	// data rw

	public function lihatrw($value='')
	{
		$data['rw']	= $this->model('rw')->listrw();
		$this->adminpage('rw/lihatrw',$data);
	}

	public function simpanrw()
	{
		$save = $this->model('rw')->createrw();
		if ($save) {
			$this->redirect('admin/lihatrw');
		} else {
			$this->popup('Data Gagal tersimpan','admin/lihatrw');
		}
	}

	// #####################################################################



	// #####################################################################
	// setting
	public function setting($value='')
	{
		$data['admin']		= $this->model('home')->dataadmin();
		$data['setting']	= $this->model('admin')->readsetting();

	 	$this->adminpage('Administrator/setting',$data);
	}

	public function ubahsetting($value='')
	{
		$this->model('admin')->updatesetting();
		$this->popup('Data setting telah diperbaharui','admin/setting');
	}

	// ######################################################################
	// LOGOUT
	public function logout($value='')
	{
		session_destroy();
		$this->popup('logout berhasil','home/login');
	}

	// ######################################################################
}
