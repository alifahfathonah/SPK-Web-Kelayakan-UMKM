<?php
include "sesadmin.php";
mysql_query("delete from jenis  where idjenis='$_GET[id]'");
header("Location:admin.php?page=jenis");
?>