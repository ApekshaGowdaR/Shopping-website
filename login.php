<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="login.css" rel="stylesheet">
    <title>Login to SS</title>
</head>
<body>
    <div class="center">
        <h1>
            User Login
        </h1>
        
        <form action="#" method="POST" autocomplete="off">
        <div class="form">
            <input type="text" name="username" class="textfeild" placeholder="E-mail">
            <input type="password" name="password" class="textfeild" placeholder="password">
            <div class="forgetpass" > <a href="#" class= "link"  onclick= 'return remember()'>Forgot password?</a></div>
            <input type="submit" name="login" value="Login" class="btn">
            <div class="signup"> Are you new? <a href="index.php" class="link">SignUp</div> 
        </div>
</form>
    </div>
</body>
</html>
<script>
    function remember()
    {
      alert('REMEMBER PASSWORD SIR!');
    }
  </script>
  <?php
  include("connection.php");
  if (isset($_POST['login']))
  {
   $un= $_POST['username'];
   $pw= $_POST['password'];
   $query2 = "SELECT * from customers where email= '$un' && password='$pw'";
   $data2= mysqli_query($conn,$query2);
   $total1=mysqli_num_rows($data2);
//echo $total1;
if($total1==1){
   header('location:ecom.php');
   $_SESSION['user_name']= $un;
}  
else{
    echo "Login fail";
}
}
  ?>