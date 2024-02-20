<!DOCTYPE html>
<html>
<head>
    <title>Login page</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <form action="index.php" method="post">
        <div class="box">
            <h1><b><center>LOGIN</center></b></h1>
            <table class="table">
                <tr>
                    <td><label for="username"><b>E-mail</b></label></td>
                    <td><input type="text" placeholder="Enter e-mail" name="username" class="input-field email"></td>
                </tr>
                <tr>
                    <td><label for="password"><b>Password</b></label></td>
                    <td><input type="password" placeholder="Password" name="password" class="input-field password"></td>
                </tr>
            </table>
            <br>
            <center><input type="submit" name="login" value="Login"></center>
            <br>
            <center><a href="registration.php">Register</a><center>
        </div>
    </form>
</body>
</html>
