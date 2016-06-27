<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2"><b>
					Add New Client
			</b></td>
		</tr>
		<tr>
			<td>
		<form name="form1" method="POST" action="applications/process.php?action=add">
			<table>
					<td>
					Vehicle Owner:
					</td>
					<td>
						<select name="type">
						<?php
						$type = getClientType();
						
						foreach($type as $value){
						?>
						<option value="<?php echo $value['ctype_id'];?>"><?php echo $value['ctype_desc'];?></option>
						<?php
						}
						?>
					</td>
				</tr>
				<tr>
					<td>
						Id Number:
					</td>
					<td>
						<input type="text" name="idnumber" id="idno" size="10" onKeyUp="checkNumber(this.id);"/>
					</td>
				</tr>
				<tr>
					<td><br>
					Name of Applicant:<br>
					</td>
				</tr>
				<tr>
					<td>
						Last: 
					</td>
					<td>
						<input type="text" name="lastname" id="lname" size="30" onKeyUp="checkFieldContain(this.id);" onKeyUp="isNumeric(this.id);"/>
					</td>
				</tr>
				<tr>
					<td>
					First: 
					</td>
					<td>
						<input type="text" name="firstname" id="fname" size="30" onKeyUp="checkFieldContain(this.id);" onKeyUp="isNumeric(this.id);"/>
					</td>
				</tr>
				<tr>
					<td>
					Department/Office:
					</td>
					<td>
						<input type="text" name="department" id="dept" size="20" onKeyUp="checkFieldContain(this.id);" onKeyUp="isNumeric(this.id);"/>
					</td>
				</tr>
				<tr>
					<td>
					City Address:
					</td>
					<td>
						<input type="text" name="city" size="30" id="city" onKeyUp="checkFieldContain(this.id);" onKeyUp="lengthCheck(this.id);"/>
					</td>
				</tr>
				<tr>
					<td>
					Telephone Number:
					</td>
					<td>
						<input type="text" name="telephone" id="telno" size="15" onKeyUp="checkNumber(this.id);"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<input type="submit" name="submit" style="width:75px";"height:70px" align="right" value="Next"/>
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