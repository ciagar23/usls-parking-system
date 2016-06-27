<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table>
		<tr>
			<td colspan="2">
				<b>Vehicle Information</b>
			</td>
		</tr>
		</table>
		<table>
		<tr>
			<td>
			<?php
			$car = '0';
			$car = getCar($cid);
			foreach($car as $value){
			?>
				<table>
				<tr>
					<td class="client_label">
					Vehicle Type:
					</td>
					<td class="client_value">
					<?php echo $value['car_type'];?>
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Vehicle Plate Number:
					</td>
					<td class="client_value">
					<?php echo $value['car_plate'];?>
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Vehicle Model:
					</td>
					<td class="client_value">
					<?php echo $value['car_model'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Vehicle Color:
					</td>
					<td class="client_value">
					<?php echo $value['car_color'];?>	
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<input type="hidden" name="carid" value="<?php echo $cid; ?>">
						<a href="index.php?page=applications&load=car&cid=<?php echo $value['client_id'];?>"><img src="buttons/add.png" alt="Add Car" title="Add Car"/></a>
						<a href="applications/process.php?action=delcar&carid=<?php echo $value['car_plate'];?>"><img src="buttons/deleteicon.png" alt="Delete" title="Delete"/></a>
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