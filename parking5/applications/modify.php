<table id="tbl_form">
<tr>
	<td>
	<!--Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
				Modify Client
			</td>
			</table>
			<table id="tbl_holder">
			<tr>
				<td>
				<form name="form1" method="POST" action="applications/process.php?action=modify">
				<table id="tbl_newform">
				<?php
				$profile = getClientProfile($cid);
				foreach($profile as $value){
				?>
					<tr>
							<td>
							Vehicle Owner
							</td>
							<td>
								<select name="type">
								<?php
								$type = getClientType();
								
								foreach($type as $val){
								?>
								<option value="<?php echo $val['ctype_id'];?>" <?php if($val['ctype_id']
								== $value['ctype_id']){echo"selected";
								};
								?>>
								<?php 
									echo $val['ctype_desc'];
								?>
								
								</option>
								
								<?php
									}
								?>
								</td>
							</tr>
							<tr>
					<td>
						Id Number:
					</td>
					<td>
						<?php echo $value['client_id'];?>
					</td>
					<td>
						<!--A hidden element that consists the user id to be submitted later-->
						<input type="hidden" name="clientid" value="<?php echo $cid;?>"/>
					</td>
				</tr>
					<tr>
						<td><br>
						Name of Applicant:<br>
					</td>
					</tr>
					<tr>
					<td>
						Last: 
					</td>
					<td>
						<input type="text" name="lastname" value="<?php echo $value['client_lname'];?>" size="30"/>
						
						<!--A hidden element that consists the user id to be submitted later-->
						<input type="hidden" name="clientid" value="<?php echo $cid;?>"/>
					</td>
					</tr>
					<tr>
						<td>
						First:
						</td>
						<td>
							<input type="text" name="firstname" value="<?php echo $value['client_fname'];?>" size="30"/>
						</td>
					</tr>
					<tr>
						<td>
							Department/Office:
						</td>
						<td>
							<input type="text" name="department" value="<?php echo $value['client_dept'];?>" size="20"/>
						</td>
					</tr>
					<tr>
						<td>
							City Address:
						</td>
						<td>
							<input type="text" name="city" value="<?php echo $value['client_city'];?>" size="30"/>
						</td>
					</tr>
					<tr>
						<td>
							Telephone Number:
						</td>
						<td>
							<input type="text" name="telephone" value="<?php echo $value['client_tel'];?>" size="15"/>
						</td>
					</tr>
							<?php
							}
							?>
							<tr>
								<td colspan="2" class="btmblock">
									<input type="submit" name="submit" value="Save Changes"/>
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
	</td>
</tr>
</table>
