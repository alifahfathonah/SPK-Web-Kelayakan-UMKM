<?php
include "sesadmin.php";
mysql_query("delete from subkriteria2  where idsubkriteria2='$_GET[id2]'");
header("Location:admin.php?page=nilaisubkriteria&id=$_GET[id]&id1=$_GET[id1]");
?>