<?php
include("connection.php");
$cust_id= $_GET['id'];
$query= "DELETE FROM customers where cust_id='$cust_id'";
$data2 = mysqli_QUERY($conn,$query);
if($data2)
{
    echo "<script>alert('Record deleted')</script>";
    ?>
      <meta http-equiv = "refresh" content = "0; url = http://localhost/wadaat/showdb.php" />
  <?php
}
else
{
    echo"failed to delete";
}
?>