<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PUBLISH</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Publish Kelayakan UKM
                      </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                          <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td colspan="3" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                              <td colspan="3" align="center"><table width="50%" border="0" align="center">
                                <?php
						   $a=mysql_query("select * from publish"); 
					  $no=1;
					  while($b=mysql_fetch_array($a))
					  {
					  ?>
                                <tr>
                                  <td width="99" height="30" align="center">
                                  <? if($b[0]=="1")
								  { ?>
                                  <a href="publish1.php" ><strong>Belum Dipublish</strong></a>
                                  <? } else {  ?>
                                  <a href="publish2.php" ><strong>Sudah Dipublish</strong></a>
                                  <? } ?>
                                  
                                  </td>
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
                              <td width="234">&nbsp;</td>
                              <td width="646">* Klik Untuk Mengubah</td>
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