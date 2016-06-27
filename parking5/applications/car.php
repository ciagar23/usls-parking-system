
<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_holder">
		<tr>
			<td colspan="2">
					Add Vehicle Information
			</td>
		</tr>
		<tr>
			<td>
			<form name="form1" method="POST" action="applications/process.php?action=car">
				<table id="tbl_newform">
				<tr>
					<td>
						Vehicle Type:					</td>
					<td>
						<input type="radio" name="vtype" value="motorcycle">Motorcycle</input>
						<input type="radio" name="vtype" value="car">Car</input>
						<input type="radio" name="vtype" value="SUV">SUV</input>
						<input type="radio" name="vtype" value="pick-up">Pick-up</input>
					</td>
				</tr>
				<tr>
					<td>
						Plate No.:					</td>
					<td>
						<input type="text" name="plateno" id="pnum" size="6"/>					</td>
				</tr>
				<tr>
					<td>
						Vehicle Model:					</td>
					<td>
						<input type="text" name="vehiclemake" id="vmake" size="15"/>					</td>
				</tr>
				<tr>
					<td>
						Color:					</td>
					<td>
						<input type="text" name="color" id="color" size="10"/>					</td>
				</tr>
				
				<tr>
					<td colspan="2" class="btmblock">
						<input type="hidden" name="carid" value="<?php echo $cid; ?>">
						<input type="submit" name="submit" value="Submit"/>
						<input type="submit" name="cancel" value="Cancel"/>					</td>
				</tr>
				</table>
				</form>				</tr>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>
