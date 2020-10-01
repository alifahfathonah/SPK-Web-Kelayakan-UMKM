<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">UKM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Data UKM 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="234">&nbsp;</td>
                              <td width="646">&nbsp;</td>
                              <td width="130">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><form action="gantiz1.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
                                       <select name="a" id="a"> <option value="<?=$c[0]?>">
                                           <?=$c[1]?>
                                         </option>
                                         <?php
						   $a1=mysql_query("select * from jenis"); 
					  while($b1=mysql_fetch_array($a1))
					  {
					  ?>
                                         <option value="<?=$b1[0]?>">
                                           <?=$b1[1]?>
                                         </option>
                                         <? } ?>
                                       </select>
                                     </div></td>
                                  </tr>
                                   <tr>
                                     <td><div align="left">Nama Pemilik UKM</div></td>
                                     <td>:</td>
                                     <td><div align="left">
                                       <input name="b" type="text" id="a" value="<?=$b[3]?>" />
                                     </div></td>
                                   </tr>
                                  <tr>
                                    <td width="82"><div align="left">Nama UKM</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <input name="c" type="text" id="a3" value="<?=$b[4]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Alamat UKM</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <textarea name="d" rows="4" id="d"><?=$b[5]?></textarea>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Telp/HP UKM</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="e" type="text" id="a4" value="<?=$b[6]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Username </div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="username" type="text" id="username" value="<?=$a[username]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Password</div></td>
                                    <td> : </td>
                                    <td><div align="left">
                                      <input name="password" type="text" id="password" value="<?=$a[2]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><div align="center">
                                      <input type="submit" name="Submit" value="Simpan" />
                                      <input type="button" name="Submit22" value="Kembali" onclick="self.history.back()"/>
                                    </div></td>
                                  </tr>
                                </table>
                              </form></td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
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