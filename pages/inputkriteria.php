<?php
include "sesadmin.php";
mysql_query("insert into kriteria values ('$_POST[a]','$_POST[b]','$_POST[d]')");
header("Location:admin.php?page=kriteria");
?>