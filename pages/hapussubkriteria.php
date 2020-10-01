<?php
include "sesadmin.php";
mysql_query("delete from subkriteria  where idsubkriteria='$_GET[id1]'");
header("Location:admin.php?page=subkriteria&id=$_GET[id]");
?>