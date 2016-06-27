<?php
if (!session_start) {
	exit;
}
	include ("library/config.php");
	checkUser();
	
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$msg   = (isset($_GET['msg']) && $_GET['msg'] != '') ? $_GET['msg'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>USLS | Parking Management System</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style2.css" title="style" />
  <script language="javascript" type="text/javascript" src="js/script.js"></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="start.php">University Of St. La Salle<br>
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="logo_colour">Parking Management System</span></a></h1>
		  
        </div>
		<div id="image">
		<img src="images/logo copy.png" height="150px" width="150px"/>
		</div>
      </div>
      <div id="menubar">
        <ul id="menu">
			<?php echo menuList('app');?>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
	  <h4 align="right"><a href="system/logout.php">Log Out</a></h4>
	  <h3>
			Welcome!&nbsp;<?php
				if(isset($_SESSION['user']['user_name'])){ echo
				$_SESSION['user']['user_name'];}?></li>
		</h3>
		
		<!-- insert your sidebar items here -->
        
      </div>
      <div id="content">
        <?php
		
		if((isset($_SESSION['message']['type']) && $_SESSION['message']['type'] != '') 
		&& isset($_SESSION['message']['content']) && $_SESSION['message']['content'] != '')
		{
		?>
			<div class="<?php echo $_SESSION['message']['type'];?>" id="message_box">
				<?php echo $_SESSION['message']['content'];?>
			</div>
		<?php
		}
		?>
		
		<center><?php echo $msg; ?></center>
        <?php
			require_once "violation/clearvio.php";
		
		?>
      </div>
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