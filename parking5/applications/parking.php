<?php
require_once '../library/config.php';
$pid = addslashes($_GET['pid']);
$u = addslashes($_GET['param']);

if($u != 'default' AND $pid == '0'){
	
	$sql = "SELECT *
			FROM tbl_category
			WHERE cat_pid = '$u' AND cat_stat = '1'
			";
	$result = mysql_query($sql);
		
	echo '		<select name="subcategory" id="subcategory">';
			
			while($row = mysql_fetch_assoc($result))
			{ 
				extract($row);
	echo '			<option value="'.$cat_id.'">'.$cat_name.'j</option> ';				
			}		
	echo '		</select>';
	
	//UPDATED 2.17.2011 FOR MODIFY
}else if($u != 'default' AND $pid != '0'){
	$sc = getSubcat($pid);
	
	$sql = "SELECT *
			FROM tbl_category
			WHERE cat_pid = '$u' AND cat_stat = '1'
			";
	$result = mysql_query($sql);
		
	echo '		<select name="subcategory" id="subcategory">';
			
			while($row = mysql_fetch_assoc($result))
			{ 
				extract($row);
				
				if($cat_id == $sc){ 
					$select = 'selected';
				}else{
					$select = '';
				}
	echo '			<option value="'.$cat_id.'"'.$select.'>'.$cat_name.'k</option> ';				
			}		
	echo '		</select>';

}
?>