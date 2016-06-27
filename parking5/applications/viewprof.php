<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
				<b>Client Information</b>
			</td>
		</tr>
		</table>
		<table id="tbl_holder">
		<tr>
			<td rowspan="8" id="image_holder">
			<?php
			echo displayImage($cid);
			?>
			</td>
		</tr>
		<tr>
			<td id="data_holder">
			<?php
			$client = '0';
			$client = getClientProfile($cid);
			foreach($client as $value){
			?>
				<table id="tbl_client">
				<tr>
					<td class="client_label">
					ID Number
					</td>
					<td class="client_value">
					<?php echo $value['client_id'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Vehicle Owner
					</td>
					<td class="client_value">
					<?php
					echo getCtypeDescription($value['ctype_id']);
					?>
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Last Name
					</td>
					<td class="client_value">
					<?php echo $value['client_lname'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					First Name
					</td>
					<td class="client_value">
					<?php echo $value['client_fname'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Department/Office
					</td>
					<td class="client_value">
					<?php echo $value['client_dept'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					City Address
					</td>
					<td class="client_value">
					<?php echo $value['client_city'];?>	
					</td>
				</tr>				
				<tr>
					<td class="client_label">
					Telephone Number
					</td>
					<td class="client_value">
					<?php echo $value['client_tel'];?>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<a href="index.php?page=applications&load=modifyapp&cid=<?php echo $value['client_id'];?>"><img src="buttons/edit.png" alt="Update" title="Update"/></a>
					</td>
				</tr>
				</table>
				<?php
				}
				?>
				
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>