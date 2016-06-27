<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	case 'add' :
		add_app();
		break;
	case 'modify' :
		modify_app();
		break;	
	case 'delete' :
		delete_app();
		break;
	case 'car' :
		add_car();
		break;
	case 'delcar' :
		delete_car();
		break;
	case 'upload' :
		upload_client();
		break;
	default :
	    // if action is not defined or unknown
		// move to main  page
		header("Location: ../index.php");
}

function add_app(){
$fname = ucwords($_POST['firstname']);
$lname = ucwords($_POST['lastname']);
$idnum = $_POST['idnumber'];
$city = ucwords($_POST['city']);
$tel = $_POST['telephone'];
$dept = ucwords($_POST['department']);
$ctype = $_POST['type'];


	// Check for input fields, return if not complete
	if(empty($idnum) || empty($fname) || empty($lname)){
	$_SESSION['message']['type'] = "error";
	$_SESSION['message']['content'] = "Complete all fields";
			header("Location: ../index.php?page=applications&load=newapp");
			exit;
			
	}
	$query = "INSERT INTO tbl_tempclient (ctype_id,client_id,client_fname,client_lname,client_dept,client_city,client_tel,
			client_dt_added,client_tm_added,client_dt_updated,client_tm_updated)
			VALUES('$ctype','$idnum','$fname','$lname','$dept','$city','$tel',NOW(),NOW(),NOW(),NOW())";
	

	$result = mysql_query($query) or die(mysql_error());
	
	header("Location: ../index.php?page=applications&load=uploadc&cid=".$idnum);
	exit;
}

function add_car(){
$carmake = ucwords($_POST['vehiclemake']);
$carplate = ucwords($_POST['plateno']);
$carcolor = ucwords($_POST['color']);
$vtype = $_POST['vtype'];
$carid = $_POST['carid'];

	$checktemp = mysql_query("SELECT * FROM tbl_tempclient");
	if (mysql_num_rows($checktemp) == 1)
	{
		
	extract(mysql_fetch_assoc(mysql_query("SELECT * FROM tbl_tempclient WHERE client_id='$carid'")));// to extract client
				$client[] = array('client_id'=> $client_id,'ctype_id' => $ctype_id,'client_lname' => $client_lname,
					'client_fname' => $client_fname,'client_dept' => $client_dept,
					'client_city' => $client_city, 'client_tel' => $client_tel,'client_image'=>$client_image);
		
	
	$clientquery = "INSERT INTO tbl_client (ctype_id,client_id,client_fname,client_lname,client_dept,client_city,client_tel,
			client_dt_added,client_tm_added,client_dt_updated,client_tm_updated,client_image)
			VALUES('$ctype_id','$client_id','$client_fname','$client_lname','$client_dept','$client_city','$client_tel',NOW(),NOW(),NOW(),NOW(),'$client_image')";
	
	$result2 = mysql_query($clientquery) or die(mysql_error());
	
	}
	else
	{
	}
// Check for input fields, return if not complete
	if(empty ($carmake) || empty ($carplate) || empty ($carcolor)){
	
	$_SESSION['message']['type'] = "error";
	$_SESSION['message']['content'] = "Complete all fields";
			header("Location: ../index.php?page=applications&load=car");
			exit;
	}
	$query = "INSERT INTO tbl_car(client_id,car_model,car_plate,car_color,car_type,car_dt_added,car_tm_added)
			VALUES('$carid','$carmake','$carplate','$carcolor','$vtype', NOW(), NOW())";	
	$result = mysql_query($query) or die(mysql_error());	

	// Retrieve last ID inserted
	$client_id = mysql_insert_id();
	
	
	$result3 = mysql_query("DELETE FROM tbl_tempclient") or die (mysql_error()); 
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['content'] = "New Client Added";
	header("Location: ../index.php?page=applications&load=viewapp&cid=".$client_id);
	exit;
}

function modify_app()
{
$fname = ucwords($_POST['firstname']);
$lname = ucwords($_POST['lastname']);
$city = ucwords($_POST['city']);
$tel = $_POST['telephone'];
$dept = ucwords($_POST['department']);
$ctype = $_POST['type'];
$cid = $_POST['clientid'];

// Check for input fields, return if not complete
	if (empty($fname) || empty($lname)){
	$_SESSION['message']['type'] = "error";
	$_SESSION['message']['content'] = "Complete all fields";
			header("Location: ../index.php?page=applications&load=modifyapp&cid=".$cid);
			exit;
}

$query = "UPDATE tbl_client SET ctype_id='$ctype',client_fname='$fname',client_lname='$lname',
			client_dept='$dept',client_city='$city',client_tel='$tel' WHERE client_id='$cid'";
			
$result = mysql_query($query) or die (mysql_error());

$_SESSION['message']['type']='success';
$_SESSION['message']['content']="Profile Information Saved";
header("Location: ../index.php?page=applications&load=viewprof&cid=".$cid);
exit;
}

function delete_app(){
	$cid = $_GET['cid'];
	
	$query = "UPDATE tbl_client SET client_stat = '0' WHERE client_id = '$cid'";
	$result = mysql_query($query) or die (mysql_error());
	
	$query2 = "DELETE FROM tbl_car WHERE client_id = '$cid'";
	$result2 = mysql_query($query2) or die (mysql_error()); 
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['content'] = "Client Successfully Deleted";
	header("Location: ../viewclients.php");
	exit;
	
}

function delete_car(){
	$carid=$_GET['carid'];
	
	$query = "DELETE FROM tbl_car WHERE car_plate = '$carid'";
	$result=mysql_query($query) or die (mysql_error());
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['type'] = "Vehicle has been removed";
	header("Location: ../viewclients.php");
	exit;
}

function upload_client()
{
$client_id = $_GET['cid'];

	// Where the file is going to be placed or stored
	$target_path = "../photos/";

	// Where the file is going to be placed 
	$target_path = $target_path . basename($_FILES['uploadedfile']['name']); 

	//Check if the file being uploaded is of type JPEG,GIF,BMP or PNG, else send am error message
	if(($_FILES["uploadedfile"]["type"] == "image/jpeg" || $_FILES["uploadedfile"]["type"] == "image/pjpeg" || $_FILES["uploadedfile"]["type"] == "image/gif" || $_FILES["uploadedfile"]["type"] == "image/png") && ($_FILES["uploadedfile"]["size"] < 4000000))
	{
		$max_upload_width = 210;// 500
		$max_upload_height = 210;//357
		
		// if uploaded image was JPG/JPEG
		if($_FILES["uploadedfile"]["type"] == "image/jpeg" || $_FILES["uploadedfile"]["type"] == "image/pjpeg"){	
			$image_source = imagecreatefromjpeg($_FILES["uploadedfile"]["tmp_name"]);
		}		
		// if uploaded image was GIF
		if($_FILES["uploadedfile"]["type"] == "image/gif"){	
			$image_source = imagecreatefromgif($_FILES["uploadedfile"]["tmp_name"]);
		}	
		// BMP doesn't seem to be supported so remove it form above image type test (reject bmps)	
		// if uploaded image was BMP
		if($_FILES["uploadedfile"]["type"] == "image/bmp"){	
			$image_source = imagecreatefromwbmp($_FILES["uploadedfile"]["tmp_name"]);
		}			
		// if uploaded image was PNG
		if($_FILES["uploadedfile"]["type"] == "image/png"){
			$image_source = imagecreatefrompng($_FILES["uploadedfile"]["tmp_name"]);
		}
		
		/**	 Gets the file extension of the current file **/
		$ext = substr(strrchr($_FILES["uploadedfile"]['name'], "."), 1);
		
		//  Create a new filename for the image using the product id
		$prefix = 'p';
		$imagePath = $prefix . $client_id . time().".$ext";
		$target_path = "../photos/".$imagePath;
		
		//imagejpeg — Output image to browser or file
		imagejpeg($image_source,$target_path,100);
		
		//chmod — Changes file mode  (for servers running in linux)
		chmod($target_path,0644);
		
		// get width and height of original image
		list($image_width, $image_height) = getimagesize($target_path);
		
		
		//Check if image size is greater than limit
		if($image_width > $max_upload_width || $image_height > $max_upload_height){
			
			$proportions = $image_width/$image_height;
			
			if($image_width > $image_height){
				$new_width = $max_upload_width;
				$new_height = floor( $image_height * ($max_upload_width / $image_width) );
			}else{
				$new_height = $max_upload_height;
				$new_width = round($max_upload_height * $proportions);
			}		
			
			// Create new image
			$new_image = imagecreatetruecolor($new_width , $new_height);
			$image_source = imagecreatefromjpeg($target_path);
			
			imagecopyresampled($new_image, $image_source, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height);
			imagejpeg($new_image,$target_path,100);
			
			imagedestroy($new_image);
		}	
			$query = "UPDATE tbl_tempclient SET client_image = '$imagePath' WHERE client_id = '$client_id'";

			$result = mysql_query($query) or die(mysql_error());
		
		imagedestroy($image_source);
		
		$_SESSION['message']['type'] = "success";
		$_SESSION['message']['content'] = "Image uploaded successfully";
		header("Location: ../index.php?page=applications&load=car&cid=".$client_id);
		exit;
	}else{
		//If upload is not successful, return to view page
		$_SESSION['message']['type'] = "error";
		$_SESSION['message']['content'] = "Error uploading image";
	    header("Location: ../index.php?page=applications&load=uploadc&cid=".$client_id);
		exit;
	}
}

?>


	
	
