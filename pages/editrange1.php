<?php
include "sesadmin.php";
mysql_query("update range set range='$_POST[a]'");
header("Location:admin.php?page=range");
?>