<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrations</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
Sign Up Form
    </div>
<div class="form">
    <div class="input_field">
    <label>First Name</label>
    <input type="text" class="input" name="fname" required>
</div>
<div class="input_field">
    <label>Last Name</label>
    <input type="text" class="input" name="lname" required>
</div>
<div class="input_field">
    <label>Password</label>
    <input type="password" class="input" name="password" required>
</div>
<div class="input_field">
    <label>Confirm Password</label>
    <input type="password" class="input" name="conpass" required>
</div>
<div class="input_field">
    <label>Gender</label>
    <select name="gender" class="selectbox" required>
        <option value="">select</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
</div>
<div class="input_field">
    <label>E-mail Address</label>
    <input type="text" class="input" name="email" required>
</div>
<div class="input_field">
    <label>Phone number</label>
    <input type="text" class="input" name="phone" required>
</div>
<div class="input_field">
    <label>Address</label>
    <textarea name="address" class="textarea" required></textarea>
</div>
<div class="input_field terms">
    <label class="check" >
        
        <span class="checkmark"><input type="checkbox" required></span>
    </label>
    <p>Agree to terms and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="register" class="btn" name="signup">
</div>
</div>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['signup']))
{
    $fn      =$_POST['fname'];
    $ln      =$_POST['lname'];
    $pwd     =$_POST['password'];
    $cpwd    =$_POST['conpass'];
    $gen     =$_POST['gender'];
    $email   =$_POST['email'];
    $phone   =$_POST['phone'];
    $address =$_POST['address'];

    if($fn !="" && $ln !="" && $pwd !="" && $cpwd !="" && $gen !="" && $email !="" && $phone !="" 
    && $address !="" )

   { $query="INSERT INTO CUSTOMERS(f_name,l_name,password,c_password,gender,email,ph_no,address) 
   VALUES('$fn','$ln','$pwd','$cpwd','$gen','$email','$phone','$address')";
$data= mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Registration succsessful')</script>";?>
    <meta http-equiv = "refresh" content = "0; url = http://localhost/wadaat/login.php" />
    <?php
}
else{
    echo "Insertion failed";
}
   }
   
}
?>