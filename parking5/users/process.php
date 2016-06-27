<?php
include '../library/config.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action){
	case 'add' :
			add_user();
			break;
	case 'modify' :
			modify_user();
			break;
	case 'delete' :
			delete_user();
			break;
	case 'change' :
			change_pswd();
			break;
	case 'upload' :
		upload_user();
		break;	
	default :
		// if action id not defined or unknown
			// move to main page
			header('Location: ../index.php');
}

function add_user()
{
	$fname = ucwords($_POST['firstname']);
	$lname = ucwords($_POST['lastname']);
	$uname = $_POST['username'];
	$type = $_POST['type'];
	$pswd = $_POST['password'];

		// Check for input fields, return if not complete
		if(empty($fname) || empty($lname) || empty($uname) || empty($pswd)){
					$_SESSION['message']['type']='error';
					$_SESSION['message']['content']="Empty Fields";
						header("Location: ../index.php?page=users&load=new");
						exit;
		}
		
		$pswd = md5($pswd);
		
		$query = "INSERT INTO tbl_user(user_fname,user_lname,user_name,user_pswd,utype_id,user_dt_added,user_tm_added, user_dt_updated,user_tm_updated)

		VALUES('$fname','$lname','$uname','$pswd','$type',NOW(),NOW(),NOW(),NOW())";
		$result = mysql_query($query) or die(mysql_error());
		
		$text = $uname.'/'.$lname.'/'.$fname.'/'.$type;
		logEntry('6007', $text);
		
		$_SESSION['message']['type']="success";
		$_SESSION['message']['content']="User Successfully Added";
			
		header("Location: ../index.php?page=users&load=view");
		exit;
}
function change_pswd()
{
	$oldp = $_POST['pswdold'];
	$newp = $_POST['pswdnew'];
	$conp = $_POST['pswdconfirm'];
	$user_id = $_POST['userid'];
	
	if(empty($oldp) || empty($newp) || empty($conp))
	{
					$_SESSION['message']['type']='error';
					$_SESSION['message']['content']="Complete All Fields";
					header("Location: ../index.php?page=users&load=change&uid=".$user_id);
					exit;
					
	}
	
	$oldp = md5($oldp);
	$newp = md5($newp);
	$conp = md5($conp);
	
	$query = "SELECT * FROM tbl_user WHERE user_pswd = '$oldp' AND user_id = '$user_id'";
	$result = mysql_query($query);
	

	if(mysql_num_rows($result) == 1)
	{
		if($newp==$conp)
		{
			$newp = md5($newp);
			$conp = md5($conp);
			$query="UPDATE tbl_user SET user_pswd='$newp' WHERE user_id='$user_id'";
			mysql_query($query);
		
			$_SESSION['message']['type']='success';
			$_SESSION['message']['content']="Password Successfully Changed";
			header("Location: ../index.php?page=users&load=modify&uid=".$user_id);
		exit;
		}
		else
		{
			$_SESSION['message']['type']='error';
			$_SESSION['message']['content']="Password Did Not Match";
	
			header("Location: ../index.php?page=users&load=change&uid=".$user_id);
			exit;
		}
	}
	$_SESSION['message']['type']='error';
	$_SESSION['message']['content']="Password Verification Error";
	
	header("Location: ../index.php?page=users&load=change&uid=".$user_id);
	exit;
}


function modify_user()
{
$lname = ucwords($_POST['lastname']);
$fname = ucwords($_POST['firstname']);
$uname = $_POST['username'];
$type = $_POST['type'];
$uid = $_POST['userid'];

if(empty($lname) || empty($fname) || empty($uname)){

	$_SESSION['message']['type']='error';
	$_SESSION['message']['content']="Complete all Fields";
	header("Location: ../index.php?page=users&load=modify&uid=".$uid);
	exit;
}

$query = "UPDATE tbl_user SET user_lname='$lname', user_fname='$fname', user_name='$uname', utype_id='$type' WHERE user_id='$uid'";

$result = mysql_query($query) or die (mysql_error());

$text = $uname.'/'.$lname.'/'.$fname.'/'.$type;
logEntry('6005', $text);

$_SESSION['message']['type']='success';
$_SESSION['message']['content']="Profile Information Saved";
header("Location: ../index.php?page=users&load=view");
exit;
}

function delete_user(){
	$uid = $_GET['uid'];
	
	$query = "UPDATE tbl_user SET user_stat = '0' WHERE user_id = '$uid'";
	$result = mysql_query($query) or die (mysql_error());
	
	$text = $uid;
	logEntry('6006', $text);
	
	$_SESSION['message']['type'] = "success";
	$_SESSION['message']['content'] = "User Successfully Deleted";
	
	header("Location: ../index.php?page=users&load=view");
	exit;
	
}

function upload_user()
{
$user_id = $_GET['uid'];

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
		$imagePath = $prefix . $user_id . time().".$ext";
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
			$query = "UPDATE tbl_user SET user_image = '$imagePath' WHERE user_id = '$user_id'";

			$result = mysql_query($query) or die(mysql_error());
		
		
		imagedestroy($image_source);
		
		$_SESSION['message']['type'] = "success";
		$_SESSION['message']['content'] = "Image uploaded successfully";
		header("Location: ../index.php?page=users&load=view&uid=".$user_id);
		exit;
	}else{
		//If upload is not successful, return to view page
		$_SESSION['message']['type'] = "error";
		$_SESSION['message']['content'] = "Error uploading image";
	    header("Location: ../index.php?page=users&load=upload&uid=".$user_id);
		exit;
	}
}

?>

