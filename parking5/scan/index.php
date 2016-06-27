<?php
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
<title>Map</title>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="description" content=""/>
<meta name="author" content=""/>
<meta name="keywords" content=""/>
 <link rel="stylesheet" type="text/css" href="map.css" title="style" />
</head>
<body>
<div id="scan">
<tr>
	<td>
	<!-- Markup starts here-->
		<table>
		<tr>
			<td colspan="2"><b>
					Scan ID
			</b></td>
		</tr>
		
				<form name="form1" method="POST" action="scan/process.php?action=scan">
				<table id="tbl_newform">
				<tr>
					<td>
					Id Number:
					</td>
					<td>
						<input type="text" name="scan" size="30"/>
					</td>
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
</div>
	<div id="picture-holder">
		<div id="spacer-top">&nbsp;
		</div>
		<div id="marker-holder">
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="change.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id2);?>">
			<a href="change.php?id=<?php echo $id2;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id3);?>">
			<a href="change.php?id=<?php echo $id3;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id4);?>">
			<a href="change.php?id=<?php echo $id4;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id5);?>">
			<a href="change.php?id=<?php echo $id5;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id6);?>">
			<a href="change.php?id=<?php echo $id6;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id7);?>">
			<a href="change.php?id=<?php echo $id7;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id8);?>">
			<a href="change.php?id=<?php echo $id8;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id9);?>">
			<a href="change.php?id=<?php echo $id9;?>"></a>
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id10);?>">
			<a href="change.php?id=<?php echo $id10;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id11);?>">
			<a href="change.php?id=<?php echo $id11;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id12);?>">
			<a href="change.php?id=<?php echo $id12;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id13);?>">
			<a href="change.php?id=<?php echo $id13;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id14);?>">
			<a href="change.php?id=<?php echo $id14;?>"></a>
			</div>
		</div><br><br><br>
		<div id="marker-holder1">
			<div id="block" class="<?php echo "mark".getStatus($id20);?>">
			<a href="change.php?id=<?php echo $id20;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id38);?>">
			<a href="change.php?id=<?php echo $id38;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id49);?>">
			<a href="change.php?id=<?php echo $id49;?>"></a>
			</div>
		</div><br>
		<div id="spacer-top1">
		&nbsp;
		</div>
		<div id="marker-holder2">
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id15);?>">
			<a href="change.php?id=<?php echo $id15;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id21);?>">
			<a href="change.php?id=<?php echo $id21;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id29);?>">
			<a href="change.php?id=<?php echo $id29;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id33);?>">
			<a href="change.php?id=<?php echo $id33;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id39);?>">
			<a href="change.php?id=<?php echo $id39;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id46);?>">
			<a href="change.php?id=<?php echo $id46;?>"></a>
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id50);?>">
			<a href="change.php?id=<?php echo $id50;?>"></a>
			</div>
		</div><br>
		<div id="spacer-top1">
		&nbsp;
		</div>
		<div id="marker-holder2">
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id16);?>">
			<a href="change.php?id=<?php echo $id16;?>"></a>
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id22);?>">
			<a href="change.php?id=<?php echo $id22;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id30);?>">
			<a href="change.php?id=<?php echo $id30;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id34);?>">
			<a href="change.php?id=<?php echo $id34;?>"></a>
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id40);?>">
			<a href="change.php?id=<?php echo $id40;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id47);?>">
			<a href="change.php?id=<?php echo $id47;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id51);?>">
			<a href="change.php?id=<?php echo $id51;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id57);?>">
			<a href="change.php?id=<?php echo $id57;?>"></a>
			</div>
		</div><br>
		<div id="spacer-top1">
		&nbsp;
		</div>
		<div id="marker-holder2">
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id17);?>">
			<a href="change.php?id=<?php echo $id17;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id23);?>">
			<a href="change.php?id=<?php echo $id23;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id31);?>">
			<a href="change.php?id=<?php echo $id31;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id35);?>">
			<a href="change.php?id=<?php echo $id35;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id41);?>">
			<a href="change.php?id=<?php echo $id41;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id48);?>">
			<a href="change.php?id=<?php echo $id48;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id52);?>">
			<a href="change.php?id=<?php echo $id52;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id58);?>">
			<a href="change.php?id=<?php echo $id58;?>"></a>
			</div>
		</div><br>
		<div id="marker-holder2">
			<div id="spacer-top1">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id18);?>">
			<a href="change.php?id=<?php echo $id18;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id24);?>">
			<a href="change.php?id=<?php echo $id24;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id32);?>">
			<a href="change.php?id=<?php echo $id32;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id36);?>">
			<a href="change.php?id=<?php echo $id36;?>"></a>
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id42);?>">
			<a href="change.php?id=<?php echo $id42;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id53);?>">
			<a href="change.php?id=<?php echo $id53;?>"></a>
			</div>
			<div id="spacer-lots4">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id59);?>">
			<a href="change.php?id=<?php echo $id59;?>"></a>
			</div>
		</div><br>
		<div id="spacer-top2">
		&nbsp;
		</div>
		<div id="marker-holder2">
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id19);?>">
			<a href="change.php?id=<?php echo $id19;?>"></a>
			</div>
			<div id="spacer-lots5">
			&nbsp;
			</div>
			<div id="spacer-lots3">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id25);?>">
			<a href="change.php?id=<?php echo $id25;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots4">
			&nbsp;
			</div>
			<div id="spacer-lots4">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id43);?>">
			<a href="change.php?id=<?php echo $id43;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id54);?>">
			<a href="change.php?id=<?php echo $id54;?>"></a>
			</div>
		</div><br>
		<div id="marker-holder1">
			<div id="spacer-top1">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id26);?>">
			<a href="change.php?id=<?php echo $id26;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id44);?>">
			<a href="change.php?id=<?php echo $id44;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id55);?>">
			<a href="change.php?id=<?php echo $id55;?>"></a>
			</div>
		</div><br>
		<div id="marker-holder1">
			<div id="spacer-top2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id27);?>">
			<a href="change.php?id=<?php echo $id27;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id37);?>">
			<a href="change.php?id=<?php echo $id37;?>"></a>
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id45);?>">
			<a href="change.php?id=<?php echo $id45;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id56);?>">
			<a href="change.php?id=<?php echo $id56;?>"></a>
			</div><br>
			<div id="spacer-top2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id28);?>">
			<a href="change.php?id=<?php echo $id28;?>"></a>
			</div>
		</div><br><br><br>
		<div id="marker-holder4">
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id60);?>">
			<a href="change.php?id=<?php echo $id60;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id61);?>">
			<a href="change.php?id=<?php echo $id61;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id62);?>">
			<a href="change.php?id=<?php echo $id62;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id63);?>">
			<a href="change.php?id=<?php echo $id63;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id64);?>">
			<a href="change.php?id=<?php echo $id64;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id65);?>">
			<a href="change.php?id=<?php echo $id65;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id66);?>">
			<a href="change.php?id=<?php echo $id66;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id67);?>">
			<a href="change.php?id=<?php echo $id67;?>"></a>
			</div>
			<div id="spacer-top4">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id68);?>">
			<a href="change.php?id=<?php echo $id68;?>"></a>
			</div>
			<div id="spacer-lots1">
			&nbsp;
			</div>
			<div id="spacer-lots6">
			&nbsp;
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id69);?>">
			<a href="change.php?id=<?php echo $id69;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id70);?>">
			<a href="change.php?id=<?php echo $id70;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id71);?>">
			<a href="change.php?id=<?php echo $id71;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id72);?>">
			<a href="change.php?id=<?php echo $id72;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id73);?>">
			<a href="change.php?id=<?php echo $id73;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id74);?>">
			<a href="change.php?id=<?php echo $id74;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id75);?>">
			<a href="change.php?id=<?php echo $id75;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id76);?>">
			<a href="change.php?id=<?php echo $id76;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id77);?>">
			<a href="change.php?id=<?php echo $id77;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id78);?>">
			<a href="change.php?id=<?php echo $id78;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id79);?>">
			<a href="change.php?id=<?php echo $id79;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id80);?>">
			<a href="change.php?id=<?php echo $id80;?>"></a>
			</div>
			<div id="spacer-lots2">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id81);?>">
			<a href="change.php?id=<?php echo $id81;?>"></a>
			</div>
			</div><br>
		<div id="marker-holder6">
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id95);?>">
			<a href="change.php?id=<?php echo $id95;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id94);?>">
			<a href="change.php?id=<?php echo $id94;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id93);?>">
			<a href="change.php?id=<?php echo $id93;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id92);?>">
			<a href="change.php?id=<?php echo $id92;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id91);?>">
			<a href="change.php?id=<?php echo $id91;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id90);?>">
			<a href="change.php?id=<?php echo $id90;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id89);?>">
			<a href="change.php?id=<?php echo $id89;?>"></a>
			</div>
			<div id="spacer-top9">
			&nbsp;
			</div>
			<div id="spacer-lots7">
			&nbsp;
			</div>
			<div id="block1" class="<?php echo "mark".getStatus($id88);?>">
			<a href="change.php?id=<?php echo $id88;?>"></a>
			</div>
		<div id="marker-holder5">
			<div id="block1" class="<?php echo "mark".getStatus($id82);?>">
			<a href="change.php?id=<?php echo $id82;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id83);?>">
			<a href="change.php?id=<?php echo $id83;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id84);?>">
			<a href="change.php?id=<?php echo $id84;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id85);?>">
			<a href="change.php?id=<?php echo $id85;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id86);?>">
			<a href="change.php?id=<?php echo $id86;?>"></a>
			</div><br>
			<div id="block" class="<?php echo "mark".getStatus($id87);?>">
			<a href="change.php?id=<?php echo $id87;?>"></a>
			</div>
			</div><br>
		</div>
	</div>

</body>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>