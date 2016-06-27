<table id="tbl_form">
<tr>
	<td>
	<!--Markup starts here-->
		<table id="tbl_formheader">
		<tr>
			<td colspan="2">
				Modify User
			</td>
			</table>
			<table id="tbl_holder">
			<tr>
				<td>
				<form name="form1" method="POST" action="users/process.php?action=modify">
				<table id="tbl_newform">
				<?php
				$profile = getUserProfile($uid);
				foreach($profile as $value){
				?>
				
					<tr>
						<td>
						Lastname
						</td>
						<td>
							<input type="text" name="lastname" value="<?php echo $value['user_lname'];?>" size="30"/>
							
							<!--A hidden element that consists the user id to be submitted later-->
							<input type="hidden" name="userid" value="<?php echo $uid;?>"/>
						</td>
					</tr>
					<tr>
						<td>
						Firstname
						</td>
						<td>
							<input type="text" name="firstname" value="<?php echo $value['user_fname'];?>" size="30"/>
							</td>
						</tr>
						<tr>
							<td>
							User Type
							</td>
							<td>
								<select name="type">
								<?php
								$type = getUserType();
								
								foreach($type as $val){
								?>
								<option value="<?php echo $val['utype_id'];?>" <?php if($val['utype_id']
								== $value['utype_id']){echo"selected";
								};
								?>>
								<?php 
									echo $val['utype_description'];
								?>
								
								</option>
								
								<?php
									}
								?>
								</td>
							</tr>
							<tr>
								<td>
								Username
								</td>
								<td>
								<input type="text" name="username" value="<?php echo $value['user_name'];?>" size="30"/>
								</td>
							</tr>
							<tr>
								<td colspan="2">
								<a href="index.php?page=users&load=change&uid=<?php echo $value['user_id'];?>">Change Password</a>
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
