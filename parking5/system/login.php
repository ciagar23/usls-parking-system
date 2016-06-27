<?php

require_once '../library/config.php';

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
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">University Of St. La Salle<br>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="logo_colour">Parking Management System</span></a></h1>
		  
        </div>
		<div id="image">
		<img src="../images/logo copy.png" height="150px" width="150px"/>
		</div>
      </div>
      <div id="menubar">
        <ul id="menu2">
				<form method="POST" name="frmLogin" id="frmLogin">
				<tr class="text">
					<td width="40%" align="right" style="color:#000;"><b>Username</b></td>
					<td width="1%" align="center">:</td>
					<td width="59%">
						<input name="txtUserName" type="text" size="20" maxlength="20" style="height:20px">
					</td>
		        </tr>
		        <tr>
					<td width="40%" align="right"><b>Password</b></td>
					<td width="1%" align="center">:</td>
					<td width="59%">
						<input name="txtPassword" type="password" size="20" style="height:20px">
					</td>
		        </tr>
	           <tr>
				<td colspan="3" align="center">
					<input name="btnLogin" type="submit" value="Login" style="width:75px";"height:20px">
				</td>
	           </tr>
			   </form>
			   </ul>
			   </div>
			   <div id="site_content">
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
			<img src="../images/lots.png" width="100%" height="100%"/>		
	</tr>
	</div>
	    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; DEMENTORS 
    </div>
  </div>
</html>

<?php
	unset($_SESSION['message']['type']);
	unset($_SESSION['message']['content']);
?>

