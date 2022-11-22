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
img#bar-code{
  padding: 1px 4px 6px 8px;
  width: 250px;
  height: 250px;
  border: 1px solid #dadada;
  color: grey;
  font-size: 15px;
  background-color: #f5f8fa;
  position: relative;
  left: 580px;
  top: 100px;
  bottom: -145px;
}
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
        
                <a href="buyer_home.php"><button type="button ">home</button></a>
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
</section>
</div>
<img src="image/download (1).png" id="bar-code">
</body>
</html>