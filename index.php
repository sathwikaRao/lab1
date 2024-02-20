<?php      
    $con=mysqli_connect("localhost:3306/login521","root","");
    $db=mysqli_select_db($con,"login521");
    $username = $_POST['username'];  
    $password = $_POST['password'];  
        
      
        $sql = "select *from data where username = '$username'";  
        
        $result = mysqli_query($con, $sql);  
        $r=mysqli_fetch_array($result);
      
        if ($r) {
           
            if (($password==$r['password'])) {
                echo "Welcome " . $r['fname'];
            } else {
                echo "Incorrect password";
            }
        } else {
           
            header("Location: registration.php?error=invalid_username");
        } 
        
         
?>

