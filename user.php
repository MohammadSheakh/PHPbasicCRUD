<?php
// first i want to connect to my database 
// https://www.youtube.com/watch?v=72U5Af8KUpA 13:55
include 'connect.php';

if(isset($_POST['submit'])){
    // form e POST method pass kora hoyechilo .. eta jodi submit hoy
    // taile database e data entry dibo 
    $name = $_POST['submit'] // name attribute gula pass korbo 
    $email = $_POST['submit']
    $mobile= $_POST['submit']
    $password = $_POST['submit']
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap add kora jete pare .. othoba tailwind css -->
</head>
<body>
    <div>
        <form action="" method="post">
            <div style="display:flex">
            <h3>enter your name : </h3>
            <input autocomplete="off" id="name" name="name"  style="height:20px; margin-top:17px"/>
            </div>

            <div style="display:flex">
            <h3>enter your email : </h3>
            <input autocomplete="off" type="text" id="email" name="email" style="height:20px; margin-top:17px"/>
            </div>

            <div style="display:flex">
            <h3>enter your mobile : </h3>
            <input autocomplete="off" type="text" id="mobile" name="mobile" style="height:20px; margin-top:17px"/>
            </div>

            <div style="display:flex">
            <h3>enter your password : </h3>
            <input autocomplete="off" type="text" id="password" name="id" style="height:20px; margin-top:17px"/>
            </div>

            <button type="submit" name="submit"> submit</button>
            
        </form>
    </div>
</body>
</html>