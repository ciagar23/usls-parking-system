<?php $search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
?>

<table id="tbl_form">
<tr>
	<td>
    
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
            


            <form action="index.php?page=violation&load=newvio" method="get"  name="frmsearch" id="frmsearch">


			<input name="search" type="text" class="box" size="35" maxlength="100" >
			
			
			
  <input type="submit" value="search" class="box" >
  
  </form>
			</td>
		</tr>
        
 <?php if ($search == "")
 	{
	echo "Please search ID number";
	}
	else if (mysql_num_rows(mysql_query("SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id AND v1.client_vio_id = '1' 
				AND c1.client_fname LIKE '%$search%' OR v1.client_id = '$search' OR c1.client_lname LIKE '%$search%'"))==0)
	{
	echo 'No Records Found';
	}
	else
	{
	?>
		</table>
		<table id="tbl_holder">
		<tr>
			<td>
			<!--Place tables here-->
				<table id="tbl_newform">
				<tr>
					<th>
					ID Number
					</th>
					<th>
					First Name
					</th>
					<th>
					Last Name
					</th>
					<th>
					Vehicle Owner
					</th>
					<th>&nbsp;
					
					</th>
				</tr>
				<?php
				
				$owner = getClientListsearch();
				foreach($owner as $value){
				
				$desc = getCtypeDescription($value['ctype_id']);
				
				
				
				?>
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $value['client_fname'];?>
					</td>
					<td>
					<?php echo $value['client_lname'];?>
					</td>
					<td>
					<?php echo $desc;?>
					</td>
					<td>
					<a href="index.php?page=violation&load=addvio&cid=<?php echo $value['client_id'];?>"><img src="buttons/add1.png" alt="Add Violation" title="Add Violation"/></a>
					</td>
				</tr>
				<?php
				}
				}
				?>
				</table>
                
               
				<!--Place tables here-->
			</td>
		</tr>
		</table>
	<!--Markup ends here-->
	</td>
</tr>
</table>