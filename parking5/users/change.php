<table id="tbl_form">
<tr>
	<td>
	<!--Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
				Modify User Password
			</td>
		</tr>
		</table>
		<table id="tbl_holder">
		<tr>
			<td>
			<form name="form1" method="POST" action="users/process.php?action=change">
				<table id="tbl_newform">
				<tr>
					<td>
					Old Password
					</td>
					<td>
						<input type="password" name="pswdold" size="30"/>
						<input type="hidden" name="userid" value="<?php echo $uid;?>"/>
					</td>
				</tr>
				<tr>
					<td>
					New Password
					</td>
					<td>
						<input type="password" name="pswdnew" size="30"/>
					</td>
				</tr>
				
				<tr>
					<td>
					Confirm Password
					</td>
					<td>
						<input type="password" name="pswdconfirm" size="30"/>
					</td>
				</tr>
				
				<tr>
					<td colspan="2" class="btmblock">
						<input type="submit" name="submit" value="Save Changes"/>
					</td>
				</tr>
				</table>
				</form>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>