<?php include "server.php" 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/045a26da70.js" crossorigin="anonymous"></script>
<style>
    .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(225, 228, 36);}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>

<body>
    <div class="flex-container">
        <sectoin class="header">
            <div class="logo">
                <h1>
                    utar
                </h1>
                <h3>
                    c2c
                </h1>
            </div>
            <div class="title">
                <h2>
                    utar c2c <span>online&nbsp;purchase</span>
                </h2>
            </div>
            <div class="all-btn">
        
                <a href="home.php"><button type="button ">home</button></a>
                <a href="sell.php"> <button type="button">sell</button></a>
                <a href="buyer_login.php"><button>Login/Register</button></a>
                <div class="dropdown">             
                <a href="#"><button><?php echo "Hi! ".$_SESSION["name"]; ?></button></a>
                <div class="dropdown-content">
             <a href="logout.php" name="log_out">Logout</a>
             <a href="buyer_wishlist.php">Wishlist</a>
  </div>
</div>
            </div>
        </sectoin>
        <section class="main-body">
            <div class="search-bar">
                <input type="text" placeholder="Search..." name="search">
                <button class="btn" name="submit" type="submit"><i class="fa fa-search"></i></button>
            </div>
            <div class="categories">
                <div class="categories-title">
                    <h3>
                        categories
                    </h3>
                </div>
                <div class="categories-list">
                    <ul>
                     <a href="education2.php"><li>education</li></a>
                     <a href="electronic2.php"><li>electronic</li></a>
                     <a href="home_app2.php"><li>home</li></a>
                     <a href="sports2.php"><li>sports</li></a>
                     <a href="other2.php"><li>others</li></a>
                    </ul>
                </div>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="img">
                    <a href="product_detail1.php"><img src="./image/table_lamp2.jpg" alt="porduct image"></a>
                    </div>
                    <div class="card-name">
                        <p>table lamp</p>
                    </div>
                    <div class="card-price">
                    <a href="product_detail1.php"> <button>Rm 700</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                    <a href="product_detail2.php"><img src="./image/sport4.jpg" alt="porduct image"></a>
                    </div>
                    <div class="card-name">
                        <p>Cricket Set</p>
                    </div>
                    <div class="card-price">
                    <a href="product_detail2.php"> <button>Rm 900</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                    <a href="product_detail3.php"> <img src="./image/sports3.jpg" alt="porduct image"></a>
                    </div>
                    <div class="card-name">
                        <p>Sports Shoes</p>
                    </div>
                    <div class="card-price">
                    <a href="product_detail3.php"><button>Rm 1200</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>