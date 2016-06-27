<?php $search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
?>
<table id="tbl_form">
<tr>
	<td>
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
				<b>View Clients         <form method="get"  name="frmsearch" id="frmsearch">


			<input name="search" type="text" class="box" size="35" maxlength="100" >
			
			
			
  <input type="submit" value="search" class="box" >
  
  </form></b>
			</td>
		</tr>
		</table>
        
         <?php
		 
		 		if ($search == "")
				{
				
				$owner = getClientList();
				}
			else if (mysql_num_rows(mysql_query("SELECT * FROM tbl_client WHERE client_stat='1' AND client_id ='$search' OR client_lname ='$search' 
						OR client_fname ='$search' OR = '$search'"))==0)
			{
			echo 'No Records Found';
			$owner = getClientList();
			
			}
			else
				{
				$owner = getClientListsearch();
				}
		?>
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
					<a href="javascript: appconfirmation(<?php echo $value['client_id'];?>)"><img src="buttons/deleteicon.png" alt="Delete" title="Delete"/></a>&nbsp;&nbsp;
					<a href="index.php?page=applications&load=viewprof&cid=<?php echo $value['client_id'];?>"><img src="buttons/user-icon.png" alt="View Full Profile" title="View Full Profile"/></a>
					<a href="index.php?page=applications&load=viewcar&cid=<?php echo $value['client_id'];?>"><img src="buttons/car.png" alt="View Cars" title="View Cars"/></a>
					</td>
				</tr>
				<?php
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