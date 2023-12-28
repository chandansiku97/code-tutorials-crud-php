<?php 

include('config.php');

?>

<div class="container topshortHeight">

<?php

if(isset($_POST['registration'])) 
{
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$usercontact = $_POST['usercontact'];
	$userpassword = "Only for Premium Users";
	$profileStatus = "General Account";

	$checkEmail = mysqli_query($config,"SELECT useremail FROM userdetails WHERE useremail='$useremail'");

	$checkContact = mysqli_query($config,"SELECT usercontact FROM userdetails WHERE usercontact='$usercontact'");

	if(mysqli_num_rows($checkEmail)>0)
	{
		echo "<div class='alert alert-danger alert-dismissible fade show bottomshortHeight' role='alert'>";
		echo "Dear <strong> ".gethostbyaddr($_SERVER['REMOTE_ADDR']).".</strong>  An Email with similar address already exist. Please use another Email";
		echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		echo "</div>";
	}
	else if(mysqli_num_rows($checkContact)>0)
	{
		echo "<div class='alert alert-danger alert-dismissible fade show bottomshortHeight' role='alert'>";
		echo "Dear <strong> ".gethostbyaddr($_SERVER['REMOTE_ADDR']).".</strong> The contact number provided by you was registered against another user. Please provide another Phone Number";
		echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		echo "</div>";
	}
	else
	{
		mysqli_query($config,"INSERT INTO userdetails(username, useremail, usercontact, user_password, profile_status) VALUES('$username','$useremail','$usercontact','$userpassword','$profileStatus')");

		echo "<div class='alert alert-info alert-dismissible fade show bottomshortHeight' role='alert'>";
		echo "Dear <strong> ".gethostname().".</strong> We have successfully registered the user to the portal";
		echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		echo "</div>";

	}
}

?>

<div class="container">
<div class="row">

<div class="col-sm-4">
<img src="assets/images/signup.jpg" class="img-fluid" alt="signup_image" style="height: 420px; width:350px;">
<div class="bottomshortHeight"></div>

</div>

<div class="col-sm-8">

<fieldset>
<legend><strong>User Registration Form</strong></legend>

<form method="POST">

<div class="mb-3">
<label for="username" class="form-label"><span style="color: #900C3F;"><strong>Username:</strong></span></label>
<input type="text" class="form-control" name="username" autocomplete="off" required="" placeholder="User Name">
</div>

<div class="mb-3">
<label for="useremail" class="form-label"><span style="color: #900C3F;"><strong>User Email:</strong></span></label>
<input type="text" class="form-control" name="useremail" autocomplete="off" required="" placeholder="Email">
</div>

<div class="mb-3">
<label for="usercontact" class="form-label"><span style="color: #900C3F;"><strong>User Contact:</strong></span></label>
<input type="number" class="form-control" name="usercontact" autocomplete="off" required="" placeholder="It's your tring tring">
</div>

<div class="bottomshortHeight"></div>

<button type="submit" class="btn btn-primary float-end" name="registration">Register a User</button>
</form>

</fieldset>

</div>

</div>
</div>

</div>



<!-- section for quicklinks starts here -->
<div class="container bottomshortHeight topshortHeight">
  <div class="row">
    <div class="col-sm-3"><a href="view_all_users.php" class="btn btn-success">View Registered Users</a></div>
    <div class="col-sm-3"><a href="general_users.php" class="btn btn-success">General User Login</a></div>
    <div class="col-sm-3"><a href="premium_signup.php" class="btn btn-success">Premium Signup</a></div>
    <div class="col-sm-3"><a href="recoverable_users.php" class="btn btn-success">View Recoverable Data</a></div>
  </div>
</div>
<!-- section for quicklinks ends here -->