<?php
include "sesadmin.php";
mysql_query("update subkriteria set subkriteria='$_POST[b]',profil='$_POST[c]',status='$_POST[d]'  where idsubkriteria='$_GET[id1]'");
header("Location:admin.php?page=subkriteria&id=$_GET[id]");
?>