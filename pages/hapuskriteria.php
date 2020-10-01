<?php
include "sesadmin.php";
mysql_query("delete from kriteria  where idkriteria='$_GET[id]'");
header("Location:admin.php?page=kriteria");
?>