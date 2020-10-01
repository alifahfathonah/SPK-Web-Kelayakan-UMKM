<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">KEPUTUSAN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Keputusan Hasil Seleksi UKM</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">
                              <?php
						   $a1=mysql_query("select * from publish"); 
					  $b1=mysql_fetch_array($a1);
					  if($b1[publish]=="2")
								  {
					  ?>
                              <strong>Yang Layak Menjadi UKM</strong><br />
                              <br />
                              <table width="100%" border="1" align="center">
                                <tr>
                                  <td width="321"><div align="center"><strong>Nama UKM</strong></div></td>
                                  <td width="321"><div align="center"><strong>Pemilik</strong></div></td>
                                  <td width="321"><div align="center"><strong>Jenis UKM</strong></div></td>
                                  <td width="321"><div align="center"><strong>Alamat </strong></div></td>
                                  <td width="321"><div align="center"><strong>Telp/HP </strong></div></td>
                                  <td width="302" align="center"><strong>Nilai</strong></td>
                                </tr>
                                <?
		$z=mysql_fetch_array(mysql_query("select * from range"));						
		  $a=mysql_query("select * from hasil where hasil>='$z[0]' order by hasil desc");
		  while($b=mysql_fetch_array($a))
		  {
		  $z1=mysql_fetch_array(mysql_query("select * from ukm where idukm='$b[idukm]' "));	
			$c=mysql_fetch_array(mysql_query("select * from jenis where idjenis='$z1[idjenis]'"));
		  ?>
                                <tr>
                                  <td><?=$z1[nama]?></td>
                                  <td><?=$c[1]?></td>
                                  <td><?=$z1[pemilik]?></td>
                                  <td><?=$z1[alamat]?></td>
                                  <td><?=$z1[tlp]?></td>
                                  <td width="302" align="center"><strong>
                                    <?=$b[hasil]?>
                                  </strong></td>
                                </tr>
                                <?
			$no++;
			}
			?>
                              </table><br />
                             <? 
		  $z=mysql_fetch_array(mysql_query("select * from hasil order by hasil desc "));	
		  $z1=mysql_fetch_array(mysql_query("select * from ukm where idukm='$z[idukm]' "));	
		  ?>Berdasarkan nilai akhir diatas, nilai terbesar adalah <?=$z1[nama]?></strong>, 
                              maka  <strong> <?=$z1[nama]?></strong> 
                              menjadi prioritas UKM 
                          <? } else { echo"<p align=center><strong>Hasil Seleksi Belum Selesai...!!!</strong>"; } ?>
                          <p>&nbsp;</p>
                              <p>&nbsp;</p>
                              <p>&nbsp;</p></td>
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