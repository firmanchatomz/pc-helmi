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

class Rw extends ModelClass
{
	// format default class
	public function listrw($value='')
	{
		$this->_db->table('admin');
		$this->_db->where("level='rw'");
		return $this->_db->fetch('obj');
	}

	public function createrw($value='')
	{
		$d['username'] = $_POST['username'];
		$d['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$d['level'] = 'rw';
		$d['nama'] = $_POST['nama'];
		$d['alamat'] = $_POST['alamat'];
		$d['keterangan'] = $_POST['keterangan'];

		$this->_db->table('admin');
		return $this->_db->insert($d);
	}
}