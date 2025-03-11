<?php include("connection.php");
session_start();
$cust_id= $_GET['id'];
$userprofile = $_SESSION['user_name'];
if($userprofile==true)
{

}
else{
  header('location:admin.php');
}
$query1= "SELECT * FROM customers where cust_id='$cust_id'";

$data1= mysqli_query($conn,$query1);
$total= mysqli_num_rows( $data1);
$result= mysqli_fetch_assoc($data1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updation</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="title">
Update Customer Details
    </div>
<div class="form">
    <div class="input_field">
    <label>First Name</label>
    <input type="text" value="<?php echo $result['f_name']; ?>" class="input" name="fname" required>
</div>
<div class="input_field">
    <label>Last Name</label>
    <input type="text" value="<?php echo $result['l_name']; ?>" class="input" name="lname" required>
</div>
<div class="input_field">
    <label>Password</label>
    <input type="password"  value="<?php echo $result['password']; ?>" class="input" name="password" required>
</div>
<div class="input_field">
    <label>Confirm Password</label>
    <input type="password" value="<?php echo $result['c_password']; ?>" class="input" name="conpass" required>
</div>
<div class="input_field">
    <label>Gender</label>

    <select name="gender" class="selectbox" required>
        <option value="">select</option>

        <option value="male"          
        <?php
        if($result['gender']== 'male'){ echo "selected";}
        ?>
        >Male</option>
        <option value="female"
        <?php
        if($result['gender']== 'female'){ echo "selected";}
        ?>
        >Female</option>
    </select>

</div>
<div class="input_field">
    <label>E-mail</label>
    <input type="text" value="<?php echo $result['email']; ?>" class="input" name="email" required>
</div>
<div class="input_field">
    <label>Phone number</label>
    <input type="text" value="<?php echo $result['ph_no']; ?>" class="input" name="phone" required>
</div>
<div class="input_field">
    <label>Address</label>
    <textarea name="address" class="textarea" required> <?php echo $result['address']; ?></textarea>
</div>
<div class="input_field terms">
    <label class="check">
    <span class="checkmark"><input type="checkbox" required></span>
    </label>
    <p>Agree to terms and conditions</p>
</div>
<div class="input_field">
    <input type="submit" value="Update Details" class="btn" name="update">
</div>
</div>
</form>
</div>
</body>
</html>

<?php
if(isset($_POST['update']))
{
    $fn      =$_POST['fname'];
    $ln      =$_POST['lname'];
    $pwd     =$_POST['password'];
    $cpwd    =$_POST['conpass'];
    $gen     =$_POST['gender'];
    $email   =$_POST['email'];
    $phone   =$_POST['phone'];
    $address =$_POST['address'];
 $query = "UPDATE customers set f_name='$fn',l_name='$ln',password='$pwd',c_password='$cpwd',gender='$gen',email='$email',ph_no='$phone',address='$address' where cust_id='$cust_id' ";
$data= mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('Record updated')</script>";

?>

      <meta http-equiv = "refresh" content = "0; url = http://localhost/wadaat/showdb.php" />
  

<?php
}
else{
    echo "Insertion failed";
}
   }
   

?>