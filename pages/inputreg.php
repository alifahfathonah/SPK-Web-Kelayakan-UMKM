<?php
session_start();
include "../koneksi.php";
mysql_query("insert into login values ('','$_POST[c]','$_POST[c]','2')");
$q=mysql_fetch_array(mysql_query("select * from login order by idlogin desc"));
mysql_query("insert into ukm values ('','$q[0]','$_POST[a]','$_POST[b]','$_POST[c]','$_POST[d]','$_POST[e]')");
$_SESSION['user'] = $q[0];


header("Location:user.php");
?>