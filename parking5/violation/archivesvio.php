<?php

$search = (isset($_GET['search']) && $_GET['search'] != '') ? $_GET['search'] : '';
?>
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
				Violation Archives
				  <form name="form" id="form">
				    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
                      <option value="index.php?page=violation&load=archivesvio">violation</option>
                      <option value="index.php?page=violation&load=archivescars">cars</option>
                      <option value="index.php?page=violation&load=archivesclients">clients</option>
                    </select>
                  </form>			</td>
		</tr>
		</table>
              <form action="archives.php" method="get"  name="frmsearch" id="frmsearch">

			<input name="search" type="text" class="box" size="35" maxlength="100" >
			
             <input type="submit" value="search" class="box" >
  
  </form>
          

        
        
 <?php if ($search == "")
 	{
	echo "please search";
	}
	else if (mysql_num_rows(mysql_query("SELECT * FROM tbl_violist as v1, tbl_client as c1 WHERE v1.client_id = c1.client_id and c1.client_fname='$search' or c1.client_lname='$search' or v1.client_id='$search'"))==0)
	{
	echo 'No Records Found';
	}
	else
	{
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
					Last Name
					</th>
					<th>
					First Name
					</th>
					<th>
					Owner Type
					</th>
					<th>Description
					
					</th>
                    
					<th>Date Filed
					
					</th>
					<th>Status
					
					</th>
				</tr>
				<?php
				$vio = getViolationArchivesList();
				foreach($vio as $value){
				
				$desc = getCtypeDescription($value['ctype_id']);
				
				
				?>
                
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $value['client_lname'];?>
					</td>
					<td>
					<?php echo $value['client_fname'];?>
					</td>
					<td>
					<?php echo $desc;?>
					</td>
					<td>
					<?php echo $value['violation_desc'];?>	
					</td>
					<td>
					<?php echo $value['violist_dt_added'];?>
					</td>
					<td>
					<?php
					
					if ($value['client_vio_id']==1)
					{
					?> <font color="red">UNCLEARED</FONT> <?PHP
					}
					else
					{
					?> <font color="blue">CLEARED</FONT><br>(<?php echo $value['violist_date_cleared'];?>) <?PHP
					}
					
					?>
					</td>
				</tr>
				<?php
				}
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