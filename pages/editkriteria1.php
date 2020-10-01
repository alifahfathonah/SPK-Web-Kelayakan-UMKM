<?php
include "sesadmin.php";
mysql_query("update kriteria set kriteria='$_POST[b]',bobot='$_POST[d]'  where idkriteria='$_GET[id]'");
header("Location:admin.php?page=kriteria");
?>