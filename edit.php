<!---Front End Part--->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
       <div class="row">
       <div class="col-12 col-md-6 col-lg-6 my-5 py-4 about">
       <img src="" alt="">
       <h1>Welcome to our NGO</h1>
       <h3>About Us</h3>
       <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est incidunt inventore dolores consequatur voluptatem suscipit, laboriosam nemo similique veniam reiciendis reprehenderit alias exercitationem doloribus et voluptatum quaerat illo natus nam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe aut explicabo corporis quos, a totam eveniet maiores tempore, aliquam exercitationem, facere velit possimus similique deserunt ipsa accusantium nam non ullam!</p>
       <a href="#">Check List</a>

       </div><!--/about-->
       <div class="col-12 col-md-6 col-lg-6 regForm my-4 py-4">
       <form action="" method="post">
       
<!---Update Code--->
<?php
include 'conn.php';

$id=$_GET['id'];
// $gender=$_GET['Gender'];

$showquery="select * from listTable where id={$id}";
$showdata=mysqli_query($con,$showquery);

$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['register'])){
  $id=$_GET['id'];
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $division=$_POST['selDiv'];
  $bgrp=$_POST['bgrp'];
  $gender=$_POST['gender'];
  $message=$_POST['message'];

  // $insertQuery="INSERT INTO `listtable`(`Fullname`, `Email`, `Division`, `Blood_Group`, `Gender`, `Other`) VALUES ('$fullname','$email','$division','$bgrp','$gender','$message')";
  
  $upquery=" update listTable set id=$id,Fullname='$fullname',Email='$email',Division='$division',Blood_Group='$bgrp',Gender='$gender',Other='$message' where id=$id";

  $query=mysqli_query($con,$upquery);
  if($query){
    ?>
    <script>
    alert('Data updated properly');
    header('location:index.php');
    </script>
    <?php
  }else{
    ?>
    <script>
    alert('Not updated');
    header('location:index.php');
    </script>
    
    <?php
  }
}

?>
<!---/Insert Code--->
       <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $arrdata['Fullname'];?>" placeholder="Enter your full name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="<?php echo $arrdata['Email'];?>">
  </div>
  <div class="form-group">
    <label for="SelDiv">Select your Division</label>
    <select class="form-control" id="selDiv" name="selDiv" value="<?php echo $arrdata['Division'];?>">
      <option value="Dhaka">Dhaka</option>
      <option value="Chattagram">Chattagram</option>
      <option value="Khulna">Khulna</option>
      <option value="Sylhet">Sylhet</option>
      <option value="Barisal">Barisal</option>
      <option value="Rajshahi">Rajshahi</option>
      <option value="mymensingh">Mymensingh</option>
    </select>
  </div>
  
  <div class="form-group">
    <label for="bgrp">Blood Group</label>
    <input type="text" class="form-control" id="bgrp" name="bgrp" value="<?php echo $arrdata['Blood_Group'];?>" placeholder="Enter your Blood Group">
  </div>
  <div class="form-group">
  <label for="gender">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="male"
  >
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="<?php echo $arrdata['Gender'];?>">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
  </div>
  
  <div class="form-group">
    <label for="message">Send Other Details</label>
    <textarea class="form-control" id="message" name="message" rows="3" value="<?php echo $arrdata['Other'];?>" placeholder="Here,Enter your..qualifications,Name of institutions,and why you want to get membership of our NGO?"></textarea>
  </div>
  <div class="from-group">
  <input type="submit" class="btn btn-primary float-right py-2 px-5" name="register" value="Register">
  </div>
</form>
       </div><!--/regForm-->
        </div><!--/row-->    
    </div><!--/container-->
</body>
</html>
<!---/Front End Part--->

