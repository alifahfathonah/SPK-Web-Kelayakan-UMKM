<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PEHITUNGAN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Perhitungan Penentuan Kelayakan UKM Dengan Metode Profile Matching
                      </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="19"><div align="center"><strong>NIK</strong></div></td>
                                  <td width="154"><div align="center"><strong>Nama </strong></div></td>
                                  <?
		  $k=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($k))
		  {
		  ?>
                                  <td width="82" align="center"><strong>
                                  <?=$kk[2]?>
                                  </strong></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$y="";
		  $a=mysql_query("select * from ukm order by idukm asc");
		  $no=1;
		  while($b=mysql_fetch_array($a))
		  {
		  ?>
                                <tr>
                                  <td><strong>
                                    <?=$b[0]?>
                                  </strong></td>
                                  <td><?=$b[nama]?></td>
                                  <?
		  $k=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($k))
		  {
		   $kkk=mysql_fetch_array(mysql_query("select * from nilai where idukm='$b[0]' and idsubkriteria='$kk[0]'"));
		  ?>
                                  <td align="center"><?=$kkk[nilai]?></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$no++;
			}
			?>
                                <tr>
                                  <td colspan="2" align="center"><strong>Profil</strong></td>
                                  <?
		  $k=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($k))
		  {
			  
		  ?>
                                  <td align="center"><strong>
                                    <?=$kk[profil]?>
                                  </strong></td>
                                  <?
		  }
		  ?>
                                </tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Nilai GAP </strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="19"><div align="center"><strong>NIK</strong></div></td>
                                  <td width="154"><div align="center"><strong>Nama </strong></div></td>
                                  <?
		  $k=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($k))
		  {
		  ?>
                                  <td width="82" align="center"><strong>
                                    <?=$kk[2]?>
                                  </strong></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$y="";
		  $a=mysql_query("select * from ukm order by idukm asc");
		  $no=1;
		  while($b=mysql_fetch_array($a))
		  {
		  ?>
                                <tr>
                                  <td><strong>
                                    <?=$b[0]?>
                                  </strong></td>
                                  <td><?=$b[nama]?></td>
                                  <?
		  $kw=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($kw))
		  {
		   $k=mysql_fetch_array(mysql_query("select * from nilai where idukm='$b[0]' and idsubkriteria='$kk[0]'"));
		   
		   $z1=$kk[profil]-$k[nilai];
		   //if($z1<0) { $z1=$z1*(-1); } else { $z1=$z1; }
		  ?>
                                  <td align="center"><?=$z1?></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$no++;
			}
			?>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Nilai Bobot GAP</strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="19"><div align="center"><strong>NIK</strong></div></td>
                                  <td width="154"><div align="center"><strong>Nama </strong></div></td>
                                  <?
		  $k=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($k))
		  {
		  ?>
                                  <td width="82" align="center"><strong>
                                    <?=$kk[2]?>
                                  </strong></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$y="";
		  $a=mysql_query("select * from ukm order by idukm asc");
		  $no=1;
		  while($b=mysql_fetch_array($a))
		  {
		  ?>
                                <tr>
                                  <td><strong>
                                    <?=$b[0]?>
                                  </strong></td>
                                  <td><?=$b[nama]?></td>
                                  <?
		  $kw=mysql_query("select * from subkriteria");
		  while($kk=mysql_fetch_array($kw))
		  {
		   $k=mysql_fetch_array(mysql_query("select * from nilai where idukm='$b[0]' and idsubkriteria='$kk[0]'"));
		   
		   $z1=$kk[profil]-$k[nilai];
		   if($z1<0) { $z1=$z1*(-1); } else { $z1=$z1; }
		   $z2=mysql_fetch_array(mysql_query("select * from gap where gap='$z1'"));
		   $z3=mysql_num_rows(mysql_query("select * from bobot where idukm='$b[0]' and idsubkriteria='$kk[0]'"));
		   if($z3==0)
		   {
			   mysql_query("insert into bobot values ('$b[0]','$kk[idkriteria]','$kk[0]','$z2[nilai]','$kk[status]')");
		   }
		   else
		   {
			   mysql_query("update bobot set bobot='$z2[nilai]','status='$kk[status]' where idukm='$b[0]' and idsubkriteria='$kk[0]'");
		   }
		   
		   
		   
		   
		   
		   
		  ?>
                                  <td align="center"><?=$z2[nilai]?></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
			$no++;
			}
			?>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Nilai CF dan SF</strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">
                              <?
							  $q=mysql_query("select * from kriteria order by idkriteria asc");
							  while($q1=mysql_fetch_array($q))
							  {
								  $q2=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' "));
                              ?>
                              
                              <table width="100%" border="1" align="center">
                                <tr>
                                  <td width="19" rowspan="2"><div align="center"><strong>NIK</strong></div></td>
                                  <td width="154" rowspan="2"><div align="center"><strong>Nama </strong></div></td>
                                  <td align="center" colspan="<?=$q2?>"><strong>(<?=$q1[0]?>) <?=$q1[1]?></strong></td>
                                  <td width="154" rowspan="2"><div align="center"><strong>CF </strong></div></td>
                                  <td width="154" rowspan="2"><div align="center"><strong>SF </strong></div></td>
                                </tr>
                                <tr>
                                  <?
		  $k=mysql_query("select * from subkriteria where idkriteria='$q1[0]'");
		  while($kk=mysql_fetch_array($k))
		  {
		  ?>
                                  <td width="82" align="center"><strong>
                                    <?=$kk[2]?>
                                  </strong></td>
                                  <?
		  }
		  ?>
                                </tr>
                                <?
		  $a=mysql_query("select * from ukm order by idukm asc");
		  $no=1;
		  while($b=mysql_fetch_array($a))
		  {
		  ?>
                                <tr>
                                  <td><strong>
                                    <?=$b[0]?>
                                  </strong></td>
                                  <td><?=$b[nama]?></td>
                                  <?
		  $kw=mysql_query("select * from subkriteria where idkriteria='$q1[0]'");
		  while($kk=mysql_fetch_array($kw))
		  {
			  $k=mysql_fetch_array(mysql_query("select * from bobot where idukm='$b[0]' and idsubkriteria='$kk[0]'"));
		  ?>
                                  <td align="center"><?=$k[bobot]?></td>
                                  <?
		  }
			  $t=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' and status='Core Factor'"));
			  $t1=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' and status='Secondary Factor'"));
			  $p=mysql_fetch_array(mysql_query("select sum(bobot) as 'jml' from bobot where idukm='$b[0]' and idkriteria='$q1[0]' and status='Core Factor'"));
			  $p1=mysql_fetch_array(mysql_query("select sum(bobot) as 'jml' from bobot where idukm='$b[0]' and idkriteria='$q1[0]' and status='Secondary Factor'"));
			  $cf=$p[jml]/$t;
			  $sf=$p1[jml]/$t;


		  ?>
                                  <td width="154"><div align="center"><strong><?=$cf?> </strong></div></td>
                                  <td width="154"><div align="center"><strong><?=$sf?> </strong></div></td>
                                </tr>
                                <?
			$no++;
			}
			?>
                              </table>
                              
                              
                              
                              <br />
                              <? } ?>
                              
                              </td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Perhitungan Nilai Total</strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><?
							  $w=mysql_fetch_array(mysql_query("select * from total "));
							  $q=mysql_query("select * from kriteria order by idkriteria asc");
							  while($q1=mysql_fetch_array($q))
							  {
								  $q2=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' "));
                              ?>
                                <table width="100%" border="1" align="center">
                                  <tr>
                                    <td width="19"><div align="center"><strong>NIK</strong></div></td>
                                    <td width="154"><div align="center"><strong>Nama </strong></div></td>
                                    <td width="154"><div align="center"><strong>CF (<?=$w[0]?>%)</strong></div></td>
                                    <td width="154"><div align="center"><strong>SF (<?=$w[1]?>%)</strong></div></td>
                                    <td width="154"><div align="center"><strong>N (<?=$q1[1]?>) </strong></div></td>
                                  </tr>
                                  <?
		  $a=mysql_query("select * from ukm order by idukm asc");
		  $no=1;
		  while($b=mysql_fetch_array($a))
		  {
		  ?>
                                  <tr>
                                    <td><strong>
                                      <?=$b[0]?>
                                    </strong></td>
                                    <td><?=$b[nama]?></td>
                                    <?

			  $t=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' and status='Core Factor'"));
			  $t1=mysql_num_rows(mysql_query("select * from subkriteria where idkriteria='$q1[0]' and status='Secondary Factor'"));
			  $p=mysql_fetch_array(mysql_query("select sum(bobot) as 'jml' from bobot where idukm='$b[0]' and idkriteria='$q1[0]' and status='Core Factor'"));
			  $p1=mysql_fetch_array(mysql_query("select sum(bobot) as 'jml' from bobot where idukm='$b[0]' and idkriteria='$q1[0]' and status='Secondary Factor'"));
			  $cf=$p[jml]/$t;
			  $sf=$p1[jml]/$t;
			  $n=($cf*($w[0]/100))+($w[1]*($sf/100));
			  
		   $z3=mysql_num_rows(mysql_query("select * from akhir where idukm='$b[0]' and idkriteria='$q1[0]'"));
		   if($z3==0)
		   {
			   mysql_query("insert into akhir values ('$b[0]','$q1[0]','$n','')");
		   }
		   else
		   {
			   mysql_query("update akhir set akhir='$n' where idukm='$b[0]' and idkriteria='$q1[0]'");
		   }
			  
			  
			  
		  ?>
                                    <td width="154"><div align="center"><strong>
                                      <?=$cf?>
                                    </strong></div></td>
                                    <td width="154"><div align="center"><strong>
                                      <?=$sf?>
                                    </strong></div></td>
                                    <td width="154"><div align="center"><strong>
                                      <?=$n?>
                                    </strong></div></td>
                                  </tr>
                                  <?
			$no++;
			}
			?>
                                </table>
                                <br />
                              <? } ?></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Penentuan Ranking</strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="154"><div align="center"><strong>Nama </strong></div></td>
                                  <?
		  $k=mysql_query("select * from kriteria");
		  while($kk=mysql_fetch_array($k))
		  {
		  ?>
                                  <td width="82" align="center"><strong>
                                    N (<?=$kk[1]?>)
                                  </strong></td>
                                  <?
		  }
		  ?>
                                  <td width="82" align="center"><strong>N</strong></td>
                                </tr>
                                <?
			$y="";
		  $a=mysql_query("select * from ukm order by idukm asc");
		  while($b=mysql_fetch_array($a))
		  {
			  
			  
		  ?>
                                <tr>
                                  <td><?=$b[nama]?></td>
                                  <?
		  $kw=mysql_query("select * from kriteria");
		  while($kk=mysql_fetch_array($kw))
		  {
			  $t=mysql_fetch_array(mysql_query("select * from akhir where idukm='$b[idukm]' and idkriteria='$kk[0]'"));		  
			  $n=$t[akhir]*($kk[bobot]/100);
			  mysql_query("update akhir set persen='$n' where idukm='$b[idukm]' and idkriteria='$kk[0]'");
			  ?>
                                  <td align="center"><?=$n?></td>
                                  <?
		  }
		  $t1=mysql_fetch_array(mysql_query("select sum(persen) as 'hasil' from akhir where idukm='$b[idukm]' "));		  
		   $z3=mysql_num_rows(mysql_query("select * from hasil where idukm='$b[0]' "));
		   if($z3==0)
		   {
			   mysql_query("insert into hasil values ('$b[0]','$t1[hasil]')");
		   }
		   else
		   {
			   mysql_query("update hasil set hasil='$t1[hasil]' where idukm='$b[0]'");
		   }

		  ?>
                                  <td width="82" align="center"><strong><?=$t1[hasil]?></strong></td>
                                </tr>
                                <?
			$no++;
			}
			
		  $z=mysql_fetch_array(mysql_query("select * from hasil order by hasil desc "));	
		  $z1=mysql_fetch_array(mysql_query("select * from ukm where idukm='$z[idukm]' "));	
			?>
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><strong>Yang Layak Menjadi UKM</strong></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="100%" border="1" align="center">
                                <tr>
                                  <td width="321"><div align="center"><strong>Nama </strong></div></td>
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
		  ?>
                                <tr>
                                  <td><?=$z1[nama]?></td>
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
                              </table></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><? 
		  $z=mysql_fetch_array(mysql_query("select * from hasil order by hasil desc "));	
		  $z1=mysql_fetch_array(mysql_query("select * from ukm where idukm='$z[idukm]' "));	
		  ?>Berdasarkan nilai akhir diatas, nilai terbesar adalah <?=$z1[nama]?></strong>, 
                              maka  <strong> <?=$z1[nama]?></strong> 
                              menjadi prioritas UKM </td>
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