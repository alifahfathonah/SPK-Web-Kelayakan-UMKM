<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">REGISTRASI</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrasi UKM 
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
                              <td colspan="3" align="center"><form action="inputreg.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td><div align="left">Jenis Usaha</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <select name="a" id="a">  <?php
						   $a=mysql_query("select * from jenis"); 
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                        <option value="<?=$b[0]?>"><?=$b[1]?></option>
                                        <? } ?>
                                      </select>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Nama Pemilik UKM</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="b" type="text" id="a" value="" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Nama UKM</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="c" type="text" id="a3" value="" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td width="82"><div align="left">Alamat UKM</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <textarea name="d" rows="4" id="d"></textarea>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Telp/HP UKM</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="e" type="text" id="a4" value="" />
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