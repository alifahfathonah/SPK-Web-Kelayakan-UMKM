<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Beranda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Beranda UKM
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
                              <td colspan="3" align="center"><strong><font size="+3">SELAMAT DATANG  UKM 
                               <?php
			$a=mysql_fetch_array(mysql_query("select * from login where idlogin='$_SESSION[user]'"));
			$b=mysql_fetch_array(mysql_query("select * from ukm where idlogin='$a[idlogin]'"));
			echo"$b[nama]";
			?>
                              
                              
                               DI SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KELAYAKAN USAHA MIKRO KECIL MENENGAH DENGAN MENGGUNAKAN METODE PROFILE MATCHING PADA UPTD PLUT KOPERASI DAN UMKM PROVINSI LAMPUNG</font></strong></td>
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