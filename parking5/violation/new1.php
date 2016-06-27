<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
	<table id="tbl_formheader">
		<tr>
			<td colspan="2"><b>
					Violations
			</b></td>
		</tr>
		<tr>
			<td>
			<form name="form1" method="POST" action="violation/process.php?action=add">
				<table id="tbl_newform">
				<tr>
				<td>
					Name:<br>
				</td>
				</tr>
				<tr>
					<td>
						Last: 
					</td>
					<td><input type="text" name="lname" size="20"/></td>
				</tr>
				<tr>
					<td>
						First: 
					</td>
					<td><input type="text" name="fname" size="25"/></td>
				</tr>
				<tr>
					<td>
						Middle: 
					</td>
					<td><input type="text" name="mname" size="20"/></td>
				</tr>
				<tr>
					<td>
						Id Number:
					</td>
					<td>
						<input type="text" name="id_num" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						Vehicle Make:
					</td>
					<td>
						<input type="text" name="prod_name" size="20"/>
					</td>
				</tr>
				<tr>
					<td>
						Plate No.:
					</td>
					<td>
						<input type="text" name="prod_name" size="15"/>
					</td>
				</tr>
				<tr>
					<td>
						Sticker Number:
					</td>
					<td>
						<input type="text" name="prod_name" size="15"/>
					</td>
				</tr>
				<tr>
					<td>
					Location:
					</td>
					<td><input type="text" name="course" size="10"/></td>
					<td>
					Time:
					</td>
					<td><input type="text" name="year" size="10"/></td>
				</tr>
				<tr>
					<td><br>
					Violations:<br>
					</td>
				</tr>
				<tr>
					<td>
					Parking on Reserved Area
					</td>
					<td>
						<input type="checkbox" name="vio1"/>
					</td>
				</tr>
				<tr>
					<td>
					Blocking the Driveway/Exit
					</td>
					<td>
						<input type="checkbox" name="vio2"/>
					</td>
				</tr>
				<tr>
					<td>
					Double Parking
					</td>
					<td>
						<input type="checkbox" name="vio3"/>
					</td>
				</tr>
				<tr>
					<td>
					Wrong Parking
					</td>
					<td>
						<input type="checkbox" name="vio4"/>
					</td>
				</tr>
				<tr>
					<td>
					Violating the Parking Sign
					</td>
					<td>
						<input type="checkbox" name="vio5"/>
					</td>
				</tr>
				<tr>
					<td>
					Reckless Driving
					</td>
					<td>
						<input type="checkbox" name="vio6"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
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