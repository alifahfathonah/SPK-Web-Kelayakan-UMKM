<?php
include "sesadmin.php";
mysql_query("update total set cf='$_POST[a]',sf='$_POST[b]'");
header("Location:admin.php?page=total");
?>