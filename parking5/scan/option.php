<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_holder">
		<tr>
			<td rowspan="8" id="image_holder">
			<?php
			echo showImage($cid);
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
					Parking Lot Number
					</td>
					<td class="client_value">
					<?php
					echo getScanLot($value['client_id']);
					?>
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
<!--<script language="javascript">

window.print()
window.close()
window.location ='option.php'; -->



</script>
