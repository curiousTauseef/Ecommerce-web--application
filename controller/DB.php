<?php
$db = mysqli_connect('127.0.0.1','root','','camera');
if(mysqli_connect_errno())
{
	echo 'Database connection failed with following problems : '.mysqli_connect_error();
	die();
}

define('BASEURL',('ProductsModal.php'));