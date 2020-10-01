<?php
include "sesadmin.php";
mysql_query("update gap set gap='$_POST[a]',nilai='$_POST[b]',ket='$_POST[c]' where idgap='$_GET[id]'");
header("Location:admin.php?page=gap");
?>