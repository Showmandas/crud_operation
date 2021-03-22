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
       <a href="display.php">Check List</a>

       </div><!--/about-->
       <div class="col-12 col-md-6 col-lg-6 regForm my-4 py-4">
       <form action="insert.php" method="post">
       <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your full name">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="SelDiv">Select your Division</label>
    <select class="form-control" id="selDiv" name="selDiv">
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
    <input type="text" class="form-control" id="bgrp" name="bgrp" placeholder="Enter your Blood Group">
  </div>
  <div class="form-group">
  <label for="gender">Gender</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
  </div>
  
  <div class="form-group">
    <label for="message">Send Other Details</label>
    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Here,Enter your..qualifications,Name of institutions,and why you want to get membership of our NGO?"></textarea>
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
