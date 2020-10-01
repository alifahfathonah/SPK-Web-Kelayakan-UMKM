<?
include"sesuser.php";
$z=mysql_fetch_array(mysql_query("select * from ukm where idlogin='$_SESSION[user]'"));
$a=count($_POST[idsubkriteria]);
$i=0;
while ($i<$a) 
{
 $idkriteria=$_POST[idkriteria];
 $idsubkriteria=$_POST[idsubkriteria];
 $idsubkriteria2=$_POST[idsubkriteria2];
 $nilai=$_POST[nilai];
 $cek=mysql_num_rows(mysql_query("select * from nilai where idukm='$z[0]' and idsubkriteria='$idsubkriteria[$i]'"));
 $z1=mysql_fetch_array(mysql_query("select * from subkriteria2 where idsubkriteria2='$idsubkriteria2[$i]'"));
 
 if($cek==0)
 {
  mysql_query("insert into nilai values('','$z[0]','$idkriteria[$i]','$idsubkriteria[$i]','$idsubkriteria2[$i]','$z1[nilai]','')");
 }
 else
 {
  mysql_query("update nilai set nilai='$z1[nilai]'  where idukm='$z[0]' and idsubkriteria='$idsubkriteria[$i]'");
 }
$i++;
}
header("location:user.php?page=penilaian");
?>


