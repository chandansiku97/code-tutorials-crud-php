<?php 

include('config.php');

?>

<div class="container topshortHeight bottomshortHeight">
<a href="index.php" class="btn btn-light">Back to Home</a>
</div>


<div class="container topshortHeight">

<code>In order to recover data, the users need to register as premium customers. Once the account is registered as premium customers, the existing users will be able to use their retreived data.</code>

<div class="bottomshortHeight"></div>

<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>User Email</th>
<th>User Contact</th>
<th>Onboarding Date</th>
<th>Termination Date</th>
<th>Recovery Date</th>
<th>Recovery Status</th>
<th>Profile Status</th>
</tr>
</thead>
<tbody>

<?php 

$fetchdetails = mysqli_query($config,"SELECT * FROM recovery_db");

while($row = mysqli_fetch_array($fetchdetails)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['useremail']; ?></td>
<td><?php echo $row['usercontact']; ?></td>
<td><?php echo $row['onboarding_date']; ?></td>
<td><?php echo $row['termination_date']; ?></td>
<td><?php echo $row['recovery_date']; ?></td>
<td><span class="badge rounded-pill bg-warning text-dark"><?php echo $row['recovery_status']; ?></span></td>
<td><span class="badge rounded-pill bg-info text-dark"><?php echo $row['profile_status']; ?></span></td>
</tr>

<?php } ?>
</tbody>
<tfoot>
<tr>
<th>ID</th>
<th>Username</th>
<th>User Email</th>
<th>User Contact</th>
<th>Onboarding Date</th>
<th>Termination Date</th>
<th>Recovery Date</th>
<th>Recovery Status</th>
<th>Profile Status</th>
</tr>
</tfoot>
</table>

</div>



<!-- section for modal starts here -->

<!-- section for modal ends here -->


<script type="text/javascript">
new DataTable('#example');


</script>

