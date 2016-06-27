<table id="tbl_form">
<tr>
	<td>
	<!-- Markup starts here-->
		<table>
		<tr>
			<td colspan="2">
				<b>Violation Information</b>
			</td>
		</tr>
		</table>
		<table>
		<tr>
			<td>
			<?php
			$vio = '0';
			$vio = getVioDescriptionMore($cid);
			foreach($vio as $value){
			?>
				<table>
				<tr>
					<td class="client_label">
					Description:
					</td>
					<td class="client_value">
					<?php echo $value['violation_desc'];?>	
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Time Filed:
					</td>
					<td class="client_value">
					<?php echo $value['violist_tm_added'];?>
					</td>
				</tr>
				<tr>
					<td class="client_label">
					Date Filed:
					</td>
					<td class="client_value">
					<?php echo $value['violist_dt_added'];?>	
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<input type="hidden" name="?" value="<?php echo $cid; ?>">
						<a href="index.php?page=violation&load=addvio&cid=<?php echo $value['client_id'];?>"><img src="buttons/add1.png" alt="Add Violation" title="Add Violation"/></a>
						<a href="violation/process.php?action=delvio&violist_id=<?php echo $value['violist_id'];?>"><img src="buttons/deleteicon.png" alt="Delete" title="Delete"/></a>
					</td>
				</tr>
				</table>
				<?php
				}
				?>
				
			</td>
		</tr>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>