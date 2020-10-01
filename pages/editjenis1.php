<?php
include "sesadmin.php";
mysql_query("update jenis set jenis='$_POST[a]'  where idjenis='$_GET[id]'");
header("Location:admin.php?page=jenis");
?>