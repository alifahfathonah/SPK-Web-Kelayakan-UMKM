<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">GANTI LOGIN</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Ganti Login Administrator
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
                              <td colspan="3" align="center"><form action="prsganti.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <table width="50%" border="0" align="center" cellpadding="0" cellspacing="0">
                                  <?php
			$b=mysql_fetch_array(mysql_query("select * from login where idlogin='$_SESSION[admin]'"));
			?>
                                  <tr>
                                    <td width="82"><div align="left">Username </div></td>
                                    <td width="16">:</td>
                                    <td width="418"><div align="left">
                                      <input name="a" type="text" id="a" value="<?=$b[username]?>" />
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
                                      <input name="ok" type="checkbox" id="ok" value="ok" />
                                      <input name="b" type="password" id="b" />
                                    </div></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td colspan="3"><div align="center">
                                      <input type="submit" name="Submit" value="  Ganti  " />
                                      <input type="reset" name="Submit2" value="Batal" />
                                    </div></td>
                                  </tr>
                                </table>
                              </form></td>
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