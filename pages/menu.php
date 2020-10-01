                    <ul class="nav" id="side-menu">
<?php
  if (isset($_SESSION['admin']))
  {
   ?>
                        <li>
                            <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="admin.php?page=ganti"><i class="fa fa-dashboard fa-fw"></i> Ganti Login</a>
                        </li>
                        <li>
                            <a href="admin.php?page=jenis"><i class="fa fa-dashboard fa-fw"></i> Jenis Usaha</a>
                        </li>
                        <li>
                            <a href="admin.php?page=kriteria"><i class="fa fa-dashboard fa-fw"></i> Kriteria</a>
                        </li>
                        <li>
                            <a href="admin.php?page=gap"><i class="fa fa-dashboard fa-fw"></i> GAP</a>
                        </li>
                        <li>
                            <a href="admin.php?page=total"><i class="fa fa-dashboard fa-fw"></i> Nilai Total</a>
                        </li>
                        <li>
                            <a href="admin.php?page=range"><i class="fa fa-dashboard fa-fw"></i> Range Kelayakan</a>
                        </li>
                        <li>
                            <a href="admin.php?page=ukm"><i class="fa fa-dashboard fa-fw"></i> UKM </a>
                        </li>
                        <li>
                            <a href="admin.php?page=perhitungan"><i class="fa fa-dashboard fa-fw"></i> Perhitungan</a>
                        </li>
                        <li>
                            <a href="admin.php?page=publish"><i class="fa fa-dashboard fa-fw"></i> Publish </a>
                        </li>
                        <li>
                            <a href="logout.php"><i class="fa fa-dashboard fa-fw"></i> Log Out</a>
                        </li>
<? } 
 elseif (isset($_SESSION['user']))
  { ?>
                        <li>
                            <a href="user.php"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="user.php?page=gantiz"><i class="fa fa-dashboard fa-fw"></i> Edit Data</a>
                        </li>
                        <li>
                            <a href="user.php?page=penilaian"><i class="fa fa-dashboard fa-fw"></i> Penilaian</a>
                        </li>
                        <li>
                            <a href="user.php?page=keputusan"><i class="fa fa-dashboard fa-fw"></i> Keputusan</a>
                        </li>
                        <li>
                            <a href="user.php?page=hasilz"><i class="fa fa-dashboard fa-fw"></i> Hasil</a>
                        </li>
                        <li>
                            <a href="logout.php?page=kriteriaz"><i class="fa fa-dashboard fa-fw"></i> LogOut</a>
                        </li>




<?
  }
else { ?>                        
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="index.php?page=reg"><i class="fa fa-dashboard fa-fw"></i> Registrasi</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="fa fa-dashboard fa-fw"></i> Login</a>
                        </li>
<? } ?>                        
                        
                    </ul>
           