<?php
$id1 = 101;
$id2 = 102;
//http://www.google.com/ig/api?weather=Bacolod+City
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Gate 1</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/map.css" title="style" />
</head>
<body>
	<div id="picture-holder">
		<div id="spacer-top">&nbsp;
		</div>
		<div id="marker-holder">
			<div id="block" class="<?php echo "mark".getStatus($id1);?>">
			<a href="process.php?id=<?php echo $id1;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id2);?>">
			<a href="process.php?id=<?php echo $id2;?>"></a>
			</div>
			<div id="spacer-lots">
			&nbsp;
			</div>
			<div id="block" class="<?php echo "mark".getStatus($id2);?>">
			<a href="process.php?id=<?php echo $id2;?>"></a>
			</div>
		</div>
	</div>
</body>
</html>