<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count ==1){
        header( 'Location: http://localhost:8000' );
    }else{
        echo "Invalid Username/Password";
    }
}
?>

<html>
<head>
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body style="background-color:#ffffb3">
        <center><h1><b>GECB FILE SYSTEM</b></h1></center>
            
    <div class="container">
         <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Login Here</h2>
        <div class ="input-group">
         
         <input type="text" name="username" class="form-control" placeholder="username" required>
              
        <label for="input password" class="sr-only">Password</label>
        <input type="password" name="password" id="input password" class="form-control" placeholder="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">login</button>
             </div>     
        </form>
</div>
    </body>    
</html>
