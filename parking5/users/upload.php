<table id = "tbl_form">
	<tr>
		<td>
			<!--Markup starts here-->
			<table id = "tbl_formheader">
			<tr>
				<td colspan = "2">
					New User
				</td>
			</tr>
			</table>
			<table id = "tbl_holder">
			<tr>
				<td>
				<form method = "POST" enctype = "multipart/form-data" action = "users/process.php?action=upload&uid=<?php echo $uid;?>">
				<table id = "tbl_newform">
				<tr>
					<td>
					Upload Image
					</td>
					<td>
						<input name = "uploadedfile" type = "file" />
					</td>
				</tr>
				<tr>
					<td colspan = "2">
					Select skip to upload later
					</td>
				</tr>
				<tr>
					<td colspan = "2" class = "btmblock">
						<a href="index.php?page=users&load=view"><input type = "button" name = "skip" value = "Skip" /></a> &nbsp;&nbsp;
						<input type = "submit" name = "submit" value = "Create"/>
					</td>
				</tr>
				</table>
				</form>
			</td>
			</tr>
			</table>
			<!--Markup ends here-->
		</td>
	</tr>
</table>