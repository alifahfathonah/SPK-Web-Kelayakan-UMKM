<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HASIL</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hasil  UKM</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="321"><div align="center"><strong>Nama UKM</strong></div></td>
                                  <td width="321"><div align="center"><strong>Pemilik  </strong></div></td>
                                  <td width="321"><div align="center"><strong>Jenis UKM </strong></div></td>
                                  <td width="321"><div align="center"><strong>Alamat </strong></div></td>
                                  <td width="321"><div align="center"><strong>Telp/HP </strong></div></td>
                                  <td width="302" align="center"><strong>Nilai</strong></td>
                                </tr>
                                <?					
		  $a=mysql_query("select * from ukm where idlogin='$_SESSION[user]'");
		  $b=mysql_fetch_array($a);
			$c=mysql_fetch_array(mysql_query("select * from jenis where idjenis='$b[idjenis]'"));
			$d=mysql_fetch_array(mysql_query("select * from hasil where idukm='$b[idukm]'"));
		  ?>
                                <tr>
                                  <td><?=$b[nama]?></td>
                                  <td><?=$b[pemilik]?></td>
                                  <td><?=$c[1]?></td>
                                  <td><?=$b[alamat]?></td>
                                  <td><?=$b[tlp]?></td>
                                  <td width="302" align="center"><strong>
                                    <?=$d[hasil]?>
                                  </strong></td>
                                </tr>
                              </table>
                              <p><br />
                                <? 
		  $z=mysql_fetch_array(mysql_query("select * from range"));	
		  if($d[hasil]>=$z[range])
		  { echo"Anda Layak Menjadi UKM"; }
		  else { echo"Anda Tidak Layak Menjadi UKM"; }
		  ?>

                             
                              </p></td>
                            </tr>
                            <tr>
                              <td width="234">&nbsp;</td>
                              <td width="646">&nbsp;</td>
                              <td width="130">&nbsp;</td>
                            </tr>
                          </table>
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