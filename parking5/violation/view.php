<table id="tbl_form">
<tr>
	<td>
	<!--MarkUp starts here-->
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