<table id="tbl_content">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
			Violations
			</td>
		</tr>
		</table>
		<table id="tbl_menublock">
		<tr>
			<td>
			<a href="">View</a> | <a href="index.php?page=violation&load=new">Add</a>
			</td>
		</tr>
		</table>
		<table id="tbl_holder">
		<tr>
			<td>
			<?php
			
			if($load == "new"){
					require_once "new.php";
			}elseif($load == "view"){
					require_once "view.php";
			}
			?>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>