<?php
/*
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

namespace app\Controllers;

// package untuk class HomeController

use app\Core\Controller; // alias namespace

// Controller class system
class HomeController extends Controller
{
    // method default
    // all class use methos index for method default
    // framework chatomz
    public function index()
    {
      $this->redirect('home/login');
    }

    public function login($value='')
    {
        // echo password_hash('admin', PASSWORD_DEFAULT);
        // die();
    	$this->view('login_star');
    }

    public function ceklogin($value='')
    {
    	$cek = $this->model('home')->ceklogin();
    	if ($cek) {
    		$this->popup('login berhasil','admin');
    	} else {
    		$this->popup('login gagal','home/login');
    	}
    	
    }
}
