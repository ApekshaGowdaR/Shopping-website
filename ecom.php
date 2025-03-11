<?php
session_start();
include("connection.php");

$sql= "select * from products";
$all_product = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopperStop.Com</title>
    <link rel="icon" href="img\shoper.png" type="image/x-icon">
    <!---link to css-->
    <link href="ecom.css" rel="stylesheet">
    <!---box icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body >
    <!--header-->
    <header>
        <!--nav-->
        <div class="navv container">
            
        <a href="#" class="logo">
                <img src="img\shoper.png" class="sslogo">
                ShopperStop.Com
            </a>
            <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php"> Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php"> Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="launch.html">New launch</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="offers.html">Offers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="brands.php">Brands</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="query.php">Contact us</a>
            </li>
            
          </ul>
                
            
            <!--cart icon-->
            <i class='bx bx-shopping-bag' id="cart-icon"></i>
            <!--cart-->
            <div class="cart">
                <h2 class="cart-title">
Your Cart
                </h2>
                <!--content-->
                <div class="cart-content">
                <div class="cart-box">
                        <img src="img/p2.jpg" alt="" class="cart-img">
                        <div class="details-box">
                            <div class="cart-product-title">
                                BLACK GOWN
                            </div>
                            <div class="cart-price">$15</div>
                            <input type="number" value="1" class="cart-quantity">
                        </div>
                        <!--remove cart-->
                        <i class='bx bxs-trash-alt cart-remove'></i>
                    </div>
                </div>
                <!--total-->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">$0</div>
                </div>
                 <!--buy button-->
                 <button type="button" class="btn-buy">Buy Now </button>
                 <!--cart close-->
                 <i class='bx bx-x' id="close-cart"></i> 
            </div>
        </div>
    </header>
    <br>
    <br>
    <!--carousel-->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img\ssoffer2.jpg" class="d-block w-100" alt=" ">
          </div>
          <div class="carousel-item">
            <img src="img\ssoffer.jpg" class="d-block w-100" alt=" ">
          </div>
          <div class="carousel-item">
            <img src="img\offer2.jpg" class="d-block w-100" alt=" ">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
     
    <!--shopp-->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>
        <!--content-->
        <div class="shop-content">
         
         
         <?php
while($row=mysqli_fetch_assoc($all_product)){
          ?>
            <!--box1-->
            <div class="product-box">
                <img src="<?php echo $row["prod_img"];?>" alt="" class="product-img">
                <h2 class="product-title"><?php echo $row["prod_name"];?></h2>
                <span class="price">$<?php echo $row["prod_price"];?></span>
                <i class='bx bx-shopping-bag add-cart'></i>

            </div>

           <?php
}
           ?>
            
        </div>
    </section>
    <!--brands-->
    
    <h1><center><a href="brands.php">THESE ARE THE BRANDS WE OFFER</a></center></h1>
    <DIV class="brands-section">
        <div class="card" style="width: 18rem;">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIQEhMSEhISFRUVFxcWFxUWFRgVFxAXGBUWGRYWFRgYHyghGBolHRgVIzEiJSorLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0lICYtLy0vLS0tLy0tLS4tMC0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAMYA/gMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYBBAcDAgj/xABEEAABAwIDBAYECwYGAwAAAAABAAIDBBEFEiEGMUFRBxMiYXGBMnKRwRQjMzVCUqGxtMLDQ2KSorLRFSU0U4Lhs9Lw/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAEEBQMCBv/EADQRAAIBAgQCCAQFBQAAAAAAAAABAgMRBBIhMUFxBRMyUWGBkbGhwfDxFCIzctE0QlKC4f/aAAwDAQACEQMRAD8A7iiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIsXQGUWLpdAZRYul0BlERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBYK8p5msaXOIAG8ncFW6jHnSSMZH2WF7QSfSeMw9g+3wVbEYqnQSzvV7Lj9vFnWlRnUvlW3Em6/E44PTOp3NGpKhKnadx+TjA73an2D+6+NrvlWep+YqBWLj+kK8asqUHZLu3NHDYSnKCnJXv6EjJjdQ79oR6oA9y8v8Un/AN6T2rTRZUsRWk7ucvVl1Uqa0UV6I32Y1UD9qT4hp9y36faaQemxjhzHZPvCgUXuGMxEOzN+bv73PEsPSlvFe3sXaixyGWwvldydp7DuKlLrmyksMxmSGwN3s+qTqPVPu3LWw3TF3lrLzXzRSrdH8afoXhFrUdWyVocw3H2g8iOBWyt6MlJXTujNaadmERFJAREQBERAEREAREQBERAEREAREQBERAF5vfYE8ALr7K0fhTXiYD6F2k9+W5HldeZSSJSuVLFsUdUO5MHot/Me/wC5a9D8rH67P6gtdm4eC2KD5WP12f1BfEqrKrVU5O7bR9FkjCGWPBEvtf8AKs9T8xUCp7a/5VnqfmKgVY6R/qqnP5I54T9CHIIiyqR3MIiKAFlYRCSzbLvyxTO5G/jZgKmqCrbMwPadDw4g8Qe9Qezn+nn8/wChReBYh1Dxc9h1g7u5O8vuX0WHxaoU6EZdmSfk76MyatDrJ1Gt0/l/wvaLAWVuGcEREAREQBERAEREAREQBERAEREAREQGhi1X1MT38dzfWOgUTs18jN4nz7C89r59WR+Lj9w/MvTZdt4pQN5Nva1Y0qznj8i/ti152u/ki/Gnlwubva9L6EBQ0j5iGsFza54ADmSvdlMYp42OLbhzLgG9u0ND3qYqj8Bhaxgu9+hfbS4Gp/sFA0J+Nj49tmvPtBZNSjDDuEHrO6v3LwX8l6FSVVSkuzrbvfiWHHMMfPK3LYNDbFxOl7nQcytGbZuVou1zH92rT5X0W5tRXvYWsY4tuLkjedbAX4cVoYFiEgmYwvc5riQQ43+iSCL7tyv4lYSWKlCcZZm1d32b2VvQq0uvVFSi1ZLa2/MiCLaHQ7rcu5bVFhss2rG3H1joP+1v4rSB9Zk4PLb27x2vsBW5j2JOhLYYrNs0EkDcOAHLd9ypQwcIdZKtJ5YvLpu39e5YliJSyxgtZK+vBEPPhEzHNaWauNgQQQTyvw81rVMDo3FrxZw3jQ2v4KbwLF5HSCOR2YOvYm12kC+8bxoV6zUYlrXB2rWhriOdgLD2n7F7eDpVaanQvdyy2fDRt7cr3IWInCbjVS0V7rjr/JDU+FzSC7Y3EczYA+FzqvCogfGcr2lp5H3c1V9qek2pM7mUbmxRRuLQ7I17pcpsScwIDTY2A4W14KxbG7asxQfBKoNZPqY3t0bLYfRB9F45cRfwV2p0LFQ/JJ5vHZ/DQl1a0VnnFW8Hqiy7Of6efz/oUXg+HNnD8z8uUA8Pab8P7qawmldFFUMcNRm14OGTQhaGzlHHK2TOwOygWvw0P9guLo5vw9OcU9J3T09bHF1LdbOL4qzWpLbM1vWRZSe0zTxH0T7vJTSpGzFRkmaOD25T47x9xHmrsFp9GV3Ww6b3Wj8tvhYqYyn1dVpbPUyiItAqhERAEREAREQBERAEREAREQBYKysFAUfaGTNUSd1mjyaPeSpTZc2ilI4G/wDIonFNp8IjmkZNI4StcQ8dXObOG/VrbHyWKbb3B4muaydwDt/xNQb6W4sWPRwFWGJlWbWubZ667cDTnJyoqEYS4cCVwqpFXE6GU9u1w7ie8d4P2KHhgdHOxjhq2Rg8e0NR3KS2cxPDKpwNJK0vbqGkyMfpv7EliR5Lyx3anDIJ8lS97JY7HWGfde7SC1tnDTeLrzPo+rUpwztZ4vfvXj4kRrZakowi7NXtbZ+Hgeu1/wAqz1PzFR+B/wCoi9b8rkqtusGmIc+ZxIFh8VUDTyYvOLbTBGODmzEObqPiqnw4sXmt0dUniutTVsyfjw8DpTqSjR6twle1tiUxeo6usD+DcpPhYg/Zf2L12iw58jhLGM4LQDl1PcRz3r52pxSgpHMdWOLXSA5SGyuuGWv8mDbeN69qnHqKhp4p3yOZDKR1ZyyvvmaXCzQCW6A8Au7wMpurCo1lk7qz1T5fWxwVZpU5QTulbbR6Gts/hbxIJHtLQ29gdC4kEbuS2JqwRVji7RrmtaTy0BBPmPtUZJ0iYS5zXGodduo+JqAAedslitep22wSVxe+Ylxtr1VQN27cxT+ClSpRhReqkpXb34PZeVj1epOblUhKzVtFscy2+2dfQVTxY9VK5z4n8CHHMWX+s0ki3KxVeglcxzXscWuaQ5rhva4G4I8Cu6RbQ4RX5KIP64SGzI3xTHUAnsue3sEAGxuLKGxmh2do5XQTsc2RoBIAqX2DhcatuDp3rSTbV2WKeKklknB35bot+y+OivoRPoHFjmyAfRkaLPHhfUdxC8tkvQm8G/c5auw0+GPZPHh2bKMplaRM2xcHBpHWjiGkacgtWi2+weIERzOAdv8Aiqg39rFVrUJTr06iekU166FNJqNSnGL1a4bczWw+TK+N3JzD9ouuiNXPBtfgWlpTw/ZVP/quhsOi4dG4SphoyjJp3tt8ScdUzyTytc1Y+kRFplEIiIAiIgCIiAIiIAiIgCIiALBWVgoD85dI0HV4nVt5va7+ONjveq4uh9NeH5KuKe2k0WU+tGdfse32L02Lweggw5+JVsfXDMWtYRnDbSdWAGGwLnO4nQC27VQb0K6jQhJq97LTizncMzmOa5ji1zTdrmmxaRuLTwK6jtxF8PwmlxEgCZgbnIFszXHJIPDOA4efNa2IbOUeK0z6vC4nRzRuyvp9GB5sCQG3ytdYggg2O467pPa1n+HYHFSSEda/JHYG+peZZLdw1F/BDjVrKc6dtJKVrPdd/kcgQa7l0PBMPo8OoI6+rhFRNOfiIXWytGuU2Om4Zi4g2uAO+Twiehx4SU7qZlNUtbnjfHbcDa4IDb2JF2kWsdO4d3ikrvK8qdm9Ppnz07b6P1Zv01npG+Z8O8Yvwz1jp030d+U36az0j/M+HeMX4d6FOl2KH7mcrJVmwXYKvqwHshDGHUPldkDhzDdXH2KY6KdnopXy1tSB1NNq3N6JeBmL3cwwWI7z3Lw2o6Sqqpe5tM8wQ7m5flJB9Z7t7b8hbxQtzq1JTcKSWm7ey8Cy7K9GFRSVUFTJUQkROLixrXdq7XNsHG3Pkqn0s/Oc/qRf+MKry4hM83dNK48zK8+9eL3lxu4knmSSfaUJp0Jqp1k5X0ttY6l0Fb6/wg/XXKW7guq9Be+v8IP11ypu4KRS/Xq/6+xs0EWeWJn13sb/ABPA96/VDW2Fl+dOjnDvhGIUzbXDHda7wj7Q/myL9GBCj0lK84ruXuZREQzgiIgCIiAIiIAiIgCIiAIiIAiIgKR0s4Mamhc9ou+nPXDvaARIP4ST/wAVzfYraqGCGWhrozJSza6XJiJtfQakEgG7dQRcX4d8laCCCLgixHMHevzhtvs8cPq3xWPVuu+E8Cwn0fFu4+APFDSwUo1IujPmu/y+R1TYjE8Lif8ABcPc9zpc0riQ86taB2nPtwAs0eK5x0oYhNLiMzJT2YSGRt4MY5rXX8XXBJ7hyUbsViIpq+mlJs0SBrj+68Fhv3dq/krT01YZ1dVHUAdmaPKT+/Gba+LS3+EqDvCkqOJXG6er3v8AY3JsIfiuD0ZprOlpc0bo7gF1hlcBfQOsGOF94K2Oi3Y+opZnVVSzqWsY5rWuIzOzWLnGxsGgDjz7lQNmdpqnDnl8DhZ1s8bhmZJbcSLix7wVMbQ9ItXWs6k9XFG6weI75ni4u0uJ0aeQ3qRKjW1pxtlbevFX4Fj6djc0fhN+mvrpH+Z8O8Yvw71jp2GtH6s36az0j/M+HeMX4d6g5UuxQ/czzwR2TZupc3e50gPgZGsP2Lly6jsOz4XgldSN1kYZCG8TmAkZ7XAjyXLroWsN2qi45j1o6SSZ7Y4mOke7RrGi5P8A137gpXGNkq2kZ1k9O9rOLwWvDfXyk5fP3q5dF+WmoK+uDA+WIPa0H6rImyW7gXO19UclvdHG1VTiM09JWZZY3xOdqxrcou1rmEAatIfx10Q8VMRUTk4pWjv3vka/QVvr/Cn/AF1ytvBdd6HYBFUYpENRG9jAeYZJUtH2BcxwDCZayaOni9N5te1xG0ek93cB7hxQ90pLrqsr6flfwOn9COC2ZNWOHp/FRn90G8hHi6w/4Lqq0cKw5lNFHBGLMjaGtHHTieZOpJ71vKTGrVHUm5BERDkEREAREQBERAEREAREQBERAEREBgqtbcbMMxGnMZs2Vt3RSEeg7kf3Xbj7eAVmWEPUZOLTW5+Va+kfC98UrCxzCWvad4PvFuPIhdcP+eYMLa1MHDiZY2n+tp/m7lYNudiosRZmBEdQ0WZLb0hqQyTm258Rw4g8v2eranAay1TG5rH9mQDVsjAdJIj9Mt9tiQdVBq9asRBOGk46297cymn/AO94QcPEfeuh9JmyzR/mNJZ8E1nyZNQwut8a230HX15HxNueDh4j70L1KrGrHNH7HVOnffR+E36adI3zPhvjF+GenTtvo/Vm/TWekf5nw7xh/DvQzqXZofuZTNhdpnYdU9ZYuieAyVg3louQ5v7zSfYSFeK/YOixQmqoKprM/aczLmYHHeclw6NxO8H2LkqNdY5gSCNxBsR4EahC5UoOUs8JZX635ndNhNj58N64TVEMkMre0zIQMw0zFzjaxbcEW10101Yy6kwajlqaKBmaUhjXMOZuY5shLr6Rg30HHRcOnmdJ6bi+27O4ut7SVfejXF2ytfhVRE+WCYEsytJMBJu4m2rWZrODvou8dBUrYaSvUlLNtdLTQlOg15c+vJNyRASTvJJnJJVo6Odjhh0OeQA1EoGc6Hqm7xE08hxPE9wC29i9jYsM64skfIZS25dYWazNkbYaX7TrnjfgrUpKeIr55yyvR2+CCIiFYIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCLSrsQjgF5HZRqb5XEAC1ySAQN43rNLXRykhjrkAEggtLQS4AkOANiWu9hQG2tHFMMhqYzFPGyRh+i4X8xxB7wt9EBVMH2afRF0UL+spX3zU82phzekYn/AEmm+rHb99xrfne33R2+lJqKRrnw3u5gu59Prw4uj+0eGo7esEJYsU8TUhPPfffx5/zuci6dj2qP1ZvvjX10jfM2HeMP4Z66XiODU9SAJ4YpbXt1jGuy332uNF81uB008bIZYI3xx2yMc0FrLAtFh3AkKLHuGJUVTVuy7n5gJA32W/huC1NSQIKeWS/FrDl83+iPMr9GUmzdHCbx0tO08xEy487XUoG20GgU2LMukv8AGPqzjWAdEk7yHVcjYm/7cdnvI73Hst8rrqWBbP01Czq6eIMB3nUueeb3HV3mtyaqaxzGOPaeSGixJdYXO7gOJ3bl6fCG5+ruM+XNl45b2v4XQpVcRUq9p+R7IsXWsyrYTlD25ruFri922zC3G1xfxCHA2kREAREQBERAEREAREQBERAEREAREQBERARm0YJpZ7XJyHdqobF4ZOvrJWSSsMdLE5mTRrntNU7tadvgMu7XmQVbFiyApQr6h1RYyNZJ1oDI3Sua10NxuhEZzhzLnOHaOuLjKQpPampkj6oB2SIl3WP6wxagDI10ga4sae0b6atAuL2NislkBSvh0rTSmScuJtlZG8tdK0zWY8XjDag5LB4s2w7QtcFeYxKYNnEcr5HBzM8gcS2JhmIf2HRkwSBuhbZwAGbgVebJZAUumkmlELW1DjC+py5opTK7qxSzOdGZiwHLnaw5hdwNxm3AZNc5rslTUSxRMMrWSjsmZ7Zi1oe4N1cGZLN+nc6OsbXOyWQFKZW1DqgN63LJ1oDGPkczPDca9QIu0XMu7NfsuNrtsWqZ2hqRG6ISSPigOfrJGkts4AdW18g1jae2c2mrWi+tnTlksgKrhYfJUU8jnSlrWVQY43b1rOsgyOe3QG4vYkC4aDZfW0DpBOerc9hcynZnaLlofWNa+1wRfK47wrRZLICo1c7oXuiknlbTtkbmlJOdjXQ5gx0u9rC8envFw2+otpUtZMGl0LpH3dWFr3RXc8N6sMeG2GY2vltbPYc1e7JZAVrA6xr6hzYaiWeLqrku7TWyZwDZ9h2rb237OmgurMsWWUAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREB//9k=" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">KHADI</h5>
              <p class="card-text">Branding Khadi as an Indian product entitles only the Khadi and Village Industries Commission (KVIC) to promote it and brings it under the administrative purview of the Ministry of Micro, Small and Medium Enterprises (MSME).</p>
              <a href="https://www.khadiindia.gov.in/" class="btn btn-primary">CLICK HERE</a>
            </div>
          </div>
    <div class="card" style="width: 18rem;">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQsAAAC9CAMAAACTb6i8AAAAflBMVEUAAAD////W1taWlpbOzs4xMTHR0dGQkJDIyMj19fX5+fmZmZnx8fHv7+/8/Py8vLynp6cNDQ3a2tqysrKIiIjk5OQ7Ozs2Njafn58iIiJ9fX0cHBxra2vDw8Pi4uJQUFApKSlGRkZjY2N0dHRYWFhMTEwWFha2trZxcXGCgoLhXsZ4AAAEdklEQVR4nO3ZW1viOhSA4QYRKOVQCgiCIjgo8v//4ADtSqFN6Aozz+yL/b13FnJgpVk5GEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAv7Xu7P/D1pfpX6lmNjJO/bgwUrUzNnNVc7tK9f3rNkenp4OTefoa9BtOlf6VkUjN/tkhaksHh9+63piVprnJ4lL9WqrvrKXFl6+37rsNy2fIb9gYswn5vs+7mbgej6VTuuGen4c6pNleUX2v8twOwYu+rqPRjkSDzsj1NDAUl96YkEnri0WUyQujr+syz4JGwmMzcDwMDEVUzPqAWe6Nxac0ra5smn9/qW/cZ9SqP7OhGAb1xrzrm/XGIgrNGM9SYK1v3cPxAw6BoXixGe9D3aw/FrKuHZU1yaQyY3XjHmszrT4KDUWUzYdFCX02b34vlLH4MTbd7tSta5WhcC4wdb/Mx0rK/NK20hyLN11FcRy1ihKZtnGtqQ2FtkS/l6+pZ65E7OSNxVvYKKenmO0Cw6cVHor0nLT2UixRlvLGohMU1a05p/5xUBmtMhTKCXJK45fFzE5aZTb3xeJJ6pmpqmlf9mTfUuhJ2WmNNDgUUSff5CykpDKbu2Oxa4dV81lk/qUUU3e7UfgEOfXmp1JWt3mWWMyXaW467WX2mDhU7qiHsmmOi4IHdccbPPBWRLEk74n8EF02l1gMD+OcfSNa06V2m/JkF167kAUcY+4pQ6E5meaSsnE701XZvD5HZCnS71HWV0eEjURSXfoeG4qB/q14vX4pByETrB6LL2lflzWj8xG7fIHsQhZ02Pd4JBSnX3T1x4/U0FWVrMYikssL7Ynz4+b4IHNMn+q8bCYeBBxx9re3BrL/c94CVDhisZUuKM/+8+uBiCbBr5XPQ6GIhqbdKbVlxtePOHWuNdW+mqo+zEx807rcFv7pRUYZitoEWfmHqWsO3Wszu64+N7bo3F/EroceEzM83rYuwVCMxB02FHF9RGbezdykPjflzWi+lHLGwq6MikX1UMuSXSm9bS7tldhQOO6SEu9N4ries/XZ3L3v1K+rO9OuPZObg/onamUoXPN06vtdX642JZs33g26Y/EhXWk8+28c89BeDz78D4IyFM4tVs93eN6Ybf2hPZY0ZXPP2UzW1bih+Mp5vSkLmfKWtsZuF10TJDqfoRcBvbHHkqZ11RMLu642nP37zmDZy0bt/eAtm3D6nnvnjWeFG3kuC+RY0rBJ8J3Z7bp6d8eXejb6cif30LpqQ+G9Bond9U59k3ImNW7vNuy9y5GV8d6hfeFNj1L6gf+v2kXMpN0np2516q6S8+PExLP8C4msf/ukKFDILjUmlfF9Lb4lK8Y8bzfZ1rq0vDy/Hf+XS+nuxqRF45KWvotqJWOYvPGQJHrstAstn05lgKbZ5bEtkUnKP+YftKTGTv5xJRaL4ludm2+1sjIpvV/3KLvNG/usKCyNy4nktXVbbVH6sbwBAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACA/5/fQdAvARJjUboAAAAASUVORK5CYII=" class="card-img-top" alt=" ">
        <div class="card-body">
          <h5 class="card-title">ZARA</h5>
          <p class="card-text">Zara is one of the largest international fashion companies.Know more about it!One of the secrets to Zara's success includes using Radio Frequency Identification Technology (RFID) in its stores. </p>
          <a href="https://www.zara.com/in/en/z-company-corp1391.html" class="btn btn-primary">CLICK HERE</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">H&M</h5>
          <p class="card-text">H&M-Hennes & Mauritz AB, is a fashion company with products for women, men and kids. H&M's business concept is to offer fashion and quality at the best price in a sustainable way.</p>
          <a href="https://www2.hm.com/en_in/index.html" class="btn btn-primary">CLICK HERE</a>
        </div>
      </div>
      
      <div class="card" style="width: 18rem;">
        <img src="data:image/png;base64,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" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">GUCCI</h5>
          <p class="card-text">Gucci is an Italian fashion brand founded in 1921 by Guccio Gucci, making it one of the oldest Italian fashion brands in operation today.</p>
          <a href="https://www.gucci.com/us/en/st/about-gucci" class="btn btn-primary">CLICK HERE</a>
        </div>
      </div>

      
    </DIV>

    <FOOTER>
    
    </FOOTER>
      
     

    
<!--link to js-->
<script  src="ecom.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>