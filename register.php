<?php  


   $con=mysqli_connect("localhost:3306/login521","root","");
    $db=mysqli_select_db($con,"login521");
    $username = $_POST['username'];  
    $password = $_POST['password'];  
    $fname=$_POST['fname'];
   $lname=$_POST['lname'];
   //echo $username."".$password."".$fname;

   $sql = "INSERT INTO `data`(`username`, `password`, `fname`, `lname`) VALUES ('$username','$password','$fname','$lname')";

if (mysqli_query($con, $sql)) {
 echo "New record created successfully";
} else {
  echo("Invalid");
}


?>  