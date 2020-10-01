<?php
include "sesadmin.php";
mysql_query("update publish set publish='2' ");
header("Location:admin.php?page=publish");
?>