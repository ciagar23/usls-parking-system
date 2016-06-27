<?php

require_once '../library/config.php';
require_once '../library/functions.php';

if(isset($_SESSION['user']['user_login'])){
	header("Location: ../index.php");
	exit;
}

if(isset($_POST['txtUserName'])){
	$result=processLogin();
}
?>
<html>
<head>
  <title>USLS | Parking Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="../css/style2.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University Of St. La Salle<br>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="logo_colour">Parking Management System</span></a></h1>
		  
        </div>
		<div id="image">
		<img src="../images/logo copy.png" height="150px" width="150px"/>
		</div>
      </div>
		
      </div>
      <div id="content">
        
			<table id="tbl_login" align="center">
				<form method="POST" name="frmLogin" id="frmLogin">
				<tr class="text">
					<td width="40%" align="right"><b>Username</b></td>
					<td width="1%" align="center">:</td>
					<td width="59%">
						<input name="txtUserName" type="text" size="20" maxlength="20">
					</td>
		        </tr>
		        <tr>
					<td width="40%" align="right"><b>Password</b></td>
					<td width="1%" align="center">:</td>
					<td width="59%">
						<input name="txtPassword" type="password" size="20">
					</td>
		        </tr>
	           <tr>
				<td colspan="3" align="center">
					<input name="btnLogin" type="submit" value="Login">
				</td>
	           </tr>
			   <?php
		if((isset($_SESSION['message']['type']) && $_SESSION['message']['type'] != '')
			&& isset($_SESSION['message']['content']) && $_SESSION['message']['content'] != '') {
				?>
						<div class="<?php echo $_SESSION['message']['type'];?>" id="message_box">
								<?php echo $_SESSION['message']['content'];?>
						</div>
					<?php
					}
					?>
				</form> 
				<tr>
			</table>
		</td>
	</tr>
	</tr>
	<tr>
		<td>
		<p>&nbsp;</p> 
		<p>&nbsp;</p>	
		<p align="center" class="con_ftext"><? echo $footer_name ;?></p>
		</td>
	</tr>
</table>
      </div>

</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>

