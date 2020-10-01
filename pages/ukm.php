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
                            Daftar UKM 
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
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="90%" border="1" align="center">
                                <tr>
                                  <td width="36" height="30"><div align="center"><strong>No.</strong></div></td>
                                  <td width="99"><div align="left"><strong>Nama UKM</strong></div></td>
                                  <td width="182"><div align="left"><strong> Alamat </strong> <strong>UKM</strong></div></td>
                                  <td width="224"><div align="left"><strong> Telepon/HP </strong> <strong>UKM</strong></div></td>
                                  <td width="75">&nbsp;</td>
                                </tr>
                                <?php
						   $a=mysql_query("select * from ukm order by idukm asc"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td height="30"><?php echo"$no"; ?>.</td>
                                  <td><div align="left"><?php echo"$b[2]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[3]"; ?></div></td>
                                  <td><div align="left"><?php echo"$b[4]"; ?></div></td>
                                  <td><a href="admin.php?page=nilai1&amp;id=<?php echo"$b[0]"; ?>" >Nilai UKM</a> || 
                                  <a onclick="return confirm ('Anda yakin akan menghapus Data Ini ?')" href="hapusukm.php?id=<?php echo"$b[0]"; ?>" >Hapus</a></td>
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