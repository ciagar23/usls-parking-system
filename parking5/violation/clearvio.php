<?php $search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';

	$dropdown = (isset($_GET['dropdown']) && $_GET['dropdown'] != '') ? $_GET['dropdown'] : '';
?>

<table id="tbl_form">
<tr>
	<td>
    
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
            


      
			
			
  
  </form>
			</td>
		</tr>
        

	<table id="tbl_formheader">
		<tr>
			<td colspan="5">
				View Violations
			</td>
		</tr>
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
					Last Name
					</th>
					<th>
					First Name
					</th>
					<th>
					Owner Type
					</th>
					<th>Description
					
					</th>
					<th>Time Filed
					
					</th>
					<th>Date Filed
					
					</th>
                    <th>&nbsp; 
                    </th>
                    
				</tr>
				<?php
				$vio = getViolationList();
				foreach($vio as $value){
				
				$desc = getCtypeDescription($value['ctype_id']);
				
				
				?>
                
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $value['client_lname'];?>
					</td>
					<td>
					<?php echo $value['client_fname'];?>
					</td>
					<td>
					<?php echo $desc;?>
					</td>
					<td>
					<?php echo $value['violation_desc'];?>	
					</td>
					<td>
					<?php echo $value['violist_tm_added'];?>
					</td>
					<td>
					<?php echo $value['violist_dt_added'];?>
					</td>
                    <td>
					<a href="javascript: clearconfirm(<?php echo $value['violist_id'];?>)"><img src="buttons/deleteicon.png" alt="Delete" title="Delete"/></a>&nbsp;&nbsp;
					
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