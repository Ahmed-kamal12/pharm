<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/formstyle.css">
    <title>Log In</title>
</head>
<body>
<?php
    if (isset($_POST['Log in'])){
        require 'constants.php';

        $email=$_POST['email'];
        $pass=$_POST['password'];

        $stm ="select * from users where email='$email' and password='$pass'";
        $x= mydqli_query($conn,$stm);
        $count= mysqli_num_rows($x);
        if ($count==1){
            header('location:main.html');
        }
        else{
            echo"invalid";
        }
    }
?>
    
    <form method="post" action="main.html">
        <h2>Log In</h2>
        <div>
            <input type="email" placeholder="Email" required>
        </div>
        <div>
            <input type="password" placeholder="Password" required>
        </div>
        <input id="submit" type="submit" value="Log in" name="Log in">
        <p>Don't have an account? <a href="signin.php">Sign up</a></p>
        <p id="or">or</p>
        <p>Log in as an <a href="loginadmin.html">admin</a></p>
    </form>
</body>
</html>