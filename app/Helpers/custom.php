<?php

// cek akses session admin
function akses_admin(){
	if (isset($_SESSION['admin'])) {
		return TRUE;
	}
}

// cek akses session rt
function akses_rw(){
	if (isset($_SESSION['rw'])) {
		return TRUE;
	}
}

function akses($akses)
{
	if (isset($_SESSION[$akses])) {
		return TRUE;
	}
}

function hak_akses(){
	if (akses_admin() || akses_rw()) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function rtrw($data)
{
	$result = $data;
	if ($data >= 1 AND $data < 10) {
		$result = '00'.$data;
	} else {
		$result = '0'.$data;
	}
	return $result;
}