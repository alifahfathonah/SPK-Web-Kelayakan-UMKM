<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">GAP</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bobot Nilai GAP 
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
                              <td colspan="3" align="center"><form action="editgap1.php?id=<?=$_GET[id]?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                                <?php
			$a=mysql_fetch_array(mysql_query("select * from gap where idgap='$_GET[id]'"));
			?>
                                  <tr>
                                    <td><div align="left">Selisih Gap</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="a" type="text" id="a" value="<?=$a[1]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Bobot Nilai</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="b" type="text" id="a3" value="<?=$a[2]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td width="82"><div align="left">Keterangan</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <textarea name="c" rows="4" id="c"><?=$a[3]?></textarea>
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
                              <td colspan="3" align="center"><table width="90%" border="1" align="center">
                                <tr>
                                  <td width="35" height="30"><div align="center"><strong>No.</strong></div></td>
                                  <td width="108"><div align="left"><strong> Selisih GAP</strong></div></td>
                                  <td width="108"><div align="left"><strong>Bobot Nilai</strong></div></td>
                                  <td width="606"><div align="left"><strong> Keterangan </strong></div></td>
                                  <td width="153">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from gap order by idgap asc"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><?php echo"$no"; ?>.</td>
                                  <td><div align="left"><?php echo"$b[1]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[2]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[3]"; ?></div></td>
                                  <td><a href="admin.php?page=editgap&id=<?php echo"$b[0]"; ?>" >Edit</a> || 
                                  <a onclick="return confirm ('Anda yakin akan menghapus Data Ini ?')" href="hapusgap.php?id=<?php echo"$b[0]"; ?>" >Hapus</a></td>
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