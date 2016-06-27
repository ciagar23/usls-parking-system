
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<table id="tbl_form">
<tr>
	<td>
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
				Client Archives
				  <form name="form" id="form">
				    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                      <option value="index.php?page=violation&load=archivesclients">clients</option>
                      <option value="index.php?page=violation&load=archivescars">cars</option>
                      <option value="index.php?page=violation&load=archivesvio">violation</option>
                    </select>
                  </form>			</td>
		</tr>
        <?php

				$owner = getClientList();
?>
		<table id="tbl_holder">
		<tr>
			<td>
			<!--Place tables here-->
				<table id="tbl_newform">
				<tr>
					<th>
					ID Number
					</th>
					<th>
					First Name
					</th>
					<th>
					Last Name
					</th>
					<th>
					Vehicle Owner
					</th>
					<th>
					Date Added
					</th>
				</tr>
				<?php
				foreach($owner as $value){
				
				$desc = getCtypeDescription($value['ctype_id']);
				?>
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $value['client_fname'];?>
					</td>
					<td>
					<?php echo $value['client_lname'];?>
					</td>
					<td>
					<?php echo $desc;?>
					</td>
					<td>
					<?php echo $value['client_dt_added'];?>
					</td>
					
				</tr>
				<?php
				}
				?>
				</table>
				<!--Place tables here-->
			</td>
		</tr>
		</table>
	<!--Markup ends here-->
	</td>
</tr>
</table>