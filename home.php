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
            </div>
        </sectoin>
        <section class="main-body">
            <div class="search-bar">
                <input type="text" id="#inlineFormInputName" required placeholder="Search..." name="search">
                <button class="btn" name="submit" type="submit"> <a href="search.php"><i class="fa fa-search"></i></a></button>
            </div>
            <div class="categories">
                <div class="categories-title">
                    <h3>
                        categories
                    </h3>
                </div>
                <div class="categories-list">
                    <ul>
                        <a href="education.php"> <li>education</li></a>
                        <a href="electronic.php"><li>electronic</li></a>
                        <a href="home_app.php"> <li>home</li></a>
                        <a href="sports.php"><li>sports</li></a>
                        <a href="other.php"><li>others</li></a>
                    </ul>
                </div>
            </div>
            <div class="card-list">
                <div class="card">
                    <div class="img">
                    <a href="buyer_login.php"><img src="./image/table_lamp2.jpg" alt="Lamp image"></a>
                    </div>
                    <div class="card-name">
                        <p>Table lamp</p>
                    </div>
                    <div class="card-price">
                      <a href="buyer_login.php"><button>Rm 700</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                    <a href="buyer_login.php"><img src="./image/sport4.jpg" alt="Cricket set image"></a>
                    </div>
                    <div class="card-name">
                    <p>Cricket Set</p>
                    </div>
                    <div class="card-price">
                    <a href="buyer_login.php"> <button>Rm 900</button></a>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                    <a href="buyer_login.php"> <img src="./image/sports3.jpg" alt="Sports shoes image"></a>
                    </div>
                    <div class="card-name">
                        <p>Sports shoes</p>
                    </div>
                    <div class="card-price">
                    <a href="buyer_login.php"> <button>Rm 1200</button></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>