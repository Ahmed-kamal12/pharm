<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/formstyle.css">
    <title>Sign Up</title>
</head>
<body>

    <form method="post" action="main.html">
    
        <h2>Sign Up</h2>
        <div>
            <input type="text" placeholder="Name" name="name" id='name'autofocus>
       </div>
        <div>
            <input type="email" placeholder="Email" name="email" id="mail">
        </div>
        <div>
            <input type="tel" placeholder="Phone"  name="tel" id="tele">
        </div>
        <div>
            <input type="password" placeholder="Password"  name="password" id="pass">
        </div>
        <div>
            <span>
                <input type="radio" name="type" required value="Male">
                <Label>Male</Label>
            </span>
            <span>
                <input type="radio" name="type" required value="Female">
                <Label>Female</Label>
            </span>
        </div>
            <input id="submit" value="Create Account" name="Create Account" onclick="validate()">
            <p>Already have an account? <a href="login.php">Log In</a></p>
            
    </form>
<?php
if (isset($_POST['Create Account'])){
require 'constants.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$tel=$_POST['tel'];

$stm ="insert into users (name,email,password,tel) values('$name','$email','$pass','$tel')";
$x= mydqli_query($conn,$stm);
}
?>
    <script src="Script/singup.js"></script>
</body>
</html>