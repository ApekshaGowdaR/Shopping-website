<?php
include("connection.php");
$sql1= "select * from brands";
$all_brands = mysqli_query($conn,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brands offered</title>
    <link rel="icon" href="img\shoper.png" type="image/x-icon">
    <link href="brands.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body{
             background-image:url(https://media.istockphoto.com/id/1271067395/photo/abstract-black-background.jpg?s=612x612&w=0&k=20&c=BhN6wjm596rFaWFy7gS-qL6fobLr2HsUOZ_lSxMtDAc=);
        background-size:cover;
            }
        .cards-section{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .card{
            margin: 1rem;
            perspective: 1000px;
        }
        .card-container{
            display: grid;
grid-template-columns: 1fr;
justify-content: center;
transition: all 1s ease;
transform-style: preserve-3d;
background-color: rgb(247, 199, 233);
        }
        .card-front{
            
            grid-area: 1 / 1 ;
            transform: rotateY(0deg);
        }
        
        .card-container img{
            width:20rem;
            height: 20rem;
        }
        
        
        .card:hover .card-container{
            transform: rotateY(180deg);

        }
    </style>
</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    
        <label class="logo">
            
                <img src="img\shoper.png" class="sslogo">
                
            ShopperStop</label>
        <ul>
            <li> <a class="active" href="ecom.php">Home</a></li>
            <li> <a href="launch.html">New launch</a></li>
            <li> <a href="offers.html">offers</a></li>
            <li> <a href="login.php">Login</a></li>
            <li> <a href="index.php">Signup</a></li>
            <li> <a href="query.php">Contact Us</a></li>
    </ul>
    </nav>
    <section class="cards-section">
    <?php
while($row=mysqli_fetch_assoc($all_brands)){
          ?>
        <div class="card">
            <div class="card-container">
                <div class="card-front">
                    <img src="<?php echo $row["b_image"];?>"/>
                   <center> <h1><?php echo $row["b_name"];?></h1></center>
                </div>
                
            </div>
        </div>

        <?php  }
        ?>
       
        
    </section>
</body>
</html>