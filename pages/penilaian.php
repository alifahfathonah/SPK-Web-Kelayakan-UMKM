<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PENILAIAN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Penilaian  UKM 
                      </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><? 
							  $a=mysql_fetch_array(mysql_query("select * from ukm where idlogin='$_SESSION[user]'"));
							  $b=mysql_num_rows(mysql_query("select * from nilai where idukm='$a[0]'"));
						   if($b==0) { ?>
                                <form action="inputnilai1.php?id=<?=$_GET[id]?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <?php
			$a=mysql_fetch_array(mysql_query("select * from login where idlogin='$_SESSION[user]'"));
			$b=mysql_fetch_array(mysql_query("select * from ukm where idlogin='$_SESSION[user]'"));
			$c=mysql_fetch_array(mysql_query("select * from jenis where idjenis='$b[idjenis]'"));
			?>
                                    <tr>
                                      <td><div align="left">Jenis Usaha</div></td>
                                      <td>:</td>
                                      <td><div align="left"><?=$c[1]?>
                                     
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Nama Pemilik UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left"><?=$b[3]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td width="82"><div align="left">Nama UKM</div></td>
                                      <td width="16">:</td>
                                      <td width="418"><div align="left"><?=$b[4]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Alamat UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left"><?=$b[5]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Telp/HP UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left"><?=$b[6]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"><div align="center"></div></td>
                                    </tr>
                                  </table>
                                  <table bordercolor="#807D79" width="100%" border="1" cellpadding="5" cellspacing="0">
                                    <tr>
                                      <td width="6%"><strong>No.</strong></td>
                                      <td width="23%"><strong>Kriteria</strong></td>
                                      <td width="47%"><strong>SubKriteria</strong></td>
                                    </tr>
                                    <?php
$q = mysql_query("select * from kriteria ");
$n = 1;
while($r = mysql_fetch_array($q))
{
?>
                                    <tr>
                                      <td><?=$n?></td>
                                      <td><?=$r[0]?>
                                        (
                                        <?=$r[1]?>
                                        )</td>
                                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <?
			$t=mysql_query("select * from subkriteria where idkriteria='$r[0]'");
			while($y=mysql_fetch_array($t))
			{
			?>
                                        <tr>
                                          <td width="65%">(
                                            <?=$y[0]?>
                                            )
                                            <?=$y[2]?></td>
                                          <td width="35%"><input name="idkriteria[]" type="hidden" id="idkriteria[]" value="<?=$r[0]?>" />
                                            <input name="idsubkriteria[]" type="hidden" id="idsubkriteria[]" value="<?=$y[0]?>" />
                                            <select name="idsubkriteria2[]" id="idsubkriteria2[]">
                                              <option>Pilih</option>
                                              <?
			$t1=mysql_query("select * from subkriteria2 where idsubkriteria='$y[0]' order by nilai asc");
			while($y1=mysql_fetch_array($t1))
			{
			?>
                                              <option value="<?=$y1[0]?>">
                                                <?=$y1[2]?>
                                              </option>
                                              <?
			}
			?>
                                            </select></td>
                                        </tr>
                                        <? } ?>
                                      </table></td>
                                    </tr>
                                    <?
	$n++;
}
?>
                                  </table>
                                  <br />
                                  <br />
                                  <div align="center">
                                    <input type="submit" name="Submit" value="Simpan" />
                                    <input type="button" name="Submit22" value="Kembali" onclick="self.history.back()"/>
                                  </div>
                                  <p>&nbsp;</p>
                                </form>
                                <? } else { ?>
                                <form action="inputnilai1.php?id=<?=$_GET[id]?>" method="post" enctype="multipart/form-data" name="form1" id="form2">
                                  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                    <?php
			$a=mysql_fetch_array(mysql_query("select * from login where idlogin='$_SESSION[user]'"));
			$b=mysql_fetch_array(mysql_query("select * from ukm where idlogin='$_SESSION[user]'"));
			$c=mysql_fetch_array(mysql_query("select * from jenis where idjenis='$b[idjenis]'"));
			?>
                                    <tr>
                                      <td><div align="left">Jenis Usaha</div></td>
                                      <td>:</td>
                                      <td><div align="left">
                                        <?=$c[1]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Nama Pemilik UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left">
                                        <?=$b[3]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td width="82"><div align="left">Nama UKM</div></td>
                                      <td width="16">:</td>
                                      <td width="418"><div align="left">
                                        <?=$b[4]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Alamat UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left">
                                        <?=$b[5]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td><div align="left">Telp/HP UKM</div></td>
                                      <td>:</td>
                                      <td><div align="left">
                                        <?=$b[6]?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td colspan="3"><div align="center"></div></td>
                                    </tr>
                                  </table>
                                  <table bordercolor="#807D79" width="92%" border="1" cellpadding="5" cellspacing="0">
                                    <tr>
                                      <td width="6%"><strong>No.</strong></td>
                                      <td width="23%"><strong>Kriteria</strong></td>
                                      <td width="47%"><strong>SubKriteria</strong></td>
                                    </tr>
                                    <?php
$q = mysql_query("select * from kriteria ");
$n = 1;
while($r = mysql_fetch_array($q))
{
?>
                                    <tr>
                                      <td><?=$n?></td>
                                      <td><?=$r[0]?>
                                        (
                                        <?=$r[1]?>
                                        )</td>
                                      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <?
			$t=mysql_query("select * from subkriteria where idkriteria='$r[0]'");
			while($y=mysql_fetch_array($t))
			{
 $z=mysql_fetch_array(mysql_query("select * from nilai where idukm='$a[0]' and idsubkriteria='$y[0]'"));
 $z1=mysql_fetch_array(mysql_query("select * from subkriteria2 where idsubkriteria2='$z[idsubkriteria2]'"));
			?>
                                        <tr>
                                          <td width="60%">(
                                            <?=$y[0]?>
                                            )
                                            <?=$y[2]?></td>
                                          <td width="40%"><?=$z1[2]?></td>
                                        </tr>
                                        <? } ?>
                                      </table></td>
                                    </tr>
                                    <?
	$n++;
}
?>
                                  </table>
                                  <br />
                                  <br />
                                  <p>&nbsp;</p>
                                </form>                                <? } ?></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td width="234">&nbsp;</td>
                              <td width="646">&nbsp;</td>
                              <td width="130">&nbsp;</td>
                            </tr>
                          </table>
                          <p>&nbsp;</p>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
            
            <!-- /.row -->
        </div>