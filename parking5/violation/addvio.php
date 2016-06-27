<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_holder">
		<tr>
			<td colspan="2"><b>			<?php $client = $_GET['cid']; ?>
					Add Violation to <?php echo $client; ?>
			</b></td>
		</tr>
		<tr>
			<td>

			<form name="form1" method="POST" action="violation/process.php?action=addvio&client_id=<?php echo $client;  ?>">
				<table id="tbl_newform">
				<tr>
				<td>
					Description: 
					</td>
					<td>
						<select name="type">
						<option>Parking on Reserved Area</option>
						<option>Blocking the Driveway</option>
						<option>Double Parking</option>
						<option>Wrong Parking</option>
						<option>Violating the ParKing Sign</option>
						<option>Reckless Driving</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<input type="hidden" name="violistid" value="<?php echo $vid; ?>">
						<input type="submit" name="submit" value="Submit"/>
						<input type="submit" name="cancel" value="Cancel"/>
					</td>
				</tr>
				</table>
				</form>
				</tr>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>