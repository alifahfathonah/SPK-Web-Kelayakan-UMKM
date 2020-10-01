<?php
include "sesuser.php";
mysql_query("update login set username='$_POST[username]',password='$_POST[password]' where idlogin='$_SESSION[user]'");
mysql_query("update ukm set idjenis='$_POST[a]',pemilik='$_POST[b]',nama='$_POST[c]',alamat='$_POST[d]',tlp='$_POST[e]'  where idlogin='$_SESSION[user]'");
header("Location:user.php");
?>