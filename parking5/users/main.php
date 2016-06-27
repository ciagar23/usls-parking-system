<table id="tbl_content">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
			User Accounts
			</td>
		</tr>
		</table>
		<table id="tbl_menublock">
		<tr>
			<td>
			<a href="index.php?page=users&load=view">View</a> | <a href="index.php?page=users&load=new">Add</a> | Search
			</td>
		</tr>
		</table>
		<table id="tbl_holder">
		<tr>
			<td>
			<?php
			if($load == "new"){
				require_once "add.php";
			}
			elseif($load == "view"){
					require_once "view.php";
			}
			elseif($load == "modify"){
					require_once "modify.php";
			}
			elseif($load == "change"){
					require_once "change.php";
			}elseif($load == "upload"){
					require_once "users/upload.php";
			}
			?>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>