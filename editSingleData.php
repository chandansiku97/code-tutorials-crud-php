<?php 

include('config.php');

?>

<div class="container topshortHeight">

<?php

if(isset($_POST['update'])) 
{
	$id = $_GET['id'];
	$username = $_POST['username'];
	$useremail = $_POST['useremail'];
	$usercontact = $_POST['usercontact'];

	$updatedData = mysqli_query($config,"UPDATE userdetails SET username='$username',useremail='$useremail',usercontact='$usercontact' WHERE id='$id'");

	echo "<div class='alert alert-info alert-dismissible fade show bottomshortHeight' role='alert'>";
		echo "Dear <strong> ".gethostname().".</strong> You have successfully Updated your Present Data. You will be viewing the updated Data from soon after reload.";
		echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
		echo "</div>";

	
}

?>

<div class="container topshortHeight bottomshortHeight">
<a href="view_all_users.php" class="btn btn-success float-end">View all Data</a>
</div>


<div class="container">
<div class="row">

<div class="col-sm-4">
<img src="assets/images/signup.jpg" class="img-fluid" alt="signup_image" style="height: 420px; width:350px;">
<div class="bottomshortHeight"></div>

</div>

<div class="col-sm-8">

<fieldset>
<legend><strong>Edit User Data</strong></legend>

<form method="POST">
<?php 
$id = $_GET['id'];

$editData = mysqli_query($config,"SELECT * FROM userdetails WHERE id='$id'");

while ($row = mysqli_fetch_array($editData)) { ?>
	

<div class="mb-3">
<label for="username" class="form-label"><span style="color: #900C3F;"><strong>ID:</strong></span></label>
<input type="text" class="form-control" name="id" autocomplete="off" readonly="" placeholder="User Name" value="<?php echo $row['id']; ?>">
</div>

<div class="mb-3">
<label for="username" class="form-label"><span style="color: #900C3F;"><strong>Username:</strong></span></label>
<input type="text" class="form-control" name="username" autocomplete="off" required="" placeholder="User Name" value="<?php echo $row['username']; ?>">
</div>



<div class="mb-3">
<label for="useremail" class="form-label"><span style="color: #900C3F;"><strong>User Email:</strong></span></label>
<input type="text" class="form-control" name="useremail" autocomplete="off" required="" placeholder="Email" value="<?php echo $row['useremail']; ?>">
</div>

<div class="mb-3">
<label for="usercontact" class="form-label"><span style="color: #900C3F;"><strong>User Contact:</strong></span></label>
<input type="number" class="form-control" name="usercontact" autocomplete="off" required="" placeholder="It's your tring tring" value="<?php echo $row['usercontact']; ?>">
</div>

<div class="bottomshortHeight"></div>

<button type="submit" class="btn btn-primary float-end" name="update">Update User</button>
<button type="button" class="btn btn-warning" onclick="redirectToHome()">Back to Home</button>
</form>


</fieldset>

</div>
<?php } ?>

</div>
</div>
</div>

<script type="text/javascript">
	function redirectToHome()
	{
		window.location.href="index.php";
	}
</script>


