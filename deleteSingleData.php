<?php 

include('config.php');

?>


<?php 

$id = $_GET['id'];

$fetchDetailsforDeletion = mysqli_query($config,"SELECT * FROM userdetails WHERE id='$id'");

while ($row = mysqli_fetch_array($fetchDetailsforDeletion)) { ?>

<div class="container topshortHeight">


<div class="card text-center">
<div class="card-header">
Confirm Data Deletion
</div>
<div class="card-body">
<p class="card-text">Data once deleted cannot be recovered through General Account. You need to activate your Elite Account to recover Data. <br> The following Data will be Deleted. Please Confirm by Pressing the Delete Button Below:</p>

<div class="container">

<form method="POST">
<div class="row">
<div class="col-sm-6 " style="text-align: right;"><span class="fw-bolder">ID:</span></div>
<div class="col-sm-6" style="text-align: left;" ><input class="form-label" type="text" readonly="" value="<?php echo $row['id']; ?>"></div>
</div>

<div class="row">
<div class="col-sm-6" style="text-align: right;"> <span class="fw-bolder">Username:</span></div>
<div class="col-sm-6" style="text-align: left;"><input class="form-label" type="text" readonly="" name="username" value="<?php echo $row['username']; ?>"></div>
</div>

<div class="row">
<div class="col-sm-6" style="text-align: right;"><span class="fw-bolder">Email:</span></div>
<div class="col-sm-6" style="text-align: left;" ><input class="form-label" type="text" readonly="" name="useremail" value="<?php echo $row['useremail']; ?>"></div>
</div>

<div class="row">
<div class="col-sm-6" style="text-align: right;"><span class="fw-bolder">Contact:</span></div>
<div class="col-sm-6" style="text-align: left;" ><input class="form-label" type="text" readonly="" name="usercontact" value="<?php echo $row['usercontact']; ?>"></div>
</div>

<div class="row">
<div class="col-sm-6" style="text-align: right;" ><span class="fw-bolder">Onboarding Date:</span></div>
<div class="col-sm-6" style="text-align: left;" ><input  class="form-label"type="text" readonly="" name="registrationDate" value="<?php echo $row['registration_date']; ?>"></div>
</div>



</div>
<div class="bottomshortHeight"></div>

<button type="submit" name="deleteUser" class="btn btn-danger">Confirm Deletion</button>
</div>
<div class="card-footer text-muted"><?php echo "Deletion Date:&nbsp;". date('d/m/Y'); ?></div>
</div>


</div>
</form>

<?php } ?>


<?php 
if(isset($_POST['deleteUser']))
{
	$id = $_GET['id'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$usercontact = $_POST['usercontact'];
	$userpassword = "Admin1234#@";
	$profileStatus = "Terminated";
	$onboardingDate = $_POST['registrationDate'];
	$recoveryDate = "To be Updated on Recovery";
	$recovery_status = "Recovery Pending";
	$activationCode = "activate_user";

	mysqli_query($config,"DELETE FROM userdetails WHERE id='$id'");

	echo "<script>alert('Data Deleted Successfully');window.location.href='view_all_users.php';</script>";

	mysqli_query($config,"INSERT INTO recovery_db(username,useremail,usercontact,user_password,profile_status,onboarding_date,recovery_date,recovery_status,activation_code) VALUES ('$username','$useremail','$usercontact','$userpassword','$profileStatus','$onboardingDate','$recoveryDate','$recovery_status','$activationCode')");
}

?>


