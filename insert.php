
<!---Insert Code--->
<?php
include 'conn.php';



if(isset($_POST['register'])){
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $division=$_POST['selDiv'];
  $bgrp=$_POST['bgrp'];
  $gender=$_POST['gender'];
  $message=$_POST['message'];

  $insertQuery="INSERT INTO `listtable`(`Fullname`, `Email`, `Division`, `Blood_Group`, `Gender`, `Other`) VALUES ('$fullname','$email','$division','$bgrp','$gender','$message')";
  $query=mysqli_query($con,$insertQuery);
  if($query){
    ?>
    <script>
    alert('Data inserted');
    header('location:index.php');
    </script>
    <?php
  }else{
    ?>
    <script>
    alert('Not  inserted');
    header('location:index.php');
    </script>
    
    <?php
  }
}

?>
<!---/Insert Code--->