<?php

$koneksi = new PDO("mysql:host=localhost;dbname=toko pedia","root","");


if($koneksi){
echo"database berhasil terkoneksi";

}
?>