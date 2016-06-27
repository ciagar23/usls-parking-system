
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
				Car Archives
				  <form name="form" id="form">
				    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                      <option value="index.php?page=violation&load=archivescars">cars</option>
                      <option value="index.php?page=violation&load=archivesvio">violation</option>
                      <option value="index.php?page=violation&load=archivesclients">clients</option>
                    </select>
                  </form>			</td>
		</tr>
        <?php

				$car = getCarArchives();
?>
		<table id="tbl_holder">
		<tr>
			<td>
			<!--Place tables here-->
				<table id="tbl_newform">
				<tr>
					<th>
					Car Owner
					</th>
					<th>
					Type
					</th>
					<th>
					Model
					</th>
					<th>
					Plate
					</th>
					<th>
					Color
					</th>
					<th>
					Status
					</th>
				</tr>
				<?php
				foreach($car as $value){
				
				?>
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $value['car_type'];?>
					</td>
					<td>
					<?php echo $value['car_model'];?>
					</td>
					<td>
					<?php echo $value['car_plate'];?>
					</td>
					<td>
					<?php echo $value['car_color'];?>
					</td>
					<td>
					<?php
					
					if ($value['car_stat']==1)
					{
					?> <font color="blue">Registered</FONT> <?PHP
					}
					else
					{
					?> <font color="red">Expired</FONT> <?PHP
					}
					
					?>
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