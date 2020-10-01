<?php
include "sesadmin.php";
mysql_query("insert into subkriteria2 values ('','$_GET[id1]','$_POST[a]','$_POST[b]')");
header("Location:admin.php?page=nilaisubkriteria&id=$_GET[id]&id1=$_GET[id1]");
?>