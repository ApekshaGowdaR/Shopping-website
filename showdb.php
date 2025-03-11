<?php
session_start();
//echo "Welcome ".$_SESSION['user_name'];
?>
<html>
    <head>
        <title>Display</title>
        <style>
            body
            {
background:rgb(247, 199, 233);
            }
            table{
                background-color: white;
            }
            .update, .delete{
              background-color: green;
              color:white;
              border:0;
              outline:0;
              border-radius:5px;
              height:20px;
              width:80px;
              font-weight:bold;
              cursor:pointer;
            }
            .delete{
              background-color: red;
              
            }
            </style>
            </head>
    

<?php


include("connection.php");
$userprofile = $_SESSION['user_name'];
if($userprofile==true)
{

}
else{
  header('location:admin.php');
}
$query1= "SELECT * FROM customers";

$data1= mysqli_query($conn,$query1);
$total= mysqli_num_rows( $data1);




//echo $total;
 if($total != 0)
 {
   ?>

<h2 align="center"><mark>DISPLAY ALL RECORDS</mark></h2>
<center>
<table border="3" cellspacing="5" width="90%">
    <tr>
    <th width="5%">Cust_id</th>
    <th width="10%">First Name</th>
    <th width="10%">last Name</th>
    <th width="10%">Gender</th>
    <th width="20%">Email</th>
    <th width="10%">Phone</th>
    <th width="10%">Address</th>
    <th width="15%">Operations</th>
    
 </tr>

<?php
   while($result= mysqli_fetch_assoc($data1))
   {
    echo "<tr>
             <td>".$result['cust_id']."</td>
             <td>".$result['f_name']."</td>
            <td>".$result['l_name']."</td>
             <td>".$result['gender']."</td>
             <td>".$result['email']."</td>
             <td>".$result['ph_no']."</td>
             <td>".$result['address']."</td>
             <td><a href='update_des.php?id=$result[cust_id]'><input type='submit' value='update' class='update'></a>
             <a href='delete.php?id=$result[cust_id]'>
             <input type='submit' value='delete' class='delete'  onclick= 'return checkdelete()'></a>
             </td>
             </tr>";
   }
 }
 else
 {
   echo "No records found";
 }

?>
</table>
<center>
  <script>
    function checkdelete()
    {
      return confirm('Are you sure to delete this row?');
    }
  </script>