<div style="width:20cm; height:16cm; float:left;">

<?php

// koneksi to database
// include "../scriptarea/connection.php";


// get medical Record
// $kdmr = $_GET['mr'];
// $qmr = mysql_query("SELECT *  FROM `tb_mr` WHERE `kd_mr`='$kdmr'");
// while ($mr=mysql_fetch_array($qmr)) {
// 	$keluhan = $mr['keluhan'];
// 	$tgl = $mr['tgl_report'];
// 	$anamnesis = $mr['anamnesis'];
// 	$blood = $mr['blood'];
// 	$pulse = $mr['pulse'];
// 	$respiration = $mr['respiration'];
// 	$temp = $mr['temperature'];
// 	$oxygen = $mr['oxygen'];
// 	$roomair = $mr['room_air'];
// 	$oxysupp = $mr['oxygen_supply'];
// 	$consc = $mr['consciousness'];
// 	$sent = $mr['sent'];
// 	$thorax = $mr['thorax'];
// 	$abdomen = $mr['abdomen'];
// 	$extremities = $mr['extremities'];
// 	$other = $mr['other'];
// 	$diagnosis = $mr['diagnosis'];
// 	$physical_examination = $mr['physical_examination'];
// 	$rec = $mr['rec'];
// 	$blood = $mr['blood'];
// 	$blood = $mr['blood'];
	
	// type Service
	// if ($mr['kd_type_service']==1){ $service="On Call";} 
	// else if ($mr['kd_type_service']==2){$service="Clinic Visit";}	
	// else if ($mr['kd_type_service']==3){$service="Review on Call";} 
	// else if ($mr['kd_type_service']==4){$service="Review Clinic Visit";} 
	// else {$service="-";}
	
	// Detai pasien
	// $kdpas = $mr['kd_pasien'];
	// $qpas = mysql_query("SELECT * FROM tb_pasien WHERE kd_pasien = '$kdpas'");
	// while($pasien=mysql_fetch_array($qpas)){
	// 	$nmpasien = $kdpas." ".$pasien['first_name']." ".$pasien['family_name'];
	// 	if ($pasien['sex']==1){$jk="Male";} else if ($pasien['sex']==2){$jk="Female";} else {$jk="Not Set";}
	// 	$negara = $pasien['nationality'];
	// 	$alamat = $pasien['alamat'];
	// 	$phone = $pasien['phone'];
	// 	$alergies = $pasien['alergies'];
	// 	$tgl_lahir = $pasien['tanggal_lahir'];
		
	// }
	
	// Detail Dokter
	// $kddr = $mr['kd_dokter'];
	// $qdr = mysql_query("
	// 		SELECT tb_pasien.first_name,tb_pasien.family_name
	// 		FROM tb_pasien, tb_karyawan
	// 		WHERE tb_karyawan.kd_pasien = tb_pasien.kd_pasien
	// 		AND tb_karyawan.kd_karyawan = '$kddr'");
	// while ($dokter=mysql_fetch_array($qdr)){
	// 	$nmdokter = $kddr." ".$dokter['0']." ".$dokter['1'];
	// 	$dokteraja = $dokter['0']." ".$dokter['1'];
	// }
	
	// Detail Perawat
// 	$kdnr = $mr['kd_perawat'];
// 	$qnr = mysql_query("
// 			SELECT tb_pasien.first_name,tb_pasien.family_name
// 			FROM tb_pasien, tb_karyawan
// 			WHERE tb_karyawan.kd_pasien = tb_pasien.kd_pasien
// 			AND tb_karyawan.kd_karyawan = '$kdnr'");
// 	while ($nurse=mysql_fetch_array($qnr)){
// 		$nmnurse = $kdnr." ".$nurse['0']." ".$nurse['1'];
// 	}
	
// }

?>

	<div style="width:50%; float:left;">
		<img src="../img/logo.png" width="50%" />
	</div>
	<div style="width:50%; float:left; text-align: right;">
		<h3>CONFIDENTIAL MEDICAL REPORT</h3>
	</div>
	
	<div style="width:100%; float:left; border: #000 1px solid; padding:5px;">
		<b>Medical Report Code</b>
	</div>
	<div style="width:30%; float:left; margin:10px;">
		Medical Report Number<br>
		Register Date<br>
		Doctor Code<br>
		Nurse Code<br>
	</div>
	<div style="width:60%; float:left; margin:10px;">
		<?php echo $kdmr; ?><br>
		<?php echo date("d F Y",strtotime($tgl)); ?><br>
		<?php echo $nmdokter; ?><br>
		<?php echo $nmnurse; ?><br>
	</div>
	
	<div style="width:100%; float:left; border: #000 1px solid; padding:5px;">
		<b>Patient Identity</b>
	</div>
	<div style="width:30%; float:left; margin:10px;">
		Patient Code<br>
		Date of Birth<br>
		Age<br>
		Sex<br>
		Nationality<br>
		Address In Bali<br>
		Phone In Bali<br>
	</div>
	<div style="width:60%; float:left; margin:10px;">
		<?php echo $nmpasien; ?><br>
		<?php 
		
			
			
			// Tanggal Lahir
			$birthday = $tgl_lahir;
	
			// Convert Ke Date Time
			$biday = new DateTime($birthday);
			$today = new DateTime();
			$diff = $today->diff($biday);
	
			// Display
			echo date('d M Y', strtotime($birthday)) .'<br />';
			echo $diff->y ." years";
			
		?><br>
		<?php echo $jk; ?><br>
		<?php echo $negara; ?><br>
		<?php echo $alamat; ?><br>
		<?php echo $phone; ?><br>
	</div>
	
	<div style="width:100%; float:left; border: #000 1px solid; padding:5px;">
		<b>Medical Information</b>
	</div>
	
	<div style="width:30%; float:left; margin:10px 10px 0px 10px; ">Type of Service</div>
	<div style="width:60%; float:left; margin:10px 10px 0px 10px;"><?php echo $service; ?></div>
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Anamnesis:</div>
	<div style="width:90%; float:left; margin:0px 30px;"><?php echo $anamnesis; ?></div>
	
	<div style="width:30%; float:left; margin:10px 10px 0px 10px;">Alergies</div>
	<div style="width:60%; float:left; margin:10px 10px 0px 10px;"><?php echo $alergies; ?></div>
	
	<div style="width:100%; float:left; padding:10px;"><b>Phisical Examination</b></div>
	
	<div style="width:10%; float:left; margin:0px 10px;">Vital Sign:</div>
	<div style="width:80%; float:left; margin:0px 10px;">
	
		<div style="width:25%; float:left;">
			Blood Pressure:<br><?php echo $blood; ?> mmHg<br>
			Respiration Rate:<br><?php echo $respiration; ?> x/min.
		</div>
		<div style="width:25%; float:left;">
			Body Temperature:<br><?php echo $temp; ?>&nbsp&nbsp&nbsp&degC<br>
			Consciousness:<br><?php echo $consc; ?>
		</div>
		<div style="width:25%; float:left;">
			Pulse Rate:<br><?php echo $pulse; ?> x/min.<br>
			In Oxygen Supply:<br><?php echo $oxysupp; ?> ltr/min.
		</div>
		<div style="width:25%; float:left;">
			Oxygen Saturation:<br><?php echo $oxygen; ?> %<br>
			In Room Air:<br><?php echo $roomair; ?>
		</div>
	
	</div>
	
	<div style="width:30%; float:left; margin:10px 10px 0px 10px;">Skull, Ear, Nose and Troat</div>
	<div style="width:60%; float:left; margin:10px 10px 0px 10px;"><?php echo $sent; ?></div>
	
	<div style="width:30%; float:left; margin:0px 10px;">Thorax</div>
	<div style="width:60%; float:left; margin:0px 10px;"><?php echo $thorax; ?></div>
	
	<div style="width:30%; float:left; margin:0px 10px;">Abdomen</div>
	<div style="width:60%; float:left; margin:0px 10px;"><?php echo $abdomen; ?></div>
	
	<div style="width:30%; float:left; margin:0px 10px;">Extremities</div>
	<div style="width:60%; float:left; margin:0px 10px;"><?php echo $extremities; ?></div>
	
	<div style="width:30%; float:left; margin:0px 10px;">Other</div>
	<div style="width:60%; float:left; margin:0px 10px;"><?php echo $other; ?></div>
	
	
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Procedure Lab:</div>
	<div style="width:100%; float:left; margin:0px 50px;">
	
	<?php  
		
		$qprspe=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
		WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
		AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type = 2");
		$noe=1;
		while ($spe=mysql_fetch_array($qprspe)){
			
			echo $noe++.") ".$spe['0']."<br>";
			
		}
	
	?>
	
	</div>
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Procedure Non Lab:</div>
	<div style="width:100%; float:left; margin:0px 50px;">
	
	<?php  
		
		$qprspe1=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
		WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
		AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type = 3");
		$noe1=1;
		while ($spe1=mysql_fetch_array($qprspe1)){
			
			echo $noe1++.") ".$spe1['0']."<br>";
			
		}
	
	?>
	
	</div>
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Diagnosis</div>
	<div style="width:90%; float:left; margin:0px 30px;"><?php echo $diagnosis; ?></div>
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Special Procedure:</div>
	<div style="width:100%; float:left; margin:0px 50px;">
	
	<?php  
		
		$qprsp=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
		WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
		AND tb_beli_procedure.kd_mr = '$kdmr' AND (tb_beli_procedure.kd_type = 4 OR tb_beli_procedure.kd_type = 5)");
		$no=1;
		while ($sp=mysql_fetch_array($qprsp)){
		
			echo $no++.") ".$sp['0']."<br>";

		}	
	
	?>
	
	</div>
	
	
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Treatment:</div>
	<div style="width:100%; float:left; margin:0px 50px;">
	
	<?php  
		
		$qprtr=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
		WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
		AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type = 6");
		$no=1;
		while ($treatment=mysql_fetch_array($qprtr)){
			
			echo $no++.") ".$treatment['0']."<br>";
			
		}
	
	?>
	
	</div>
	
	
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Medicine:</div>
	<div style="width:100%; float:left; margin:0px 50px;">
	
	<?php  
		
		$mqed=mysql_query("SELECT tb_obat.nama_obat, tb_beli_obat.ket FROM `tb_beli_obat`,`tb_obat` 
		WHERE tb_beli_obat.kd_obat=tb_obat.kd_obat 
		AND tb_beli_obat.kd_mr = '$kdmr' AND tb_beli_obat.kd_cat_obat != 4");
		$no=1;
		while ($med=mysql_fetch_array($mqed)){
			
			echo $no++.") ".$med['0']."<br>";
			echo "<span style='margin-left:1em'>".$med['1']."</span><br>";

		}	
	
	?>
	
	</div>
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">Recomendation:</div>
	<div style="width:90%; float:left; margin:0px 30px;"><?php echo str_replace(";","<br>","$rec"); ?><br><br></div>
	
	<div style="width:100%; float:left; margin:10px 10px 0px 10px;">
		Attending Physician Name, Signature and Stamp<br>
		Attending Physician<br><br><br><br><br><br>
		<?php echo $dokteraja; ?><br><br><br><br><br><br>
	
	</div>
	
	<div style="width:100%; text-align:center; float:left; margin:10px">
		<b>TOYA MEDIKA CLINIC</b><br>
		Jalan Raya Pengosekan, Ubud 80571 Gianyar - Bali<br>
		Phone: +62 361 978078, 7468151 | Fax: +62 361 971264 | toyamedika@yahoo.com<br>
		www.toyamedika.com<br><br>
	
	</div>
		
	


</div>

