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
		$data['dashboardrnd']		= $this->model('rnd')->dashboard();
		$data['dashboarprk']		= $this->model('prk')->jumlahprk();
		$data['saldo']		= $this->model('rnd')->sisasaldo();
		// $data['datachart']					= $this->model('home')->chart();
		$this->adminpage('Administrator/beranda',$data);
	}

	// --------------------------------------------------------------------
	// fungsi RAB dan NOTA DINAS
	public function tambahrnd($arus=null)
	{
		$data['jenis']	= $this->model()->listdata('jenis','obj');
		$data['prk']	= $this->model()->listdata('prk','obj');
		$this->adminpage('rnd/tambahrnd',$data);
	}
	public function editrnd($id_rnd)
	{
		$data['jenis']	= $this->model()->listdata('jenis','obj');
		$data['prk']	= $this->model()->listdata('prk','obj');
		$data['dataprk']	= $this->model('prk')->listprksetidrnd($id_rnd);
		$data['rnd']	= $this->model()->listdataid('rnd_pengadaan',$id_rnd);
		$this->adminpage('rnd/editrnd',$data);
	}

	public function updaternd($id_rnd)
	{
		$save = $this->model('rnd')->updaternd($id_rnd);
		$this->popup('Data berhasil diperbaharui','admin/lihatrnd');
	}

	public function simpanrnd($arus=null)
	{
		$save 	= $this->model('rnd')->creaternd();
		if ($save) {
			$this->popup('Data berhasil tersimpan','admin/lihatrnd');
		} else {
			$this->popup('Data Gagal Tersimpan','admin/tambahrnd');
		}	
	}
	public function lihatrnd($value='')
	{
		$data['rnd']	= $this->model('rnd')->readrnd();
		$this->adminpage('rnd/lihatrnd',$data);
	}

	public function detailrnd($no_rnd)
	{
		$data['rnd']	= $this->model('rnd')->readrndid($no_rnd);
		$data['kontrak']= $this->model('kontrak')->readkontraksetnornd($no_rnd);
		$this->adminpage('rnd/detailrnd',$data);
	}



	public function hapusrnd($no_rnd)
	{
		$this->model('rnd')->deleterndid($no_rnd);
		$this->popup('Data rnd berhasil terhapus','admin/lihatrnd');
	}

	// -------------------------------------------------------------------

	public function tambahkontrak()
	{
		$data['kontrak']	= $this->model('kontrak')->readkontrakjoinrnd();
		$data['rnd'] 	= $this->model('Rnd')->listrndkosong();
		$this->adminpage('kontrak/tambahkontrak',$data);
	}
	public function editkontrak($id_kontrak)
	{
		$data['kontrak']	= $this->model()->listdataid('kontrak',$id_kontrak);
		$this->adminpage('kontrak/editkontrak',$data);
	}
	public function lihatkontrak($value='')
	{
		$data['rnd'] 	= $this->model('Rnd')->listrndkosong();
		$data['kontrak']	= $this->model('kontrak')->readkontrakjoinrnd();
		$this->adminpage('kontrak/lihatkontrak',$data);
	}

	public function updatekontrak($id_kontrak)
	{
		$save = $this->model('kontrak')->updatekontrak($id_kontrak);
		$this->popup('Data berhasil diperbaharui','admin/lihatkontrak');
	}

	public function simpankontrak()
	{
		$save = $this->model('kontrak')->createkontrak();
		if ($save) {
			$this->popup('Data berhasil tersimpan','admin/lihatkontrak');
		} else {
			$this->popup('Data Gagal tersimpan','admin/tambahkontrak');
		}
	}

	public function detailkontrak($no_nik)
	{
		$data['kontrak']	= $this->model('kontrak')->readkontrakid($no_nik);
		$this->adminpage('kontrak/detailkontrak',$data);
	}

	public function hapuskontrak($no_rnd,$no_nik)
	{
		$this->model('kontrak')->deletekontrakid($no_nik);
		$this->popup('Data Anggota Keluarga berhasil terhapus','admin/detailrnd/'.$no_rnd);
	}

// #########################################################################


	// -------------------------------------------------------------------

	public function tambahpembayaran()
	{
		$data['pembayaran']	= $this->model('pembayaran')->readpembayaranjoinrnd();
		$data['rnd'] 	= $this->model('Rnd')->listrndpembayaran();
		$this->adminpage('pembayaran/tambahpembayaran',$data);
	}
	public function editpembayaran($id_pembayaran)
	{
		$data['pembayaran']	= $this->model()->listdataid('pembayaran',$id_pembayaran);
		$this->adminpage('pembayaran/editpembayaran',$data);
	}
	public function lihatpembayaran($value='')
	{
		$data['rnd'] 	= $this->model('Rnd')->listrndpembayaran();
		$data['pembayaran']	= $this->model('pembayaran')->readpembayaranjoinrnd();
		$this->adminpage('pembayaran/lihatpembayaran',$data);
	}

	public function simpanpembayaran()
	{
		$save = $this->model('pembayaran')->createpembayaran();
		if ($save) {
			$this->popup('Data berhasil tersimpan','admin/lihatpembayaran');
		} else {
			$this->popup('Data Gagal tersimpan','admin/tambahpembayaran');
		}
	}

	public function updatepembayaran($id_pembayaran)
	{
		$save = $this->model('pembayaran')->updatepembayaran($id_pembayaran);
		$this->popup('Data berhasil diperbaharui','admin/lihatpembayaran');
	}

	public function detailpembayaran($no_nik)
	{
		$data['pembayaran']	= $this->model('pembayaran')->readpembayaranid($no_nik);
		$this->adminpage('pembayaran/detailpembayaran',$data);
	}

	public function hapuspembayaran($no_rnd,$no_nik)
	{
		$this->model('kontrak')->deletekontrakid($no_nik);
		$this->popup('Data Anggota Keluarga berhasil terhapus','admin/detailrnd/'.$no_rnd);
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
		$cek = $this->model('admin')->updatesetting();
		$this->popup('Data setting telah diperbaharui','admin/setting');
	}


	public function ubahakun($value='')
	{
		$data['admin']		= $this->model('home')->dataadmin();
	 	$this->adminpage('Administrator/ubahakun',$data);
	}

	public function prosesubahakun($value='')
	{
		$cek = $this->model('admin')->updateakun();
		if ($cek) {
			$this->popup('Data Akun telah diperbaharui','admin/ubahakun');
		} else {
			$this->popup('Maaf, password tidak sama','admin/ubahakun');
		}
		
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
