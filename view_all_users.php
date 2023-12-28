<?php 

include('config.php');

?>

<div class="container topshortHeight bottomshortHeight">
<a href="index.php" class="btn btn-light">Back to Home</a>
</div>


<div class="container topshortHeight">

<table id="example" class="display" style="width:100%">
<thead>
<tr>
<th>ID</th>
<th>Username</th>
<th>User Email</th>
<th>User Contact</th>
<th>Onboarding Date</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>

<?php 

$fetchdetails = mysqli_query($config,"SELECT * FROM userdetails");

while($row = mysqli_fetch_array($fetchdetails)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['useremail']; ?></td>
<td><?php echo $row['usercontact']; ?></td>
<td><?php echo $row['registration_date']; ?></td>
<td><a href="editSingleData.php?<?php echo "id=".$row['id']; ?>" class="btn btn-primary">Edit Data</a></td>
<td><a href="deleteSingleData.php?<?php echo "id=".$row['id']; ?>" class="btn btn-danger">Delete Data</a></td>

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
<th>Edit</th>
<th>Delete</th>
</tr>
</tfoot>
</table>

</div>



<!-- section for modal starts here -->

<!-- section for modal ends here -->


<script type="text/javascript">
new DataTable('#example');


</script>

