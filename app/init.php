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

// ---------------------------------------------------------------------------------------------------------------
// scan file dalam direktori Config

$Config 	= scandir(__DIR__ . '/Config');
$Helper 	= scandir(__DIR__ . '/Helpers');
$Resources	= scandir(__DIR__ . '/Core/Resources');


// ---------------------------------------------------------------------------------------------------------------

// pemanggilan file dalam folder Config 
for ($i=2; $i <= count($Config)-1; $i++) {
	$nconfig = strtolower(rtrim($Config[$i],'.php')); 
	$require = __DIR__ . '/Config/' . $Config[$i];
	if ($i != 2 AND $nconfig != 'url') {
		if ( $config[$nconfig] == TRUE) require_once $require;
	}else	require_once $require; 
}

// pemanggilan file dalam folder Config 
for ($i=2; $i <= count($Helper)-1; $i++) { 
	require_once __DIR__ . '/Helpers/' . $Helper[$i];
}

// pemanggilan file dalam folder Resource 
for ($i=2; $i <= count($Resources)-1; $i++) { 
	require_once __DIR__ . '/Core/Resources/' . $Resources[$i];
}

// ---------------------------------------------------------------------------------------------------------------

spl_autoload_register(function( $class ){
	$class = explode('\\', $class);
	$class = end($class);
	require_once 'Core/' . $class . '.php';
});
require_once 'Core/Autoload.php';
