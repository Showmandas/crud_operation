

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Division</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Gender</th>
      <th scope="col">Other Info</th>
      <th colspan="2">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
include 'conn.php';

$selquery= " select * from listTable";

$q=mysqli_query($con,$selquery);
$nums=mysqli_num_rows($q);

while($fdata=mysqli_fetch_array($q)){
  ?>
  <tr>
  <th><?php echo $fdata['id']?></th>
  <td><?php echo $fdata['Fullname']?></td>
  <td><?php echo $fdata['Email']?></td>
  <td><?php echo $fdata['Division']?></td>
  <td><?php echo $fdata['Blood_Group']?></td>
  <td><?php echo $fdata['Gender']?></td>
  <td><?php echo $fdata['Other']?></td>
  <td><a href="delete.php?id=<?php echo $fdata['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash"></i></a></td>
  <td><a href="edit.php?id=<?php echo $fdata['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit"></i></a></td>
</tr>
<?php
}

?>
  
    
  </tbody>
</table>    
</body>
</html>