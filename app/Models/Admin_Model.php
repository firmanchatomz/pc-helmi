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

	public function setfileimage($value='')
	{
		$set = ['post' => 'logo',
						'file' => 'image',
						'type' => ['jpeg','jpg','png'],
						'size' => 1000000,
						'move' => 'assets/img/'];
		return $set;
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