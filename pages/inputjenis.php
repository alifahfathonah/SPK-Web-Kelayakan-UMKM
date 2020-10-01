<?php
include "sesadmin.php";
mysql_query("insert into jenis values ('','$_POST[a]')");
header("Location:admin.php?page=jenis");
?>