<html lang="en">
<?php
include('conn.php');
session_start();
if (isset($_SESSION['username'])){
$username=$_SESSION['username'];
$sql = "SELECT * FROM account where acc_username='$username'";					
$results = mysql_query($sql);
$row = mysql_fetch_array($results);
$fname= $row['acc_firstname'];
$lname= $row['acc_lastname'];
$mname= $row['acc_middlename'];
$name = $fname . " " . $mname ." " . $lname ;
$actype = $row['acc_type'];
$haha = $_GET["id"];
						  		$sql = "SELECT * FROM account where acc_id='$haha'";
						$results = mysql_query($sql);						
						$r = mysql_fetch_array($results);
						$fname=$r['acc_firstname'];
						$mname=$r['acc_middlename'];
						$lname=$r['acc_lastname'];
						$email=$r['acc_email'];
						$usern=$r['acc_username'];
						$pass=$r['acc_password'];
						$utype=$r['acc_type'];
						$uhandle=$r['acc_handle'];
						$ac=$r['acc_created'];
						$av=$r['acc_validated'];
						$as=$r['acc_status'];
						$li=$r['last_login'];
						$lo=$r['last_logout'];
						$mod=$r['acc_modified'];
						
}else {
echo "<script type='text/javascript'>	window.location.href= 'login.php'; </script> ";
}
?>

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>User ID: COECSA_DCS_
						
						<?php 
						$haha = $_GET["id"];
						
						echo"$haha";
						?> 
						</h2>
						<div class="box-icon">
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" name="updateness" method="post" >
						<p class="center">
						<?php
						include("acc_update.php");
						?>
							<div class="control-group">
							<input class="input-large span3" name="tag" id="fname" type="text" style="display:none;"placeholder="Firstname" value="<?php
								$haha = $_GET["id"];
						
						echo"$haha";
						
								?>"/>
								<label class="control-label">Name: </label>
								<div class="controls">
							
								<input class="input-large span3" name="fname1" id="fname" type="text"required="" autofocus="" placeholder="Firstname" value="<?php
								echo"$fname";
						
								?>"/>
								<input class="input-large span3" name="mname1" id="mname" type="text" required="" autofocus=""value="<?php
								echo"$mname";
								
								?>"/>
								<input class="input-large span3" name="lname1" id="lname" type="text" required="" autofocus=""value="<?php
								echo"$lname";
								
								?>"/>
								
								</div>
							  </div><div class="control-group">
								<label class="control-label">Username: </label>
								<div class="controls">
								
								<input class="input-large span3" name="un1"required="" autofocus="" id="un" type="text" value="<?php
								echo"$usern";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
								<label class="control-label">Password: </label>
								<div class="controls">
							
								<input class="input-large span3" name="pw1"required="" autofocus="" id="pw" type="password" value="<?php
								echo"$pass";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Email: </label>
								<div class="controls">
								
								<input class="input-large span3" name="e1" required="" autofocus=""id="e" type="text" value="<?php
								echo"$email";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
								<label class="control-label">User Type: </label>
								<div class="controls">
								
									
							<select name="utype1"id="utype"required="" autofocus="" >
									<?php
									
									if($utype=="Admin"){
								echo"<option selected='selected'>$utype</option>";
								
						}if($utype=="Dean"){
								echo"<option selected='selected'>$utype</option>";
								echo"<option>Chairperson</option>";
								echo"<option>Professor</option>";
								echo"<option>IT Personnel</option>";
						}if($utype=="Chairperson"){
								echo"<option selected='selected'>$utype</option>";
								echo"<option>Dean</option>";
								echo"<option>Professor</option>";
								echo"<option>IT Personnel</option>";
						}if($utype=="Professor"){
								echo"<option selected='selected'>$utype</option>";
								echo"<option>Chairperson</option>";
								echo"<option>Dean</option>";
								echo"<option>IT Personnel</option>";
						}if($utype=="IT Personnel"){
								echo"<option selected='selected'>$utype</option>";
								echo"<option>Chairperson</option>";
								echo"<option>Professor</option>";
								echo"<option>Dean</option>";
						}
								?>
									
								  </select>
								</div>
							  </div>
							  
							  <?php
							  if($uhandle !=""){
							 
							    echo"<div class='control-group'>
								<label class='control-label'>Subjects Handled: </label>
								<div class='controls'>";
							
							    $query = mysql_query("SELECT * FROM subject where DEPT='Coecsa'");
								 
								  while($row = mysql_fetch_assoc($query)){
									
  $sql = "SELECT * FROM account where acc_username='$usern'";
						$results = mysql_query($sql);						
						while($r = mysql_fetch_assoc($results)){
							$subjs = $r['acc_handle'];
							
								$a = array();
$a = explode(',', $subjs);
echo" <label class='checkbox inline'>
									<div class='checker'  id='uniform-inlineCheckbox1'><span><input type='checkbox'  id='subjs'name='subjs[]' onclick='checkLen(this)'value='$row[SubjectName]'
									";
									if(isset($a[0])){
									if($row['SubjectName'] == $a[0]){
									echo"Checked=true";
									}}
									if(isset($a[1])){
									if($row['SubjectName'] == $a[1]){
									echo"Checked=true";
									}
									}
									
									if(isset($a[2])){
									if($row['SubjectName'] == $a[2]){
									echo"Checked=true";
									}
									}
									if(isset($a[3])){
									if($row['SubjectName'] == $a[3]){
									echo"Checked=true";
									}
									}
									echo"></span></div> $row[SubjectName]
								  </label>";
								
								
							
							  }}
									echo"	</div>
							  </div>";
										} 
										 
							  ?>
							 
							
							  <div class="control-group">
							  <label class="control-label">Account Validated: </label>
								<div class="controls">
								
								<select name="av1"id="av"required="" autofocus="" ><?php
								if($av == "Validated"){
								
								echo"<option selected='selected'>$av</option>";
								echo"<option>Pending</option>";
							}else{echo"<option selected='selected'>$av</option>";
								echo"<option>Validated</option>";}
						
								?>
								
								<select/>
								
								</div>
							  </div>
							    <div class="control-group">
							  <label class="control-label">Account Status: </label>
								<div class="controls">
								
								<select name="as1"id="as"required="" autofocus=""><?php
								if($as == "Registered"){
								
								echo"<option selected='selected'>$as</option>";
								echo"<option>Block</option>";
								echo"<option>Online</option>";
								echo"<option>Offline</option>";
							}if($as == "Block"){
								
								echo"<option selected='selected'>$as</option>";
								echo"<option>Registered</option>";
							echo"<option>Online</option>";
								echo"<option>Offline</option>";
							}if($as == "Online"){
								
								echo"<option selected='selected'>$as</option>";
								echo"<option>Block</option>";
								echo"<option>Registered</option>";
								echo"<option>Offline</option>";
							}if($as == "Offline"){
								
								echo"<option selected='selected'>$as</option>";
								echo"<option>Block</option>";
								echo"<option>Online</option>";
								echo"<option>Registered</option>";
							}
						
								?>
								
								<select/>
								
								</div>
							  </div>
						<div class="control-group">
							  <label class="control-label">Created: </label>
								<div class="controls">
								
								<input class="input-large span3" name="e" id="e" type="text" disabled=""value="<?php
								echo"$ac";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Modified: </label>
								<div class="controls">
								
								<input class="input-large span3" name="e" id="e" type="text" disabled=""value="<?php
								echo"$mod";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Last Login: </label>
								<div class="controls">
								
								<input class="input-large span3" name="e" id="e" type="text" disabled=""value="<?php
								echo"$li";
						
								?>"/>
								
								</div>
							  </div><div class="control-group">
							  <label class="control-label">Last Logout: </label>
								<div class="controls">
								
								<input class="input-large span3" name="e" id="e" type="text" disabled=""value="<?php
								echo"$lo";
						
								?>"/>
								
								</div>
							  </div>
							
							  <input type="submit" name="try" class="btn btn-primary" style="margin-left:25%;" />
							
							</p>
							
				</div><!--/span-->
				
			</form>
				
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		
	</div><!--/.fluid-container-->
	<html>