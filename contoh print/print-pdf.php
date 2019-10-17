<?php

// koneksi to database
include "../scriptarea/connection.php";


// get medical Record
$kdmr = $_GET['mr'];
$qmr = mysql_query("SELECT *  FROM `tb_mr` WHERE `kd_mr`='$kdmr'");
while ($mr=mysql_fetch_array($qmr)) {
	$keluhan = $mr['keluhan'];
	$tgl = $mr['tgl_report'];
	$anamnesis = $mr['anamnesis'];
	$blood = $mr['blood'];
	$pulse = $mr['pulse'];
	$respiration = $mr['respiration'];
	$temp = $mr['temperature'];
	$oxygen = $mr['oxygen'];
	$roomair = $mr['room_air'];
	$oxysupp = $mr['oxygen_supply'];
	$consc = $mr['consciousness'];
	$sent = $mr['sent'];
	$thorax = $mr['thorax'];
	$abdomen = $mr['abdomen'];
	$extremities = $mr['extremities'];
	$other = $mr['other'];
	$diagnosis = $mr['diagnosis'];
	$physical_examination = $mr['physical_examination'];
	$rec = $mr['rec'];
	$blood = $mr['blood'];
	$blood = $mr['blood'];
	
	// type Service
	if ($mr['kd_type_service']==1){ $service="On Call";} 
	else if ($mr['kd_type_service']==2){$service=="Clinic Visit";}	
	else if ($mr['kd_type_service']==3){$service="Review on Call";} 
	else if ($mr['kd_type_service']==4){$service="Review Clinic Visit";} 
	else {$service="-";}
	
	// Detai pasien
	$kdpas = $mr['kd_pasien'];
	$qpas = mysql_query("SELECT * FROM tb_pasien WHERE kd_pasien = '$kdpas'");
	while($pasien=mysql_fetch_array($qpas)){
		$nmpasien = $kdpas." ".$pasien['first_name']." ".$pasien['family_name'];
		if ($pasien['sex']==1){$jk="Male";} else if ($pasien['sex']==2){$jk="Female";} else {$jk="Not Set";}
		$negara = $pasien['nationality'];
		$alamat = $pasien['alamat'];
		$phone = $pasien['phone'];
		$alergies = $pasien['alergies'];
		
	}
	
	// Detail Dokter
	$kddr = $mr['kd_dokter'];
	$qdr = mysql_query("
			SELECT tb_pasien.first_name,tb_pasien.family_name
			FROM tb_pasien, tb_karyawan
			WHERE tb_karyawan.kd_pasien = tb_pasien.kd_pasien
			AND tb_karyawan.kd_karyawan = '$kddr'");
	while ($dokter=mysql_fetch_array($qdr)){
		$nmdokter = $kddr." ".$dokter['0']." ".$dokter['1'];
		$dokteraja = $dokter['0']." ".$dokter['1'];
	}
	
	// Detail Perawat
	$kdnr = $mr['kd_perawat'];
	$qnr = mysql_query("
			SELECT tb_pasien.first_name,tb_pasien.family_name
			FROM tb_pasien, tb_karyawan
			WHERE tb_karyawan.kd_pasien = tb_pasien.kd_pasien
			AND tb_karyawan.kd_karyawan = '$kdnr'");
	while ($nurse=mysql_fetch_array($qnr)){
		$nmnurse = $kdnr." ".$nurse['0']." ".$nurse['1'];
	}
	
}
	
	
	require('../fpdf/fpdf.php');
	
	// Header 
	$pdf=new FPDF('P','cm','A4');

	$pdf->AddPage();
	$pdf->Image('../img/logo.png',1,1,6);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(0,2,'CONFIDENTIAL MEDICAL REPORT',0,0,'R');
	$x=$pdf->GetY();
	$pdf->SetY($x+2);

	// Thead (lebar,tinggi,isi,?,?,rata)
	
	// Doctor Info
	$pdf->SetFont('Arial','',7); $pdf->SetFillColor(0,0,255); $pdf->Cell(19,0.5,'Medical Report Code',1,0,'L'); $pdf->Ln();
	$pdf->SetFont('Arial','',6);
	$pdf->Cell(4,0.4, 'Medical Report Number'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $kdmr ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Register Date'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $tgl ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Doctor Code'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $nmdokter ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Nurse Code'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $nmnurse ); $pdf->Ln();
	
	// Patient Info
	$pdf->SetFont('Arial','',7); $pdf->Cell(19,0.5,'Patient Identity',1,0,'L'); $pdf->Ln();
	$pdf->SetFont('Arial','',6);
	$pdf->Cell(4,0.4, 'Patient Code'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $nmpasien ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Sex'  ); 		$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $jk ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Nationality'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $negara ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Address In Bali'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $alamat ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Phone In Bali'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $phone ); $pdf->Ln();
	
	// Medical Info
	$pdf->SetFont('Arial','',7); $pdf->Cell(19,0.5,'Medical Information',1,0,'L'); $pdf->Ln();
	$pdf->SetFont('Arial','',6);
	$pdf->Cell(4,0.4, 'Type of Service'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $service ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Anamnesis'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $anamnesis ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Alergies'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(1,0.4, $alergies ); $pdf->Ln();
	
	$pdf->Cell(4,0.4, 'Phisical Examination'  ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Vital Sign'  ); 	$pdf->Cell(0.5,0.4, ':' ); 
	$pdf->Cell(3,0.4, 'Blood Pressure:' ); 
	$pdf->Cell(3,0.4, 'Body Temperature:' ); 
	$pdf->Cell(3,0.4, 'Pulse Rate:' ); 
	$pdf->Cell(3,0.4, 'Oxygen Saturation:' ); 
	$pdf->Ln();
	$pdf->Cell(4,0.4, ''  ); 	$pdf->Cell(0.5,0.4, '' ); 
	$pdf->Cell(1,0.4, $blood ); 	$pdf->Cell(2,0.4, 'mmHg');
	$pdf->Cell(1,0.4, $temp ); 	$pdf->Cell(2,0.4, '`C');
	$pdf->Cell(1,0.4, $pulse ); 	$pdf->Cell(2,0.4, 'x/min.');
	$pdf->Cell(1,0.4, $oxygen ); 	$pdf->Cell(2,0.4, '%'); $pdf->Ln();
	
	$pdf->Cell(4,0.4, ''  ); 	$pdf->Cell(0.5,0.4, '' ); 
	$pdf->Cell(3,0.4, 'Respiration Rate:' ); 
	$pdf->Cell(3,0.4, 'Consciousness:' ); 
	$pdf->Cell(3,0.4, 'In Oxygen Supply:' ); 
	$pdf->Cell(3,0.4, 'In Room Air:' ); $pdf->Ln();
	
	$pdf->Cell(4,0.4, ''  ); 		$pdf->Cell(0.5,0.4, '' ); 
	$pdf->Cell(1,0.4, $respiration ); 	$pdf->Cell(2,0.4, 'x/min.'); 
	$pdf->Cell(1,0.4, $consc ); 		$pdf->Cell(2,0.4, 'Cm'); 
	$pdf->Cell(1,0.4,$oxysupp );		$pdf->Cell(2,0.4, 'ltr/mnt'); 
	$pdf->Cell(1,0.4, $roomair ); 		$pdf->Cell(2,0.4, '');  $pdf->Ln();
	
	$pdf->Cell(4,0.4, 'Skull, Ear, Nose and Troat'  ); 	$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $sent ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Thorax'  ); 				$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $thorax ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Abdomen'  ); 			$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $abdomen ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Extremities'  ); 			$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $extremities ); $pdf->Ln();
	$pdf->Cell(4,0.4, 'Other'  ); 				$pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $other ); $pdf->Ln();
	
	// Special Procedure
	$pdf->Cell(4,0.4, 'Other Examination/Procedure'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Ln();
	$qprspe=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
	WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
	AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type = 4");
	$noe=1;
	while ($spe=mysql_fetch_array($qprspe)){
		$sppre=$noe++.") ".$spe['0'];
		$pdf->Cell(1,0.4 );
		$pdf->Cell(4,0.4, $sppre ); $pdf->Ln();
	}
	$pdf->Ln();
	
	$pdf->Cell(4,0.4, 'Diagnosis'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $diagnosis ); $pdf->Ln();
	
	// Procedure treatment
	$pdf->Cell(4,0.4, 'Treatment :'  ); $pdf->Ln();
	$qprtr=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
	WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
	AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type = 2");
	$no=1;
	while ($treatment=mysql_fetch_array($qprtr)){
		$treat=$no++.") ".$treatment['0'];
		$pdf->Cell(1,0.4 );$pdf->Cell(4,0.4, $treat ); $pdf->Ln();
	}
	$pdf->Ln();
	
	// Special Procedure
	$pdf->Cell(4,0.4, 'Special Procedure:'  ); $pdf->Ln();
	$qprsp=mysql_query("SELECT nama_procedure FROM `tb_beli_procedure`,`tb_procedure` 
	WHERE tb_beli_procedure.kd_procedure=tb_procedure.kd_procedure 
	AND tb_beli_procedure.kd_mr = '$kdmr' AND tb_beli_procedure.kd_type IN ('3','5') ");
	$no=1;
	while ($sp=mysql_fetch_array($qprsp)){
		$sppr=$no++.") ".$sp['0'];
		$pdf->Cell(1,0.4 );
		$pdf->Cell(4,0.4, $sppr ); $pdf->Ln();
	}
	$pdf->Ln();
	
	// Obat
	$pdf->Cell(4,0.4, 'Medicine:'  ); $pdf->Ln();
	$mqed=mysql_query("SELECT tb_obat.nama_obat, tb_beli_obat.ket FROM `tb_beli_obat`,`tb_obat` 
	WHERE tb_beli_obat.kd_obat=tb_obat.kd_obat 
	AND tb_beli_obat.kd_mr = '$kdmr' AND tb_beli_obat.kd_cat_obat = 1");
	$no=1;
	while ($med=mysql_fetch_array($mqed)){
		$medicine=$no++.") ".$med['0'];
		$ketobat = $med['1'];
		$pdf->Cell(1,0.4 ); $pdf->Cell(4,0.4, $medicine ); $pdf->Ln();
		$pdf->Cell(1.5,0.4 ); $pdf->Cell(4,0.4, $ketobat ); $pdf->Ln();
	}
	$pdf->Ln();
	
	$pdf->Cell(4,0.4, 'Recomendation'  ); $pdf->Cell(0.5,0.4, ':' ); $pdf->Cell(4,0.4, $rec ); $pdf->Ln(1);
	
	$pdf->Cell(4,0.4, 'Attending Physician Name, Signature and Stamp'  );  $pdf->Ln();
	$pdf->Cell(4,0.4, 'Attending Physician'  ); $pdf->Ln(2);
	
	$pdf->Cell(4,0.4, $dokteraja  ); $pdf->Ln();
	
	$pdf->SetY(-2.9);
    // Arial italic 8
    $pdf->SetFont('Arial','B',8); $pdf->Cell(19,0.5, 'TOYA MEDIKA CLINIC',0,0,'C'); $pdf->Ln();
	$pdf->SetFont('Arial','',6); $pdf->Cell(19,0.3, 'Jalan Raya Pengosekan, Ubud 80571 Gianyar - Bali, Phone: +62 361 978078, 7468151 Fax: +62 361 971264, E-mail: toyamedika@yahoo.com',0,0,'C'); $pdf->Ln();


	$pdf->Output();

?>