<?php
include "sesadmin.php";
mysql_query("delete from gap  where idgap='$_GET[id]'");
header("Location:admin.php?page=gap");
?>