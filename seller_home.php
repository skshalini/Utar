<?php include "server.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/045a26da70.js" crossorigin="anonymous"></script>
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
                <a href="buyer_login.php"><button>Account</button></a>
                
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
                        <li>education</li>
                        <li>electronic</li>
                        <li>home</li>
                        <li>sports</li>
                        <li>others</li>
                    </ul>
                </div>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="img">
                        <img src="./image/nat.jpg" alt="porduct image">
                    </div>
                    <div class="card-name">
                        <p>table lamp</p>
                    </div>
                    <div class="card-price">
                        <button>Rm 1200</button>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="./image/cat.jpg" alt="porduct image">
                    </div>
                    <div class="card-name">
                        <p>table lamp</p>
                    </div>
                    <div class="card-price">
                        <button>Rm 1200</button>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img src="./image/f.jpg" alt="porduct image">
                    </div>
                    <div class="card-name">
                        <p>table lamp</p>
                    </div>
                    <div class="card-price">
                        <button>Rm 1200</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>