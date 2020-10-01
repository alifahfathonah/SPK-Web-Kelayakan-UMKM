<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">JENIS</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jenis Usaha 
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
                              <td colspan="3" align="center"><form action="inputjenis.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                               
                                  <tr>
                                    <td width="82"><div align="left">Jenis Usaha</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <textarea name="a" rows="3" id="a"></textarea>
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
                              <td colspan="3" align="center"><table width="56%" border="1" align="center">
                                <tr>
                                  <td width="71" height="30"><div align="center"><strong>No.</strong></div></td>
                                  <td width="351"><div align="left"><strong> Jenis Usaha</strong></div></td>
                                  <td width="143">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from jenis"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><?php echo"$no"; ?>.</td>
                                  <td><div align="left"><?php echo"$b[1]"; ?></div></td>
                                  <td>
                                  <a href="admin.php?page=editjenis&id=<?php echo"$b[0]"; ?>" >Edit</a> || 
                                  <a onclick="return confirm ('Anda yakin akan menghapus Data Ini ?')" href="hapusjenis.php?id=<?php echo"$b[0]"; ?>" >Hapus</a></td>
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