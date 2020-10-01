<?php
include "sesadmin.php";
if($_POST[ok]=="ok")
{
 $o=md5($_POST[b]);
 mysql_query("update login set password='$o' where idlogin='$_SESSION[admin]'");
}
mysql_query("update login set username='$_POST[a]' where idlogin='$_SESSION[admin]'");
header("Location:admin.php");
?>