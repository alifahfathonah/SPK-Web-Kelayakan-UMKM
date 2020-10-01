			<?php
			
				switch (@$_GET['page']){
					case "ganti":
						include('ganti.php');
						break;
					case "jenis":
						include('jenis.php');
						break;
					case "editjenis":
						include('editjenis.php');
						break;
					case "range":
						include('range.php');
						break;
					case "editrange":
						include('editrange.php');
						break;
					case "kriteria":
						include('kriteria.php');
						break;
					case "editkriteria":
						include('editkriteria.php');
						break;
					case "subkriteria":
						include('subkriteria.php');
						break;
					case "editsubkriteria":
						include('editsubkriteria.php');
						break;
					case "nilaisubkriteria":
						include('nilaisubkriteria.php');
						break;
					case "editnilaisubkriteria":
						include('editnilaisubkriteria.php');
						break;
					case "gap":
						include('gap.php');
						break;
					case "editgap":
						include('editgap.php');
						break;
					case "ukm":
						include('ukm.php');
						break;
					case "nilai1":
						include('nilai1.php');
						break;
					case "total":
						include('total.php');
						break;
					case "edittotal":
						include('edittotal.php');
						break;
					case "perhitungan":
						include('perhitungan.php');
						break;
					case "publish":
						include('publish.php');
						break;
					
					default:
					include('awaladmin.php');
				            }
				
			?>
