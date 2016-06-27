<?php
include ("library/config.php");

	$msg   = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '';
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
	$id 	= (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
$id1 = 101; $id2 = 102; $id3 = 103; $id4 = 104; $id5 = 105; $id6 = 106; $id7 = 107; $id8 = 108; $id9 = 109; $id10 = 110;
$id11 = 111; $id12 = 112; $id13 = 113; $id14 = 114; $id15 = 115; $id16 = 116; $id17 = 117; $id18 = 118; $id19 = 119; $id20 = 120;
$id21 = 121; $id22 = 122; $id23 = 123; $id24 = 124; $id25 = 125; $id26 = 126; $id27 = 127; $id28 = 128; $id29 = 129; $id30 = 130;
$id31 = 131; $id32 = 132; $id33 = 133; $id34 = 134; $id35 = 135; $id36 = 136; $id37 = 137; $id38 = 138; $id39 = 139; $id40 = 140;
$id41 = 141; $id42 = 142; $id43 = 143; $id44 = 144; $id45 = 145; $id46 = 146; $id47 = 147; $id48 = 148; $id49 = 149; $id50 = 150;
$id51 = 151; $id52 = 152; $id53 = 153; $id54 = 154; $id55 = 155; $id56 = 156; $id57 = 157; $id58 = 158; $id59 = 159; $id60 = 160;
$id61 = 161; $id62 = 162; $id63 = 163; $id64 = 164; $id65 = 165; $id66 = 166; $id67 = 167; $id68 = 168; $id69 = 169; $id70 = 170;
$id71 = 171; $id72 = 172; $id73 = 173; $id74 = 174; $id75 = 175; $id76 = 176; $id77 = 177; $id78 = 178; $id79 = 179; $id80 = 180;
$id81 = 181; $id82 = 182; $id83 = 183; $id84 = 184; $id85 = 185; $id86 = 186; $id87 = 187; $id88 = 188; $id89 = 189; $id90 = 190;
$id91 = 191; $id92 = 192; $id93 = 193; $id94 = 194; $id95 = 195;
//http://www.google.com/ig/api?weather=Bacolod+City
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Gate 1</title>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="description" content=""/>
<meta name="author" content=""/>
<meta name="keywords" content=""/>
 <link rel="stylesheet" type="text/css" href="gate1/map.css" title="style" />
 <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
  <script language="javascript" type="text/javascript" src="js/script.js"></script>
</head>
<body onLoad="document.form1.scan.focus();">
<div id="scan">

				<tr>
					<td>
					<a href="index.php?load=home"><input type="submit" name="main" style="height:30px; width:70px; font-weight:bold;" value="HOME"/></a>
					</td>
				</tr>
<tr>
	<td>
	<!-- Markup starts here-->
		<table>
		<tr>
			<td colspan="2"><b>
					Scan ID
			</b></td>
		</tr>
				<form name="form1" method="POST" action="scan/process.php?action=scan" >
				<table id="tbl_newform">
				<tr>
					<td>
					Id Number:
					</td>
					<td>
						<input type="text" name="scan" size="30"/>
					</td>
				</tr>
                <tr>
                <td align="center" colspan="2"><font color=red> <?php echo $msg;?></font>
                </tr>
				</table>
				</form>
			</td>
		</tr>
		</table>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
<div>
<?php
	if($load=="option"){
		require_once("scan/option.php");
	}
?>
</div>
</div>
	<div id="picture-holder">
		<div id="spacer-top2">&nbsp;
		</div>
		<div id="marker-holder">
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
		</div><br><br><br><br><br><br><br>
		<div id="marker-holder1">
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots2">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
		</div>
		<div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			</div>
		<div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			</div><br>
		<div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			</div><br>
		<div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
		</div><br><div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			</div><br>
		<div id="marker-holder6">
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div>
			<div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div><div id="spacer-lots8">&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			</div><br>
			
	</div>
</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>