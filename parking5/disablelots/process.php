<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action){
	case 'add' :
			add_user();
			break;
	case 'unable' :
			unable();
			break;
	default :
		// if action id not defined or unknown
			// move to main page
			header('Location: ../index.php');
}

function add_user()
{
	$A01 = isset($_POST['A01']) ? $_POST['A01'] : 0;
	$A02 = isset($_POST['A02']) ? $_POST['A02'] : 0;
	$A03 = isset($_POST['A03']) ? $_POST['A03'] : 0;
	$A04 = isset($_POST['A04']) ? $_POST['A04'] : 0;
	$A05 = isset($_POST['A05']) ? $_POST['A05'] : 0;
	$A06 = isset($_POST['A06']) ? $_POST['A06'] : 0;
	$A07 = isset($_POST['A07']) ? $_POST['A07'] : 0;
	$A08 = isset($_POST['A08']) ? $_POST['A08'] : 0;
	$A09 = isset($_POST['A09']) ? $_POST['A09'] : 0;
	$A10 = isset($_POST['A10']) ? $_POST['A10'] : 0;
	$A11 = isset($_POST['A11']) ? $_POST['A11'] : 0;
	$A12 = isset($_POST['A12']) ? $_POST['A12'] : 0;
	$A13 = isset($_POST['A13']) ? $_POST['A13'] : 0;
	$A14 = isset($_POST['A14']) ? $_POST['A14'] : 0;
	$A15 = isset($_POST['A15']) ? $_POST['A15'] : 0;
	$A16 = isset($_POST['A16']) ? $_POST['A16'] : 0;
	$A17 = isset($_POST['A17']) ? $_POST['A17'] : 0;
	$A18 = isset($_POST['A18']) ? $_POST['A18'] : 0;
	$A19 = isset($_POST['A19']) ? $_POST['A19'] : 0;
	$A20 = isset($_POST['A20']) ? $_POST['A20'] : 0;
	$B01 = isset($_POST['B01']) ? $_POST['B01'] : 0;
	$B02 = isset($_POST['B02']) ? $_POST['B02'] : 0;
	$B03 = isset($_POST['B03']) ? $_POST['B03'] : 0;
	$B04 = isset($_POST['B04']) ? $_POST['B04'] : 0;
	$B05 = isset($_POST['B05']) ? $_POST['B05'] : 0;
	$B06 = isset($_POST['B06']) ? $_POST['B06'] : 0;
	$B07 = isset($_POST['B07']) ? $_POST['B07'] : 0;
	$B08 = isset($_POST['B08']) ? $_POST['B08'] : 0;
	$B09 = isset($_POST['B09']) ? $_POST['B09'] : 0;
	$B10 = isset($_POST['B10']) ? $_POST['B10'] : 0;
	$B11 = isset($_POST['B11']) ? $_POST['B11'] : 0;
	$B12 = isset($_POST['B12']) ? $_POST['B12'] : 0;
	$B13 = isset($_POST['B13']) ? $_POST['B13'] : 0;
	$B14 = isset($_POST['B14']) ? $_POST['B14'] : 0;
	$B15 = isset($_POST['B15']) ? $_POST['B15'] : 0;
	$B16 = isset($_POST['B16']) ? $_POST['B16'] : 0;
	$B17 = isset($_POST['B17']) ? $_POST['B17'] : 0;
	$B18 = isset($_POST['B18']) ? $_POST['B18'] : 0;
	$B19 = isset($_POST['B19']) ? $_POST['B19'] : 0;
	$B20 = isset($_POST['B20']) ? $_POST['B20'] : 0;
	//GATE 6
	$C01 = isset($_POST['C01']) ? $_POST['C01'] : 0;
	$C02 = isset($_POST['C02']) ? $_POST['C02'] : 0;
	$C03 = isset($_POST['C03']) ? $_POST['C03'] : 0;
	$C04 = isset($_POST['C04']) ? $_POST['C04'] : 0;
	$C05 = isset($_POST['C05']) ? $_POST['C05'] : 0;
	$C06 = isset($_POST['C06']) ? $_POST['C06'] : 0;
	$C07 = isset($_POST['C07']) ? $_POST['C07'] : 0;
	$C08 = isset($_POST['C08']) ? $_POST['C08'] : 0;
	$C09 = isset($_POST['C09']) ? $_POST['C09'] : 0;
	$C10 = isset($_POST['C10']) ? $_POST['C10'] : 0;
	$C11 = isset($_POST['C11']) ? $_POST['C11'] : 0;
	$C12 = isset($_POST['C12']) ? $_POST['C12'] : 0;
	$C13 = isset($_POST['C13']) ? $_POST['C13'] : 0;
	$C14 = isset($_POST['C14']) ? $_POST['C14'] : 0;
	$C15 = isset($_POST['C15']) ? $_POST['C15'] : 0;
	$C16 = isset($_POST['C16']) ? $_POST['C16'] : 0;
	$C17 = isset($_POST['C17']) ? $_POST['C17'] : 0;
	$C18 = isset($_POST['C18']) ? $_POST['C18'] : 0;
	$C19 = isset($_POST['C19']) ? $_POST['C19'] : 0;
	$C20 = isset($_POST['C20']) ? $_POST['C20'] : 0;

		
		
		$queryA01 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A01','admin','A01')";
		$resultA01 = mysql_query($queryA01) or die(mysql_error());
		
		$queryA02 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A02','admin','A02')";
		$resultA02 = mysql_query($queryA02) or die(mysql_error());
		
		$queryA03 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A03','admin','A03')";
		$resultA03 = mysql_query($queryA03) or die(mysql_error());
		
		$queryA04 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A04','admin','A04')";
		$resultA04 = mysql_query($queryA04) or die(mysql_error());
		
		$queryA05 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A05','admin','A05')";
		$resultA05 = mysql_query($queryA05) or die(mysql_error());
		
		$queryA06 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A06','admin','A06')";
		$resultA06 = mysql_query($queryA06) or die(mysql_error());
		
		$queryA07 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A07','admin','A07')";
		$resultA07 = mysql_query($queryA07) or die(mysql_error());
		
		$queryA08 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A08','admin','A08')";
		$resultA08 = mysql_query($queryA08) or die(mysql_error());
		
		$queryA09 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A09','admin','A09')";
		$resultA09 = mysql_query($queryA09) or die(mysql_error());
		
		$queryA10 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A10','admin','A10')";
		$resultA10 = mysql_query($queryA10) or die(mysql_error());
		
		$queryA11 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A11','admin','A11')";
		$resultA11 = mysql_query($queryA11) or die(mysql_error());
		
		$queryA12 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A12','admin','A12')";
		$resultA12 = mysql_query($queryA12) or die(mysql_error());
		
		$queryA13 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A13','admin','A13')";
		$resultA13 = mysql_query($queryA13) or die(mysql_error());
		
		$queryA14 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A14','admin','A14')";
		$resultA14 = mysql_query($queryA14) or die(mysql_error());
		
		$queryA15 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A15','admin','A15')";
		$resultA15 = mysql_query($queryA15) or die(mysql_error());
		
		$queryA16 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A16','admin','A16')";
		$resultA16 = mysql_query($queryA16) or die(mysql_error());
		
		$queryA17 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A17','admin','A17')";
		$resultA17 = mysql_query($queryA17) or die(mysql_error());
		
		$queryA18 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A18','admin','A18')";
		$resultA18 = mysql_query($queryA18) or die(mysql_error());
		
		$queryA19 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A19','admin','A19')";
		$resultA19 = mysql_query($queryA19) or die(mysql_error());
		
		$queryA20 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$A20','admin','A20')";
		$resultA20 = mysql_query($queryA20) or die(mysql_error());
		
		$queryB01 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B01','admin','B01')";
		$resultB01 = mysql_query($queryB01) or die(mysql_error());
		
		$queryB02 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B02','admin','B02')";
		$resultB02 = mysql_query($queryB02) or die(mysql_error());
		
		$queryB03 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B03','admin','B03')";
		$resultB03 = mysql_query($queryB03) or die(mysql_error());
		
		$queryB04 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B04','admin','B04')";
		$resultB04 = mysql_query($queryB04) or die(mysql_error());
		
		$queryB05 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B05','admin','B05')";
		$resultB05 = mysql_query($queryB05) or die(mysql_error());
		
		$queryB06 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B06','admin','B06')";
		$resultB06 = mysql_query($queryB06) or die(mysql_error());
		
		$queryB07 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B07','admin','B07')";
		$resultB07 = mysql_query($queryB07) or die(mysql_error());
		
		$queryB08 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B08','admin','B08')";
		$resultB08 = mysql_query($queryB08) or die(mysql_error());
		
		$queryB09 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B09','admin','B09')";
		$resultB09 = mysql_query($queryB09) or die(mysql_error());
		
		$queryB10 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B10','admin','B10')";
		$resultB10 = mysql_query($queryB10) or die(mysql_error());
		
		$queryB11 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B11','admin','B11')";
		$resultB11 = mysql_query($queryB11) or die(mysql_error());
		
		$queryB12 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B12','admin','B12')";
		$resultB12 = mysql_query($queryB12) or die(mysql_error());
		
		$queryB13 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B13','admin','B13')";
		$resultB13 = mysql_query($queryB13) or die(mysql_error());
		
		$queryB14 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B14','admin','B14')";
		$resultB14 = mysql_query($queryB14) or die(mysql_error());
		
		$queryB15 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B15','admin','B15')";
		$resultB15 = mysql_query($queryB15) or die(mysql_error());
		
		$queryB16 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B16','admin','B16')";
		$resultB16 = mysql_query($queryB16) or die(mysql_error());
		
		$queryB17 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B17','admin','B17')";
		$resultB17 = mysql_query($queryB17) or die(mysql_error());
		
		$queryB18 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B18','admin','B18')";
		$resultB18 = mysql_query($queryB18) or die(mysql_error());
		
		$queryB19 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B19','admin','B19')";
		$resultB19 = mysql_query($queryB19) or die(mysql_error());
		
		$queryB20 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$B20','admin','B20')";
		$resultB20 = mysql_query($queryB20) or die(mysql_error());		
		
		//GATE 6
		$queryC01 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C01','admin','C01')";
		$resultC01 = mysql_query($queryC01) or die(mysql_error());
		
		$queryC02 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C02','admin','C02')";
		$resultC02 = mysql_query($queryC02) or die(mysql_error());
		
		$queryC03 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C03','admin','C03')";
		$resultC03 = mysql_query($queryC03) or die(mysql_error());
		
		$queryC04 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C04','admin','C04')";
		$resultC04 = mysql_query($queryC04) or die(mysql_error());
		
		$queryC05 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C05','admin','C05')";
		$resultC05 = mysql_query($queryC05) or die(mysql_error());
		
		$queryC06 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C06','admin','C06')";
		$resultC06 = mysql_query($queryC06) or die(mysql_error());
		
		$queryC07 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C07','admin','C07')";
		$resultC07 = mysql_query($queryC07) or die(mysql_error());
		
		$queryC08 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C08','admin','C08')";
		$resultC08 = mysql_query($queryC08) or die(mysql_error());
		
		$queryC09 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C09','admin','C09')";
		$resultC09 = mysql_query($queryC09) or die(mysql_error());
		
		$queryC10 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C10','admin','C10')";
		$resultC10 = mysql_query($queryC10) or die(mysql_error());
		
		$queryC11 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C11','admin','C11')";
		$resultC11 = mysql_query($queryC11) or die(mysql_error());
		
		$queryC12 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C12','admin','C12')";
		$resultC12 = mysql_query($queryC12) or die(mysql_error());
		
		$queryC13 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C13','admin','C13')";
		$resultC13 = mysql_query($queryC13) or die(mysql_error());
		
		$queryC14 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C14','admin','C14')";
		$resultC14 = mysql_query($queryC14) or die(mysql_error());
		
		$queryC15 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C15','admin','C15')";
		$resultC15 = mysql_query($queryC15) or die(mysql_error());
		
		$queryC16 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C16','admin','C16')";
		$resultC16 = mysql_query($queryC16) or die(mysql_error());
		
		$queryC17 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C17','admin','C17')";
		$resultC17 = mysql_query($queryC17) or die(mysql_error());
		
		$queryC18 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C18','admin','C18')";
		$resultC18 = mysql_query($queryC18) or die(mysql_error());
		
		$queryC19 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C19','admin','C19')";
		$resultC19 = mysql_query($queryC19) or die(mysql_error());
		
		$queryC20 = "INSERT INTO tbl_scan (scan_stat, client_id, scan_lot) VALUES ('$C20','admin','C20')";
		$resultC20 = mysql_query($queryC20) or die(mysql_error());
		header("Location: ../index.php?page=users&load=disable&msg=SLOTS HAS SUCCESSFULLY BEEN DISABLED");
		exit;
}
function unable()
{
	//GATE 1
	$A01 = isset($_POST['A01']) ? $_POST['A01'] : 0;
	$A02 = isset($_POST['A02']) ? $_POST['A02'] : 0;
	$A03 = isset($_POST['A03']) ? $_POST['A03'] : 0;
	$A04 = isset($_POST['A04']) ? $_POST['A04'] : 0;
	$A05 = isset($_POST['A05']) ? $_POST['A05'] : 0;
	$A06 = isset($_POST['A06']) ? $_POST['A06'] : 0;
	$A07 = isset($_POST['A07']) ? $_POST['A07'] : 0;
	$A08 = isset($_POST['A08']) ? $_POST['A08'] : 0;
	$A09 = isset($_POST['A09']) ? $_POST['A09'] : 0;
	$A10 = isset($_POST['A10']) ? $_POST['A10'] : 0;
	$A11 = isset($_POST['A11']) ? $_POST['A11'] : 0;
	$A12 = isset($_POST['A12']) ? $_POST['A12'] : 0;
	$A13 = isset($_POST['A13']) ? $_POST['A13'] : 0;
	$A14 = isset($_POST['A14']) ? $_POST['A14'] : 0;
	$A15 = isset($_POST['A15']) ? $_POST['A15'] : 0;
	$A16 = isset($_POST['A16']) ? $_POST['A16'] : 0;
	$A17 = isset($_POST['A17']) ? $_POST['A17'] : 0;
	$A18 = isset($_POST['A18']) ? $_POST['A18'] : 0;
	$A19 = isset($_POST['A19']) ? $_POST['A19'] : 0;
	$A20 = isset($_POST['A20']) ? $_POST['A20'] : 0;
	//GATE 2
	$B01 = isset($_POST['B01']) ? $_POST['B01'] : 0;
	$B02 = isset($_POST['B02']) ? $_POST['B02'] : 0;
	$B03 = isset($_POST['B03']) ? $_POST['B03'] : 0;
	$B04 = isset($_POST['B04']) ? $_POST['B04'] : 0;
	$B05 = isset($_POST['B05']) ? $_POST['B05'] : 0;
	$B06 = isset($_POST['B06']) ? $_POST['B06'] : 0;
	$B07 = isset($_POST['B07']) ? $_POST['B07'] : 0;
	$B08 = isset($_POST['B08']) ? $_POST['B08'] : 0;
	$B09 = isset($_POST['B09']) ? $_POST['B09'] : 0;
	$B10 = isset($_POST['B10']) ? $_POST['B10'] : 0;
	$B11 = isset($_POST['B11']) ? $_POST['B11'] : 0;
	$B12 = isset($_POST['B12']) ? $_POST['B12'] : 0;
	$B13 = isset($_POST['B13']) ? $_POST['B13'] : 0;
	$B14 = isset($_POST['B14']) ? $_POST['B14'] : 0;
	$B15 = isset($_POST['B15']) ? $_POST['B15'] : 0;
	$B16 = isset($_POST['B16']) ? $_POST['B16'] : 0;
	$B17 = isset($_POST['B17']) ? $_POST['B17'] : 0;
	$B18 = isset($_POST['B18']) ? $_POST['B18'] : 0;
	$B19 = isset($_POST['B19']) ? $_POST['B19'] : 0;
	$B20 = isset($_POST['B20']) ? $_POST['B20'] : 0;
	//GATE 6
	$C01 = isset($_POST['C01']) ? $_POST['C01'] : 0;
	$C02 = isset($_POST['C02']) ? $_POST['C02'] : 0;
	$C03 = isset($_POST['C03']) ? $_POST['C03'] : 0;
	$C04 = isset($_POST['C04']) ? $_POST['C04'] : 0;
	$C05 = isset($_POST['C05']) ? $_POST['C05'] : 0;
	$C06 = isset($_POST['C06']) ? $_POST['C06'] : 0;
	$C07 = isset($_POST['C07']) ? $_POST['C07'] : 0;
	$C08 = isset($_POST['C08']) ? $_POST['C08'] : 0;
	$C09 = isset($_POST['C09']) ? $_POST['C09'] : 0;
	$C10 = isset($_POST['C10']) ? $_POST['C10'] : 0;
	$C11 = isset($_POST['C11']) ? $_POST['C11'] : 0;
	$C12 = isset($_POST['C12']) ? $_POST['C12'] : 0;
	$C13 = isset($_POST['C13']) ? $_POST['C13'] : 0;
	$C14 = isset($_POST['C14']) ? $_POST['C14'] : 0;
	$C15 = isset($_POST['C15']) ? $_POST['C15'] : 0;
	$C16 = isset($_POST['C16']) ? $_POST['C16'] : 0;
	$C17 = isset($_POST['C17']) ? $_POST['C17'] : 0;
	$C18 = isset($_POST['C18']) ? $_POST['C18'] : 0;
	$C19 = isset($_POST['C19']) ? $_POST['C19'] : 0;
	$C20 = isset($_POST['C20']) ? $_POST['C20'] : 0;

		
		//GATE 1
		$queryA01 = "UPDATE tbl_scan SET scan_stat='$A01' WHERE client_id='admin' and scan_lot='A01'";
		$resultA01 = mysql_query($queryA01) or die(mysql_error());
		
		$queryA02 = "UPDATE tbl_scan SET scan_stat='$A02' WHERE client_id='admin' and scan_lot='A02'";
		$resultA02 = mysql_query($queryA02) or die(mysql_error());
		
		$queryA03 = "UPDATE tbl_scan SET scan_stat='$A03' WHERE client_id='admin' and scan_lot='A03'";
		$resultA03 = mysql_query($queryA03) or die(mysql_error());
		
		$queryA04 = "UPDATE tbl_scan SET scan_stat='$A04' WHERE client_id='admin' and scan_lot='A04'";
		$resultA04 = mysql_query($queryA04) or die(mysql_error());
		
		$queryA05 = "UPDATE tbl_scan SET scan_stat='$A05' WHERE client_id='admin' and scan_lot='A05'";
		$resultA05 = mysql_query($queryA05) or die(mysql_error());
		
		$queryA06 = "UPDATE tbl_scan SET scan_stat='$A06' WHERE client_id='admin' and scan_lot='A06'";
		$resultA06 = mysql_query($queryA06) or die(mysql_error());
		
		$queryA07 = "UPDATE tbl_scan SET scan_stat='$A07' WHERE client_id='admin' and scan_lot='A07'";
		$resultA07 = mysql_query($queryA07) or die(mysql_error());
		
		$queryA08 = "UPDATE tbl_scan SET scan_stat='$A08' WHERE client_id='admin' and scan_lot='A08'";
		$resultA08 = mysql_query($queryA08) or die(mysql_error());
		
		$queryA09 = "UPDATE tbl_scan SET scan_stat='$A09' WHERE client_id='admin' and scan_lot='A09'";
		$resultA09 = mysql_query($queryA09) or die(mysql_error());
		
		$queryA10 = "UPDATE tbl_scan SET scan_stat='$A10' WHERE client_id='admin' and scan_lot='A10'";
		$resultA10 = mysql_query($queryA10) or die(mysql_error());
		
		$queryA11 = "UPDATE tbl_scan SET scan_stat='$A11' WHERE client_id='admin' and scan_lot='A11'";
		$resultA11 = mysql_query($queryA11) or die(mysql_error());
		
		$queryA12 = "UPDATE tbl_scan SET scan_stat='$A12' WHERE client_id='admin' and scan_lot='A12'";
		$resultA12 = mysql_query($queryA12) or die(mysql_error());
		
		$queryA13 = "UPDATE tbl_scan SET scan_stat='$A13' WHERE client_id='admin' and scan_lot='A13'";
		$resultA13 = mysql_query($queryA13) or die(mysql_error());
		
		$queryA14 = "UPDATE tbl_scan SET scan_stat='$A14' WHERE client_id='admin' and scan_lot='A14'";
		$resultA14 = mysql_query($queryA14) or die(mysql_error());
		
		$queryA15 = "UPDATE tbl_scan SET scan_stat='$A15' WHERE client_id='admin' and scan_lot='A15'";
		$resultA15 = mysql_query($queryA15) or die(mysql_error());
		
		$queryA16 = "UPDATE tbl_scan SET scan_stat='$A16' WHERE client_id='admin' and scan_lot='A16'";
		$resultA16 = mysql_query($queryA16) or die(mysql_error());
		
		$queryA17 = "UPDATE tbl_scan SET scan_stat='$A17' WHERE client_id='admin' and scan_lot='A17'";
		$resultA17 = mysql_query($queryA17) or die(mysql_error());
		
		$queryA18 = "UPDATE tbl_scan SET scan_stat='$A18' WHERE client_id='admin' and scan_lot='A18'";
		$resultA18 = mysql_query($queryA18) or die(mysql_error());
		
		$queryA19 = "UPDATE tbl_scan SET scan_stat='$A19' WHERE client_id='admin' and scan_lot='A19'";
		$resultA19 = mysql_query($queryA19) or die(mysql_error());
		
		$queryA20 = "UPDATE tbl_scan SET scan_stat='$A20' WHERE client_id='admin' and scan_lot='A20'";
		$resultA20 = mysql_query($queryA20) or die(mysql_error());
		
		//GATE 2
		$queryB01 = "UPDATE tbl_scan SET scan_stat='$B01' WHERE client_id='admin' and scan_lot='B01'";
		$resultB01 = mysql_query($queryB01) or die(mysql_error());
		
		$queryB02 = "UPDATE tbl_scan SET scan_stat='$B02' WHERE client_id='admin' and scan_lot='B02'";
		$resultB02 = mysql_query($queryB02) or die(mysql_error());
		
		$queryB03 = "UPDATE tbl_scan SET scan_stat='$B03' WHERE client_id='admin' and scan_lot='B03'";
		$resultB03 = mysql_query($queryB03) or die(mysql_error());
		
		$queryB04 = "UPDATE tbl_scan SET scan_stat='$B04' WHERE client_id='admin' and scan_lot='B04'";
		$resultB04 = mysql_query($queryB04) or die(mysql_error());
		
		$queryB05 = "UPDATE tbl_scan SET scan_stat='$B05' WHERE client_id='admin' and scan_lot='B05'";
		$resultB05 = mysql_query($queryB05) or die(mysql_error());
		
		$queryB06 = "UPDATE tbl_scan SET scan_stat='$B06' WHERE client_id='admin' and scan_lot='B06'";
		$resultB06 = mysql_query($queryB06) or die(mysql_error());
		
		$queryB07 = "UPDATE tbl_scan SET scan_stat='$B07' WHERE client_id='admin' and scan_lot='B07'";
		$resultB07 = mysql_query($queryB07) or die(mysql_error());
		
		$queryB08 = "UPDATE tbl_scan SET scan_stat='$B08' WHERE client_id='admin' and scan_lot='B08'";
		$resultB08 = mysql_query($queryB08) or die(mysql_error());
		
		$queryB09 = "UPDATE tbl_scan SET scan_stat='$B09' WHERE client_id='admin' and scan_lot='B09'";
		$resultB09 = mysql_query($queryB09) or die(mysql_error());
		
		$queryB10 = "UPDATE tbl_scan SET scan_stat='$B10' WHERE client_id='admin' and scan_lot='B10'";
		$resultB10 = mysql_query($queryB10) or die(mysql_error());
		
		$queryB11 = "UPDATE tbl_scan SET scan_stat='$B11' WHERE client_id='admin' and scan_lot='B11'";
		$resultB11 = mysql_query($queryB11) or die(mysql_error());
		
		$queryB12 = "UPDATE tbl_scan SET scan_stat='$B12' WHERE client_id='admin' and scan_lot='B12'";
		$resultB12 = mysql_query($queryB12) or die(mysql_error());
		
		$queryB13 = "UPDATE tbl_scan SET scan_stat='$B13' WHERE client_id='admin' and scan_lot='B13'";
		$resultB13 = mysql_query($queryB13) or die(mysql_error());
		
		$queryB14 = "UPDATE tbl_scan SET scan_stat='$B14' WHERE client_id='admin' and scan_lot='B14'";
		$resultB14 = mysql_query($queryB14) or die(mysql_error());
		
		$queryB15 = "UPDATE tbl_scan SET scan_stat='$B15' WHERE client_id='admin' and scan_lot='B15'";
		$resultB15 = mysql_query($queryB15) or die(mysql_error());
		
		$queryB16 = "UPDATE tbl_scan SET scan_stat='$B16' WHERE client_id='admin' and scan_lot='B16'";
		$resultB16 = mysql_query($queryB16) or die(mysql_error());
		
		$queryB17 = "UPDATE tbl_scan SET scan_stat='$B17' WHERE client_id='admin' and scan_lot='B17'";
		$resultB17 = mysql_query($queryB17) or die(mysql_error());
		
		$queryB18 = "UPDATE tbl_scan SET scan_stat='$B18' WHERE client_id='admin' and scan_lot='B18'";
		$resultB18 = mysql_query($queryB18) or die(mysql_error());
		
		$queryB19 = "UPDATE tbl_scan SET scan_stat='$B19' WHERE client_id='admin' and scan_lot='B19'";
		$resultB19 = mysql_query($queryB19) or die(mysql_error());
		
		$queryB20 = "UPDATE tbl_scan SET scan_stat='$B20' WHERE client_id='admin' and scan_lot='B20'";
		$resultB20 = mysql_query($queryB20) or die(mysql_error());
		
		//GATE 6
		$queryC01 = "UPDATE tbl_scan SET scan_stat='$C01' WHERE client_id='admin' and scan_lot='C01'";
		$resultC01 = mysql_query($queryC01) or die(mysql_error());
		
		$queryC02 = "UPDATE tbl_scan SET scan_stat='$C02' WHERE client_id='admin' and scan_lot='C02'";
		$resultC02 = mysql_query($queryC02) or die(mysql_error());
		
		$queryC03 = "UPDATE tbl_scan SET scan_stat='$C03' WHERE client_id='admin' and scan_lot='C03'";
		$resultC03 = mysql_query($queryC03) or die(mysql_error());
		
		$queryC04 = "UPDATE tbl_scan SET scan_stat='$C04' WHERE client_id='admin' and scan_lot='C04'";
		$resultC04 = mysql_query($queryC04) or die(mysql_error());
		
		$queryC05 = "UPDATE tbl_scan SET scan_stat='$C05' WHERE client_id='admin' and scan_lot='C05'";
		$resultC05 = mysql_query($queryC05) or die(mysql_error());
		
		$queryC06 = "UPDATE tbl_scan SET scan_stat='$C06' WHERE client_id='admin' and scan_lot='C06'";
		$resultC06 = mysql_query($queryC06) or die(mysql_error());
		
		$queryC07 = "UPDATE tbl_scan SET scan_stat='$C07' WHERE client_id='admin' and scan_lot='C07'";
		$resultC07 = mysql_query($queryC07) or die(mysql_error());
		
		$queryC08 = "UPDATE tbl_scan SET scan_stat='$C08' WHERE client_id='admin' and scan_lot='C08'";
		$resultC08 = mysql_query($queryC08) or die(mysql_error());
		
		$queryC09 = "UPDATE tbl_scan SET scan_stat='$C09' WHERE client_id='admin' and scan_lot='C09'";
		$resultC09 = mysql_query($queryC09) or die(mysql_error());
		
		$queryC10 = "UPDATE tbl_scan SET scan_stat='$C10' WHERE client_id='admin' and scan_lot='C10'";
		$resultC10 = mysql_query($queryC10) or die(mysql_error());
		
		$queryC11 = "UPDATE tbl_scan SET scan_stat='$C11' WHERE client_id='admin' and scan_lot='C11'";
		$resultC11 = mysql_query($queryC11) or die(mysql_error());
		
		$queryC12 = "UPDATE tbl_scan SET scan_stat='$C12' WHERE client_id='admin' and scan_lot='C12'";
		$resultC12 = mysql_query($queryC12) or die(mysql_error());
		
		$queryC13 = "UPDATE tbl_scan SET scan_stat='$C13' WHERE client_id='admin' and scan_lot='C13'";
		$resultC13 = mysql_query($queryC13) or die(mysql_error());
		
		$queryC14 = "UPDATE tbl_scan SET scan_stat='$C14' WHERE client_id='admin' and scan_lot='C14'";
		$resultC14 = mysql_query($queryC14) or die(mysql_error());
		
		$queryC15 = "UPDATE tbl_scan SET scan_stat='$C15' WHERE client_id='admin' and scan_lot='C15'";
		$resultC15 = mysql_query($queryC15) or die(mysql_error());
		
		$queryC16 = "UPDATE tbl_scan SET scan_stat='$C16' WHERE client_id='admin' and scan_lot='C16'";
		$resultC16 = mysql_query($queryC16) or die(mysql_error());
		
		$queryC17 = "UPDATE tbl_scan SET scan_stat='$C17' WHERE client_id='admin' and scan_lot='C17'";
		$resultC17 = mysql_query($queryC17) or die(mysql_error());
		
		$queryC18 = "UPDATE tbl_scan SET scan_stat='$C18' WHERE client_id='admin' and scan_lot='C18'";
		$resultC18 = mysql_query($queryC18) or die(mysql_error());
		
		$queryC19 = "UPDATE tbl_scan SET scan_stat='$C19' WHERE client_id='admin' and scan_lot='C19'";
		$resultC19 = mysql_query($queryC19) or die(mysql_error());
		
		$queryC20 = "UPDATE tbl_scan SET scan_stat='$C20' WHERE client_id='admin' and scan_lot='C20'";
		$resultC20 = mysql_query($queryC20) or die(mysql_error());
		header("Location: ../index.php?page=users&load=disable&msg=SLOTS ARE NOW AVAILABLE");
		exit;
}

?>

