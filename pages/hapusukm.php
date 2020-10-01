<?php
include "sesadmin.php";
mysql_query("delete from akhir where idukm='$_GET[id]'");
mysql_query("delete from bobot where idukm='$_GET[id]'");
mysql_query("delete from hasil where idukm='$_GET[id]'");
mysql_query("delete from nilai where idukm='$_GET[id]'");
mysql_query("delete from ukm where idukm='$_GET[id]'");
header("Location:admin.php?page=ukm");
?>