<?php
//membangun koneksi
$username="dodi_123";
$password="dodi_123";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

if(!$koneksi){
	$err=oci_error();
	echo "gagal tersambung ke ORACLE". $err['text'];
} else {
	//echo "koneksi berhasil";
}

?>