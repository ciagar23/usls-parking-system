<?php
function checkUser()
{

	//if the session id is not redirect
	//to login page
	
   if(!isset($_SESSION['user']['user_login']))
   {
      header("Location: system/login.php");
	  exit;
   }
}

function processLogin()
{
   $username = $_POST['txtUserName'];
   $password = md5($_POST['txtPassword']);
   
	
      // check the database and see if the username and password combo do match
      $query = "SELECT *
		        FROM tbl_user
				WHERE user_name = '$username' AND user_pswd = '$password' AND user_stat='1'";
      $result = mysql_query($query);
		
      if (mysql_num_rows($result) == 1)
	  {

         $row = mysql_fetch_assoc($result);
			
         $_SESSION['user']['user_login'] = $row['user_id'];
         $_SESSION['user']['user_type'] = $row['utype_id'];
         $_SESSION['user']['user_name'] = $row['user_lname'].', '.$row['user_fname'];
			
		$text = $row['user_id'].'/'.$row['user_lname'].', '.$row['user_fname'].'/'.$row['utype_id'];
		logEntry('6004', $text);
			
         header('Location: ../start.php');
         exit;
      }
	  else
	  {
         $_SESSION['message']['type']='error';
         $_SESSION['message']['content']="Wrong username or password";
         header('Location: ../start.php');
         exit;
      }
}

function getUserType()
{
   $query = "SELECT * FROM tbl_utype";
   $result = mysql_query($query);
	
   while($row = mysql_fetch_assoc($result))
   {
		extract($row);
		$type[] = array('utype_id'=> $utype_id,'utype_code' => $utype_code,'utype_description' => $utype_description);
   }
		
		return $type;
}

function getUserList()
{
		$query = "SELECT * FROM tbl_user WHERE user_stat = '1'";
		$result = mysql_query($query);
		
		while($row = mysql_fetch_assoc($result))
		{
				extract($row);
				$user[] = array('user_id' => $user_id,'utype_id' => $utype_id,'user_name' => $user_name,'user_lname' => $user_lname,'user_fname' => $user_fname);
		}
		
		return $user;
}

function getTypeDescription($utype_id) 
{
	$query = "SELECT * FROM tbl_utype WHERE utype_id = '$utype_id'";
	$result = mysql_query($query);
	
	$row = mysql_fetch_assoc($result);
	
	$desc = $row['utype_description'];
	
	return $desc;
}

function getUserProfile($user_id)
{
	$query = "SELECT * FROM tbl_user WHERE user_id = '$user_id' AND user_stat = '1'";
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$user[] = array('user_id' => $user_id,'utype_id' => $utype_id,'user_name' => $user_name,
		'user_lname' => $user_lname,'user_fname' => $user_fname);
			}
			
			if(empty($user))
			{	
				return false;
			}
			else
			{
				return $user;
			}
		}
		
		function error404()
		{
			$_SESSION['message']['type'] = "warning";
			$_SESSION['message']['content'] = "Invalid user";
		}
		

function userImage($uid) 
{
	$query = "SELECT user_image, user_name FROM tbl_user WHERE user_id = '$uid' AND user_stat = '1'";
	$result = mysql_query($query);
	
	$row = mysql_fetch_assoc($result);
	
	$uimage = '<a href="index.php?page=users&load=upload&uid='.$uid.'"><img src="photos/'.$row['user_image'].'" alt="'.$row['user_name'].'" title="Click to Change Image"/></a>';
	
	return $uimage;
	
}

function getClientType()
{
	$query = "SELECT * FROM tbl_ctype";

	$result = mysql_query($query);

	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type[] = array('ctype_id' => $ctype_id,'ctype_code' => $ctype_code,'ctype_desc' => $ctype_desc);
	}
			
	return $type;		
}

function getViolationList()
{
	$query = "SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id AND v1.client_vio_id = '1'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) >= 1){
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$vio[] = array('client_id'=>$client_id,'client_lname'=>$client_lname,'client_fname'=>$client_fname,'ctype_id'=>$ctype_id,'violation_desc'=>$violation_desc,'violist_tm_added'=>$violist_tm_added,'violist_dt_added'=>$violist_dt_added);
	}
		return $vio;
}else{
	echo "No Violations Recorded at this Moment.";
	exit;
}
}
function getViolationArchivesList()
{

	$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
	
	extract(mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_client WHERE client_id='$search' or client_fname like '%$search%' or client_lname like '%$search%'")));// to extract client
				$client[] = array('client_id'=> $client_id);
	
	$query = "SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id and v1.client_id='$client_id'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) >= 1){
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$vio[] = array('client_id'=>$client_id,'client_lname'=>$client_lname,'client_fname'=>$client_fname,'ctype_id'=>$ctype_id,'violation_desc'=>$violation_desc,'violist_tm_added'=>$violist_tm_added,'violist_date_cleared'=>$violist_date_cleared,'violist_dt_added'=>$violist_dt_added,'client_vio_id'=>$client_vio_id);
	}
		return $vio;
}else{
	echo "No Violations Recorded at this Moment.";
	exit;
}
}
function getViolationListSearch()
{
	$dropdown = (isset($_GET['dropdown']) && $_GET['dropdown'] != '') ? $_GET['dropdown'] : '';
	$query = "SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id AND v1.client_vio_id = '1' 
				AND $dropdown='$search'";
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$vio[] = array('violist_id'=>$violist_id,'client_id'=>$client_id,'client_lname'=>$client_lname,'client_fname'=>$client_fname,'ctype_id'=>$ctype_id,
						'violation_desc'=>$violation_desc,'violist_tm_added'=>$violist_tm_added,'violist_dt_added'=>$violist_dt_added,'client_vio_id'=>$client_vio_id);
	}
		return $vio;
}


function getVioType()
{
	$query = "SELECT * FROM tbl_violation";

	$result = mysql_query($query);

	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type[] = array('client_vio_id' => $client_vioi_id,'client_vio_code' => $clientvio_code,'client_vio_description' => $client_vio_description);
	}
			
	return $type;		
}

function getClientList()
{
$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
	$query = "SELECT * FROM tbl_client WHERE client_stat ='1'";
	
	$result = mysql_query($query);
	 if (mysql_num_rows($result) >= 1)
	  {
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type[] = array('client_id'=> $client_id,'client_dt_added'=>$client_dt_added,'ctype_id'=>$ctype_id,'client_fname'=>$client_fname,'client_lname'=>$client_lname);
	}
	return $type;
}else{
	echo "No Records Found";
	exit;
}
}
function getReportClient($client_id)
{
	$query = "SELECT * FROM tbl_client WHERE client_id='$client_id'";
	
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type1[] = array('ctype_id'=>$ctype_id,'client_fname'=>$client_fname,'client_lname'=>$client_lname);
	}
	return $type1;
}
function getReportList()
{
$from = (isset($_GET['from']) && $_GET['from'] != '') ? $_GET['from'] : '';
$to = (isset($_GET['to']) && $_GET['to'] != '') ? $_GET['to'] : '';
$date = date('Y-m-d');

	$query = "SELECT * FROM tbl_scan WHERE scan_tm_added >='$from' and scan_tm_added <='$to' and scan_stat='1' and scan_dt_added='$date'";
	
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type[] = array('client_id'=> $client_id,'scan_lot'=>$scan_lot,'scan_tm_added'=>$scan_tm_added,'scan_dt_added'=>$scan_dt_added);
	}
	return $type;
}

function getClientListsearch()
{
	$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';

	$query = "SELECT * FROM tbl_client WHERE client_stat='1' AND client_id ='$search' OR client_lname LIKE '%$search%' OR client_fname LIKE '%$search%' ";
	
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$type[] = array('client_id'=> $client_id,'ctype_id'=>$ctype_id,'client_fname'=>$client_fname,'client_lname'=>$client_lname);
	}
	return $type;
}


function getClientId()
{
	$query = "SELECT * FROM tbl_client WHERE client_stat='1'";
	
	$result = mysql_query($query);
	
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$id = $row['client_id'];
	}
	return $id;
}

function getCtypeDescription($ctype_id) 
{
	$query = "SELECT * FROM tbl_ctype WHERE ctype_id = '$ctype_id'";
	$result = mysql_query($query);
	
	$row = mysql_fetch_assoc($result);
	
	$desc = $row['ctype_desc'];
	
	return $desc;
}


function getVioDescriptionMore($client_id) 
{

	$client_id_more = $_GET['cid'];
	$query = "SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id AND c1.client_id = $client_id_more";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$vio[] = array('violation_desc'=>$violation_desc,'violist_tm_added'=>$violist_tm_added,'violist_dt_added'=>$violist_dt_added);
	}	
	return $vio;
}


function getClient($client_id){
	$query = "SELECT * FROM tbl_client WHERE client_id = '$client_id' AND client_stat = '1'";
	$result = mysql_query($query);

	while($row = mysql_fetch_assoc($result)) {
		extract($row);
		$client[] = array('client_id'=> $client_id,'id_num' => $id_num, 'ctype_id' => $ctype_id,'client_lname' => $client_lname,
					'client_fname' => $client_fname,'client_course' => $client_course, 'client_dept' => $client_dept,
					'client_city' => $client_city, 'client_tel' => $client_tel);
	}	
	return $client;	
}
function getCarList($client_id){
	$query = "SELECT * FROM tbl_car WHERE client_id = '$client_id'";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$car[] = array('car_id'=>$car_id,'client_id'=> $client_id,'car_make'=>$car_make,'car_plate'=>$car_plate,'car_color'=>$car_color);
	}	
	return $car;
}
function getCarMake($client_id){
	$query="SELECT c.car_model AS car_model FROM tbl_car AS c, tbl_client AS b WHERE c.client_id = b.client_id AND b.client_id='$client_id'";
	$result=mysql_query($query);
	$row = mysql_fetch_assoc($result);
	extract($row);
	$carmake = $row['car_model'];
	return $carmake;
}	

function getCarPlate($client_id){
	$query="SELECT c.car_plate AS car_plate FROM tbl_car AS c, tbl_client AS b WHERE c.client_id = b.client_id AND b.client_id='$client_id'";
	$result=mysql_query($query);
	$row = mysql_fetch_assoc($result);
	extract($row);
	$carplate = $row['car_plate'];
	return $carplate;
}

function getCarColor($client_id){
	$query="SELECT c.car_color AS car_color FROM tbl_car AS c, tbl_client AS b WHERE c.client_id = b.client_id AND b.client_id='$client_id'";
	$result=mysql_query($query);
	$row = mysql_fetch_assoc($result);
	extract($row);
	$color = $row['car_color'];
	return $color;
}

function getClientProfile($client_id)
{
	$query = "SELECT * FROM tbl_client WHERE client_id = '$client_id' AND client_stat = '1'";
	$result = mysql_query($query);

	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$client[] = array('client_id'=> $client_id,'ctype_id' => $ctype_id,'client_lname' => $client_lname,
					'client_fname' => $client_fname,'client_dept' => $client_dept,
					'client_city' => $client_city, 'client_tel' => $client_tel,'client_image'=>$client_image);
	}	
			
			if(empty($client))
			{	
				return false;
			}
			else
			{
				return $client;
			}

		}
		
		function error405()
		{
			$_SESSION['message']['type'] = "warning";
			$_SESSION['message']['content'] = "Invalid user";
		}
		
function getScanLotInfo($client_id)
{
	$query = "SELECT * FROM tbl_scan WHERE client_id = '$client_id' and scan_stat='1'";
	$result = mysql_query($query);
	

	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$scan[] = array('scan_id'=> $scan_id,'client_id' => $client_id,'scan_dt_added' => $scan_dt_added,
					'scan_tm_added' => $scan_tm_added,'scan_lot' => $scan_lot);
	}	
			
			if(empty($scan))
			{	
				return false;
			}
			else
			{
				return $scan;
			}

		}
		
function getScanLot($client_id) 
{
	$query = "SELECT * FROM tbl_scan WHERE client_id = '$client_id' and scan_stat='1'";
	$result = mysql_query($query);
	
	$row = mysql_fetch_assoc($result);
	
	$lot = $row['scan_lot'];
	
	return $lot;
}
function displayImage($client_id){
	$query = "SELECT client_image, client_id FROM tbl_client WHERE client_id = '$client_id' AND client_stat = '1'";
	$result = mysql_query($query);

	$row = mysql_fetch_assoc($result);
	
	$image = '<a href="index.php?page=applications&load=uploadc&cid='.$client_id.'"><img src="photos/'.$row['client_image'].'" alt="'.$row['client_id'].'" title="Click to Change Image"/></a>';
			
	return $image;	
}
function menuList($nav){
$type = $_SESSION['user']['user_type'];


	// Admin
	if($type == '1002'){
	
		$allow = '	<li><a href="#" title="Applications">Applications</a>
			<ul>
				<li id="menubar"><a href="#" title="Users">Users</a>
					<ul>
						<li id="menubar"><a href="index.php?page=users&load=new" title="Add User">Add User</a></li>
						<li id="menubar"><a href="index.php?page=users&load=view" title="View Users">View User</a></li>
					</ul>
				</li>
				<li id="menubar"><a href="#" title="Clients">Clients</a>
					<ul>
						<li id="menubar"><a href="index.php?page=applications&load=newapp" title="Add Client">Add Client</a></li>
						<li id="menubar"><a href="viewclients.php" title="View Client">View Client</a></li>
					</ul>
				</li>
			</ul>
			</li>	
			
			<li><a href="#" title="Violations">Violations</a>
		      <ul>
				<li id="menubar"><a href="index.php?page=violation&load=newvio" title="Add">Add</a></li>
				<li id="menubar"><a href="Clear.php" title="Clear">Clear</a></li>
				<li id="menubar"><a href="index.php?page=violation&load=viewvio" title="View">View</a></li>
			</ul>
			</li>
				
			<li><a href="#" title="Scan">Map</a>
				<ul>
				<li id="menubar"><a href="#" title="Scan In">Scan In</a>
					<ul>
						<li id="menubar"><a href="gate1scan.php" title="Gate 1">Gate 1</a></li>
						<li id="menubar"><a href="gate2scan.php" title="Gate 2">Gate 2</a></li>
						<li id="menubar"><a href="gate6scan.php" title="Gate 6">Gate 6</a></li>
					</ul>
				</li>
				<li id="menubar"><a href="#" title="Scan Out">Scan Out</a>
					<ul>
						<li id="menubar"><a href="gate1out.php" title="Gate 1">Gate 1</a></li>
						<li id="menubar"><a href="gate2out.php" title="Gate 2">Gate 2</a></li>
						<li id="menubar"><a href="gate6out.php" title="Gate 6">Gate 6</a></li>
					</ul>
				</li>
				<li id="menubar"><a href="#" title="Map">Map</a>
					<ul>
						<li id="menubar"><a href="index.php?page=users&load=disable" title="Disable">Disable Lots</a></li>
						<li id="menubar"><a href="index.php?page=users&load=unable" title="Available">Activate Lots</a></li>
					</ul></li>
			</ul></li>
				<li><a href="index.php?page=violation&load=archivesvio" title="Archive">Archive</a></li>
				<li><a href="reports.php" title="Reports">Reports</a></li>
				<li><a href="statistic.php" title="Statistics">Statistics</a></li>
				<li><a href="system/logout.php" title="Log-Out">Logout</a></li>';
	}
	else
	{
	$allow = '<li><a href="#" title="Scan">Map</a>
				<ul>
				<li id="menubar"><a href="#" title="Scan In">Scan In</a>
					<ul>
						<li id="menubar"><a href="gate1scan.php" title="Gate 1">Gate 1</a></li>
						<li id="menubar"><a href="gate2scan.php" title="Gate 2">Gate 2</a></li>
						<li id="menubar"><a href="gate6scan.php" title="Gate 6">Gate 6</a></li>
					</ul>
				</li>
				<li id="menubar"><a href="#" title="Scan Out">Scan Out</a>
					<ul>
						<li id="menubar"><a href="gate1out.php" title="Gate 1">Gate 1</a></li>
						<li id="menubar"><a href="gate2out.php" title="Gate 2">Gate 2</a></li>
						<li id="menubar"><a href="gate6out.php" title="Gate 6">Gate 6</a></li>
					</ul>
				</li>
			</ul></li>
				<li><a href="reports.php" title="Reports">Reports</a></li>
				<li><a href="statistic.php" title="Statistics">Statistics</a></li>
				<li><a href="system/logout.php" title="Log-Out">Logout</a></li>';
	}
	
	return $allow;
}
function linkUser(){
	$type = $_SESSION['user']['user_type'];
	
	if($type == '11' || $type == '12'){
		$link = '<a href="index.php?page=accounts&load=view">View</a>';
	}
	
	if($type == '13' || $type == '14'){
		$link = '<a href="index.php?page=accounts&load=view">View</a> | <a href="index.php?page=accounts&load=new">Add</a>';
	}
	
	return $link;
}
function logEntry($code_id, $log_text){
	$user_id = $_SESSION['user']['user_login'];
	$query = "INSERT INTO tbl_logs(user_id,code_id,log_text,log_date,log_time)
			VALUES('$user_id','$code_id','$log_text',NOW(),NOW())";
	$result = mysql_query($query) or die(mysql_error());
	
	return;
}

function getCar($client_id){
	$query="SELECT * FROM tbl_car WHERE client_id='$client_id'";
	$result=mysql_query($query);
	if (mysql_num_rows($result) >= 1)
	{
	while($row=mysql_fetch_assoc($result))
	{
		extract($row);
		$car[]=array('car_type'=>$car_type,'car_id'=>$car_id,'client_id'=>$client_id,'car_model'=>$car_model,'car_plate'=>$car_plate,'car_color'=>$car_color);
	}
		if(empty($car))
		{	
			return false;
		}
		else
		{
			return $car;
	}
	}else{
		echo "No Registered Car Found on this client";
		exit;
	}
}


function getCarArchives(){
	$query="SELECT * FROM tbl_car";
	$result=mysql_query($query);
	if (mysql_num_rows($result) >= 1)
	{
	while($row=mysql_fetch_assoc($result))
	{
		extract($row);
		$car[]=array('car_type'=>$car_type,'car_id'=>$car_id,'client_id'=>$client_id,'car_stat'=>$car_stat,'car_model'=>$car_model,'car_plate'=>$car_plate,'car_color'=>$car_color);
	}
		if(empty($car))
		{	
			return false;
		}
		else
		{
			return $car;
	}
	}else{
		echo "No Registered Car Found on this client";
		exit;
	}
}

function showImage($client_id){
	$query = "SELECT client_image, client_id FROM tbl_client WHERE client_id = '$client_id' AND client_stat = '1'";
	$result = mysql_query($query);

	$row = mysql_fetch_assoc($result);
	
	$image = '<img src="photos/'.$row['client_image'].'" alt="'.$row['client_id'].'" title="Image"/ width=100>';
			
	return $image;	
}

function scanEntry($stat_id, $scan_text){
	$client_id = $_SESSION['client']['client_scan'];
	$query = "INSERT INTO tbl_scan(client_id,stat_id,scan_text,scan_date,scan_time)
			VALUES('$client_id','$stat_id','$scan_text',NOW(),NOW())";
	$result = mysql_query($query) or die(mysql_error());
	
	return;
}

function getStatus($id){
	$query = "SELECT * FROM tbl_lots WHERE lot_id = '$id'";
	$result = mysql_query($query);

	$row = mysql_fetch_assoc($result);
		
	$status = $row['lot_status'];
			
	return $status;
}
function getPreference()
{
	$query = "SELECT * FROM tbl_pref";

	$result = mysql_query($query);

	while($row = mysql_fetch_assoc($result))
	{
		extract($row);
		$pref[] = array('pref_id' => $pref_id,'pref_name' => $pref_name);
	}
			
	return $pref;		
}

?>