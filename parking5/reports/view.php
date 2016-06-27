<?php $from = (isset($_GET['from']) && $_GET['from'] != '') ? $_GET['from'] : '';
 $to = (isset($_GET['to']) && $_GET['to'] != '') ? $_GET['to'] : '';
?>
<table id="tbl_form">
<tr>
	<td>
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
				<b>View Clients        <form method="get"  name="frmsearch" id="frmsearch">
					From
			<select name="from">
					  <option value="063000">06:30am</option>
					  <option value="073000">07:30am</option>
					  <option value="083000">08:30am</option>
					  <option value="093000">09:30am</option>
					  <option value="103000">10:30am</option>
					  <option value="113000">11:30am</option>
					  <option value="123000">12:30pm</option>
					  <option value="133000">01:30pm</option>
					  <option value="143000">02:30pm</option>
					  <option value="153000">03:30pm</option>
					  <option value="163000">04:30pm</option>
					  <option value="173000">05:30pm</option>
					  <option value="183000">06:30pm</option>
					  <option value="193000">07:30pm</option>
					  <option value="203000">08:30pm</option>
					  <option value="213000">09:30pm</option>
					</select>
							To
			<select name="to">
					  <option value="063000">06:30am</option>
					  <option value="073000">07:30am</option>
					  <option value="083000">08:30am</option>
					  <option value="093000">09:30am</option>
					  <option value="103000">10:30am</option>
					  <option value="113000">11:30am</option>
					  <option value="123000">12:30pm</option>
					  <option value="133000">01:30pm</option>
					  <option value="143000">02:30pm</option>
					  <option value="153000">03:30pm</option>
					  <option value="163000">04:30pm</option>
					  <option value="173000">05:30pm</option>
					  <option value="183000">06:30pm</option>
					  <option value="193000">07:30pm</option>
					  <option value="203000">08:30pm</option>
					  <option value="213000">09:30pm</option>
					</select>
			
			
			
  <input type="submit" value="search" class="box" >
  
  </form></b>
			</td>
		</tr>
		</table>
		
        
         <?php
		 
		 echo 'Show reports from '.$from.' to '.$to.' on '.date('Y-m-d').'<br>';
		 
		 		if ($from == "")
				{
				
				echo 'Please Search';
				}
			else if (mysql_num_rows(mysql_query("SELECT * FROM tbl_scan WHERE scan_tm_added >='$from' and scan_tm_added <='$to'"))==0)
			{
			echo 'No Records Found';
			
			}
			else
				{
				$owner = getReportList();
				
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
					Lot No.
					</th>
					<th>
					Date
					</th>
					<th>
					Time
					</th>
				</tr>
				<?php
				foreach($owner as $value){
				$cid= $value['client_id'];
	$query1 = "SELECT * FROM tbl_client WHERE client_id='$cid'";
	
	$result1 = mysql_query($query1);
	
	while($row1 = mysql_fetch_assoc($result1))
	{
		extract($row1);
		$type1[] = array('ctype_id'=>$ctype_id,'client_fname'=>$client_fname,'client_lname'=>$client_lname);
	}
				
				
				?>
				<tr>
					<td>
					<?php echo $value['client_id'];?>
					</td>
					<td>
					<?php echo $client_fname;?>
					</td>
					<td>
					<?php echo $client_lname;?>
					</td>
					<td>
					<?php echo $value['scan_lot'];?>
					</td>
					<td>
					<?php echo $value['scan_dt_added'];?>
					</td>
					<td>
					<?php echo $value['scan_tm_added'];?>
					</td>
					 
				</tr>
				<?php
				}
				}
				?>
				</table>
				<input type="button" onclick="window.location='printreport.php?from=<?php echo $from;?>&to=<?php echo $to; ?>'" value="Print" class="box" >
				<!--Place tables here-->
		
			</td>
		</tr>
		</table>
	<!--Markup ends here-->
	</td>
</tr>
</table>