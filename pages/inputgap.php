<?php
include "sesadmin.php";
mysql_query("insert into gap values ('','$_POST[a]','$_POST[b]','$_POST[c]')");
header("Location:admin.php?page=gap");
?>