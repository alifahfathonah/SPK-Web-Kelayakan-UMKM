<?php
include "sesadmin.php";
mysql_query("update subkriteria2 set ket='$_POST[a]',nilai='$_POST[b]'  where idsubkriteria2='$_GET[id2]'");
header("Location:admin.php?page=nilaisubkriteria&id=$_GET[id]&id1=$_GET[id1]");
?>