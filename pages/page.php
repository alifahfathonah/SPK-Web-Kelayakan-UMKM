			<?php
			
				switch (@$_GET['page']){
					case "reg":
						include('reg.php');
						break;
					case "hasil":
						include('hasil.php');
						break;
					case "hasil1":
						include('hasil1.php');
						break;
					
					default:
					include('awal.php');
				            }
				
			?>
