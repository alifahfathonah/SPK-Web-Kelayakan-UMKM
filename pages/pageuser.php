			<?php
			
				switch (@$_GET['page']){
					case "gantiz":
						include('gantiz.php');
						break;
					case "penilaian":
						include('penilaian.php');
						break;
					case "keputusan":
						include('keputusan.php');
						break;
					case "hasilz":
						include('hasilz.php');
						break;
					
					default:
					include('awaluser.php');
				            }
				
			?>
