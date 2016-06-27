<table id="tbl_form">
<tr>
    <td>
    <!-- Markup starts here-->
        <table id="tbl_formheader">
		<tr>
		    <td colspan="2"><b>
			    Add New User
			</b></td>
		</tr>
		<tr>
		    <td>
			    <form name="form1" method="POST" action="users/process.php?action=add">
				<table id="tbl_newform">
				<tr>
					<td>
					    Lastname
					</td>
					<td>
						<input type="text" name="lastname" id="lname" size="30" onblur="checkFieldContain(document.getElementById('lname'), 'Lastname Must Only Contain Letters!')"/>
					</td>
				</tr>
				<tr>
					<td>
					    Firstname
					</td>
					<td>
						<input type="text" name="firstname" id="fname" size="30" onblur="checkFieldContain(document.getElementById('fname'), 'Firstname Must Only Contain Letters!')"/>
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
							foreach($type as $value){
						?>
							<option value="<?php echo $value['utype_id'];?>">
							    <?php echo $value['utype_description'];?>
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
						<input type="text" name="username" id="uname" size="30" onblur="checkLength(document.getElementById('uname'), 'USERNAME Should Have A Minimum Of 6 Characters!')"/>
					</td>
				</tr>
				<tr>
					<td>
					    Password
					</td>
					<td>
						<input type="password" name="password" id="pswd" size="30" onblur="checkLength(document.getElementById('pswd'), 'PASSWORD Should Have A Minimum Of 6 Characters!')"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="btmblock">
						<input type="submit" name="submit" value="Create"/>
					</td>
				</tr>
				</table>
				</form>
			</td>
		</tr>
		</table>
		</table>
	<!-- Markup ends here-->
	</td>
</tr>
</table>