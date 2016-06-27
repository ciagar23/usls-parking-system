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
				<form method = "POST" enctype = "multipart/form-data" action = "applications/process.php?action=upload&cid=<?php echo $cid;?>">
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
						<input type = "submit" name = "submit" value = "Upload"/>
						<a href="index.php?page=applications&load=car&cid=<?php echo $cid;?>"><input type = "button" name = "skip" value = "Skip" /></a> &nbsp;&nbsp;
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