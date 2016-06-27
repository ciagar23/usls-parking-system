<table id="tbl_form">
<tr>
	<td>
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
				View Owners
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
					Lastname
					</th>
					<th>
					Middle Name
					</th>
					<th>
					Firstname
					</th>
					<th>
					ID Number
					</th>
					<th>
					Course
					</th>
					<th>
					Department/Office
					</th>
					<th>
					&nbsp;
					</th>
				</tr>
				<?php
				$owner = getOwnerList();
				foreach($owner as $value){
				
				?>
				<tr>
					<td>
					<?php echo $value['reg_lname'];?>
					</td>
					<td>
					<?php echo $value['reg_mname'];?>
					</td>
					<td>
					<?php echo $value['reg_fname'];?>
					</td>
					<td>
					<?php echo $value['id_num'];?>
					</td>
					<td>
					<?php echo $value['reg_course'];?>
					</td>
					<td>
					<?php echo $value['reg_dept'];?>
					</td>
					<td>
					Modify | Delete
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