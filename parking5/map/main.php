<table id="tbl_content">
<tr>
	<td>
	<!-- Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
			Choose Parking Space
			</td>
		</tr>
		</table>
		<table id="tbl_holder">
		<tr>
			<td>
			<?php
				if($load == "gate1"){
					require_once "gate1.php";
				}
			?>
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>