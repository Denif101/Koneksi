<?php
$host="localhost";
$user="root";
$password="";
$database="db_denif";

$koneksi=mysqli_connect($host,$user,$password,$database);


if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>
