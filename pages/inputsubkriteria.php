<?php
include "sesadmin.php";
mysql_query("insert into subkriteria values ('$_POST[a]','$_GET[id]','$_POST[b]','$_POST[c]','$_POST[d]')");
header("Location:admin.php?page=subkriteria&id=$_GET[id]");
?>