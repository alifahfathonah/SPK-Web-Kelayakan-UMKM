<?php
session_start();
include"koneksi.php";
mysql_query("delete from zpasien");
mysql_query("delete from znilai");
session_destroy();
header("location:index.php");
?>
