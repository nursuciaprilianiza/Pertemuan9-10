<?
//Mendefinisikan Konstanta
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','cafe');

//membuat koneksi dengan database 
$con = mysql_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
?>
