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

class Jenis extends ModelClass
{
	// format default class
	public function listberita($value='')
	{
		$this->_db->table('berita');
		return $this->_db->fetch('obj');
	}

	public function listberitaid($id_berita)
	{
		$this->_db->table('berita');
		return $this->_db->fetchid($id_berita);
	}

	public function tambahberita($value='')
	{
		$d['id_label']		= $_POST['id_label'];
		$d['tgl_dibuat']	= setdatetime();
		$d['judul_berita']= $this->filter_input($_POST['judul_berita']);
		$d['isi_berita']	= $_POST['isi_berita'];

		$nama_file 			= $_FILES['gambar']['name'];
		$lokasi 			= $_FILES['gambar']['tmp_name'];

		// proses pengolahan gambar


		$d['gambar']			= $nama_file;
		move_uploaded_file($lokasi, 'assets/img/berita/'.$nama_file);
		$this->_db->table('berita');
		return $this->_db->insert($d);
	}
}