<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = md5($_POST['Password']);

    $sql = "INSERT INTO `login` (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $sql);
        if($result){
    echo "Successfull";
}
        else{
    echo "Failed";
}
}
                                  
?>

<html>
<head>
    <title>User Registration</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href-"styles.css">
    </head>
    <body>
    <div class="container">
         <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class ="input-group">
        <span class ="input-group-addon" id="basic-addon1">@</span>
        <input type="text" name="username" class="form-control" placeholder="username" required></div>
        <lable for="input Email" class="sr-only">Email address</lable>
        <input type="Email" name="Email" id="input Email" class ="form-control" placeholder="Email addresss" required autofocus>
        <label for="input password" class="sr-only">Password</label>
        <input type="password" name="password" id="input password" class="'form control" placeholder="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        </form>
</div>
    </body>
    
    
    
</html>