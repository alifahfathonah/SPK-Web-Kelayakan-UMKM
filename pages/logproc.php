<?php
  session_start();
  include ("koneksi.php"); 
   $login = mysql_query("select * from login where username='$_POST[username]' and (password = md5('" .$_POST['password'] . "')) ");
   $cek = mysql_num_rows($login);
   $ses=mysql_fetch_array($login);

	 if($cek == 1) 
	 {
			 $_SESSION['admin'] = $ses['0'];
			 header("location:admin.php");
	 }
	 else
	 {
		 $login = mysql_query("select * from login where username='$_POST[username]' and password='$_POST[password]' ");
		 $cek = mysql_num_rows($login);
		 $ses=mysql_fetch_array($login);
		 if($cek == 1) 
		 {
			 $_SESSION['user'] = $ses['0'];
			 header("location:user.php");
		 }
		 else
		 {
			 header("location:index.php");
		 }
		 
		 
		 
		 
		 
	 }
 ?>