<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class:container>
    <div><center>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == "invalid_username") {
        echo '<p style="color: red;">Invalid username!Register here.</p>';
    }
    ?>
    </div>
</center>
    <br>
    <div>
    <form action="register.php" method="post">
        <div class="box1">
            <h1><center>Registration Form</center></h1>
            <div class="form-group">
                <label for="username">E-mail:</label>
                <input type="text" placeholder="Enter e-mail" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <label for="firstName">First name:</label>
                <input type="text" placeholder="First name" name="fname">
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" placeholder="Last name" name="lname">
            </div>
            <br>
            <br>
            <input type="submit" value="Submit">
        </div>
    </form>
</div>
</div>
</body>
</html>
