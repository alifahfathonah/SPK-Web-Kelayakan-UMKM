<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">KRITERIA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kriteria SPK 
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
                              <td colspan="3" align="center"><form action="inputkriteria.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                               
                                  <tr>
                                    <td><div align="left">Kode</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="a" type="text" id="a" value="" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td width="82"><div align="left">Kriteria</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <textarea name="b" rows="4" id="b"></textarea>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>Bobot</td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="d" type="text" id="d" value="" />
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
                                      <input type="reset" name="Submit2" value="Batal" />
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
                              <td colspan="3" align="center"><table width="90%" border="1" align="center">
                                <tr>
                                  <td width="33" height="30"><div align="center"><strong>No.</strong></div></td>
                                  <td width="97"><div align="left"><strong> Kode </strong></div></td>
                                  <td width="490"><div align="left"><strong>Kriteria</strong></div></td>
                                  <td width="130"><div align="left"><strong>Bobot</strong></div></td>
                                  <td width="145">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from kriteria"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><?php echo"$no"; ?>.</td>
                                  <td><div align="left"><?php echo"$b[0]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[1]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[bobot]"; ?></div></td>
                                  <td><a href="admin.php?page=subkriteria&id=<?php echo"$b[0]"; ?>" >Subkriteria</a>  || 
                                  <a href="admin.php?page=editkriteria&id=<?php echo"$b[0]"; ?>" >Edit</a> || 
                                  <a onclick="return confirm ('Anda yakin akan menghapus Data Ini ?')" href="hapuskriteria.php?id=<?php echo"$b[0]"; ?>" >Hapus</a></td>
                                </tr>
                                <?php
					  $no++;
					  }
					  ?>
                              </table></td>
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