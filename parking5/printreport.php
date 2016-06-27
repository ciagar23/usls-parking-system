<?php
if (!session_start) {
	exit;
}
	include ("library/config.php");
	checkUser();
	
	$page   = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
	$load   = (isset($_GET['load']) && $_GET['load'] != '') ? $_GET['load'] : '';
	$uid	= (isset($_GET['uid']) && $_GET['uid'] != '') ? $_GET['uid'] : '';
	$cid	= (isset($_GET['cid']) && $_GET['cid'] != '') ? $_GET['cid'] : '0';
	$sid	= (isset($_GET['sid']) && $_GET['sid'] != '') ? $_GET['sid'] : '0';
?>
<?php $from = (isset($_GET['from']) && $_GET['from'] != '') ? $_GET['from'] : '';
 $to = (isset($_GET['to']) && $_GET['to'] != '') ? $_GET['to'] : '';
?>
<table width=100%>
<tr>
	<td>
	<!--MarkUp starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="5">
	
		
        
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
				<!--Place tables here-->
		
			</td>
		</tr>
		</table>
	<!--Markup ends here-->
	</td>
</tr>
</table>

<script>

window.print();
window.close();
window.location ='reports.php?from=<?php echo $from;?>&to=<?php echo $to; ?>';

</script>