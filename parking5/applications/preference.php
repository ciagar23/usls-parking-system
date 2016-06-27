<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_holder">
		<tr>
			<td colspan="2"><b>
					Choose Parking Preference
			</b></td>
		</tr>
		<tr>
			<td>
			<form name="form1" method="POST" action="applications/process.php?action=pref">
				<table id="tbl_newform">
				<tr>
					<td>
						<input type="radio" name="frontcoli" value="<?php echo getPreference['pref_name'];?>">Coliseum (Front)
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="backcoli" value="<?php echo getPreference['pref_name'];?>">Coliseum (Back)
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="gate2" value="<?php echo getPreference['pref_name'];?>">Gate 2
					</td>
				</tr>
				<tr>
					<td>
					<input type="radio" name="blayk" value="<?php echo getPreference['pref_name'];?>">Balay Kalinungan
					</td>
				</tr>
				<input type="hidden" name="clientid" value="<?php echo $cid; ?>">
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