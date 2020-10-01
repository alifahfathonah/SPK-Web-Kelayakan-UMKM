<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SUBKRITERIA</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SubKriteria <?php
			$a=mysql_fetch_array(mysql_query("select * from kriteria where idkriteria='$_GET[id]'"));
			echo"$a[1]";
			?> 
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
                              <td colspan="3" align="center"><form action="editsubkriteria1.php?id=<?=$_GET[id]?>&id1=<?=$_GET[id1]?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td><div align="left">Kode</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <?=$a[0]?>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Kriteria</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                     <?=$a[1]?>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>Bobot</td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <?=$a[2]?>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>                                  <?php
			$a=mysql_fetch_array(mysql_query("select * from subkriteria where idsubkriteria='$_GET[id1]'"));
			?>

                                  <tr>
                                    <td><div align="left">Kode</div></td>
                                    <td>:</td>
                                    <td><div align="left"><?=$a[0]?></div></td>
                                  </tr>
                                  <tr>
                                    <td width="82"><div align="left">SubKriteria</div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <textarea name="b" rows="4" id="b"><?=$a[2]?></textarea>
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">Profil</div></td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <input name="c" type="text" id="c" value="<?=$a[3]?>" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><div align="left">
                                      <select name="d" id="d">
                                        <option>
                                          <?=$a[4]?>
                                        </option>
                                        <option>Core Factor</option>
                                        <option>Secondary Factor</option>
                                      </select>
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
                                  <td width="108"><div align="left"><strong>Kode </strong></div></td>
                                  <td width="606"><div align="left"><strong> Subkriteria </strong></div></td>
                                  <td width="153">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from subkriteria where idkriteria='$_GET[id]'"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><?php echo"$no"; ?>.</td>
                                  <td><div align="left"><?php echo"$b[0]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[2]"; ?></div></td>
                                  <td><a href="admin.php?page=editsubkriteria&id1=<?php echo"$b[0]"; ?>&id=<?=$_GET[id]?>" >Edit</a> || 
                                  <a onclick="return confirm ('Anda yakin akan menghapus Data Ini ?')" href="hapussubkriteria.php?id1=<?php echo"$b[0]"; ?>&id=<?=$_GET[id]?>" >Hapus</a></td>
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
                              <td colspan="3" align="center"><a href="admin.php?page=kriteria">Kembali</a></td>
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