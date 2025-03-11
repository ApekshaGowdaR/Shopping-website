<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin.css" rel="stylesheet">
    <title>Login to Database</title>
</head>
<body>
    <div class="center">
        <h1>
            Admin Login
        </h1>
        
        <form action="#" method="POST" autocomplete="off">
        <div class="form">
            <input type="text" name="username" class="textfeild" placeholder="E-mail">
            <input type="password" name="password" class="textfeild" placeholder="password">
            <div class="forgetpass" > <a href="#" class= "link"  onclick= 'return remember()'>Forgot password?</a></div>
            <input type="submit" name="login" value="Login" class="btn">
            
        </div>
</form>
    </div>
</body>
</html>
<script>
    function remember()
    {
      alert('PLEASE REMEMBER PASSWORD SIR!');
    }
  </script>
  <?php
  include("connection.php");
  if (isset($_POST['login']))
  {
   $un= $_POST['username'];
   $pw= $_POST['password'];
   $query3= "SELECT * FROM admins WHERE a_email='$un' && a_password='$pw'";
   $data3= mysqli_query($conn,$query3);
   $total2=mysqli_num_rows($data3);
//echo $total1;
if($total2==1){
    header('location:showdb.php');
    $_SESSION['user_name']= $un;
   
}  
else{
    echo "Login fail";
}
}
  ?>