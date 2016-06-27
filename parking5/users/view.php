<table id="tbl_form">
<tr>
		<td>
		<!-- Markup starts here -->
				<table id="tbl_formheader">
				<tr>
						<td colspan="5">
							<b>View Users Accounts</b>
						</td>
				</tr>
				</table>
				<table id="tbl_holder">
				<tr>
					
				</tr>
				<tr>
						<td>
						<!-- Place tables here -->
								<table id="tbl_newlist">
								<tr>
										<th>
										Photo
										</th>
										<th>
										Username
										</th>
										<th>
										Lastname
										</th>
										<th>
										Firstname
										</th>
										<th>
										User Type
										</th>
										<th>
										&nbsp;
										</th>
								</tr>
								<?php
								$user = getUserList();
								foreach($user as $value){
								
								$desc = getTypeDescription($value['utype_id']);
								?>
								<tr>
										<td id="image_holder">
										<?php echo userImage($value['user_id']);?>
										</td>
										<td>
										<?php echo $value['user_name'];?>
										</td>
										<td>
										<?php echo $value['user_lname'];?>
										</td>
										<td>
										<?php echo $value['user_fname'];?>
										</td>
										<td>
										<?php echo $desc;?>
										</td>
										<td>
										<a href="index.php?page=users&load=modify&uid=<?php echo $value['user_id'];?>"><img src="buttons/edit.png" alt="Modify" title="Modify"/></a>&nbsp;&nbsp;
										<a href="javascript: confirmation(<?php echo $value['user_id'];?>)"><img src="buttons/deleteicon.png" alt="Delete" title="Delete"/></a>
										</td>
								</tr>
								<?php
								}
								?>
								</table>
								<!-- Place tables here -->
							</td>
						</tr>
						</table>
						
						<!-- Markup ends here -->
						</td>
					</tr>
					</table>
										