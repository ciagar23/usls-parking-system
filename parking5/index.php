<?php
if (!session_start) {
	exit;
}
	include ("library/config.php");
	checkUser();
	
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
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
  <script language="javascript" type="text/javascript" src="js/time.js"></script>
  <link rel="stylesheet" type="text/css" href="css/CalendarControl.css" title="style" />
  <script language="javascript" type="text/javascript" src="js/CalendarControl.js"></script>
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
	  
	  <h3>
			Welcome!&nbsp;<?php
				if(isset($_SESSION['user']['user_name'])){ echo
				$_SESSION['user']['user_name'];}?></li>
		</h3>
        </form>
		
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
		<?php
		if($load == "new"){
			require_once "users/add.php";
		}elseif($load == "view"){
			require_once "users/view.php";
		}elseif($load == "disable"){
			require_once "disablelots/add.php";
		}elseif($load == "unable"){
			require_once "disablelots/avail.php";
		}elseif($load == "modify"){
			require_once "users/modify.php";
		}elseif($load == "change"){
			require_once "users/change.php";
		}elseif($load == "upload"){
			require_once "users/upload.php";
		}elseif($load == "newapp"){
			require_once "applications/new.php";
		}elseif($load == "viewapp"){
			require_once "applications/view.php";
		}elseif($load == "newvio"){
			require_once "violation/new.php";
		}elseif($load == "addvio"){
			require_once "violation/addvio.php";
		}elseif($load == "archivesvio"){
			require_once "violation/archivesvio.php";
		}elseif($load == "archivescars"){
			require_once "applications/archivescars.php";
		}elseif($load == "archivesclients"){
			require_once "applications/archivesclients.php";
		}elseif($load == "viewvio"){
			require_once "violation/view.php";
		}elseif($load == "modifyapp"){
			require_once "applications/modify.php";
		}elseif($load == "scan"){
			require_once "scan/scan.php";
		}elseif($load == "uploadc"){
			require_once "applications/upload.php";
		}elseif($load == "viewprof"){
			require_once "applications/viewprof.php";
		}elseif($load == "car"){
			require_once "applications/car.php";
		}elseif($load == "viewcar"){
			require_once "applications/viewcar.php";
		}elseif($load == "viewviodesc"){
			require_once "violation/viewvio.php";
		}elseif($load == "option"){
			require_once "scan/option.php";
		}elseif($load == "map"){
			require_once "map/gate1.php";
		}elseif($load == "stats"){
			require_once "statistics.php";
		}else{
			require_once "violation/new.php";
		}
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