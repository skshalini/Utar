<?php
include 'server.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Wishlist</title>
<style>

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


/* header */
.header {
  background-color: rgb(119, 114, 114);
  display: flex;
  flex-direction: row;
  color: white;
  width: 100%;
  height: 8rem;
  justify-content: center;
  box-shadow: 5px 5px 10px blanchedalmond;
}

.logo {
  margin-top: 12px;
  padding: 5px;
  width: 12%;
  text-transform: uppercase;
  word-wrap: break-word;
  text-align: center;
  font-stretch: 0px;
}
.logo h1 {
     color: rgb(95, 243, 248);
     letter-spacing: 1.5px;
     font-size: 35px;     
}
.logo h3 {
  color: rgb(95, 243, 248);
  letter-spacing: 1.5px;
  font-size: 25px;     
}
.title {
  padding: 5px;
  width: 20%;
  text-transform: uppercase;
  letter-spacing: 6px;
}

.title h2 {
  line-height: 30px;
}
.title h2 span {
  line-height: 50px;
}

.all-btn {
  margin-top: 90px;
}     
.all-btn button {
  padding: 6px 30px;
  margin: auto 6px;
  background-color: rgb(225, 228, 36);
  border: none;
  border-radius: 10px;
  cursor: pointer;
  letter-spacing: 1px;
  text-transform: capitalize;
}
/* Add-item */

#item-container{
    border-collapse: collapse;
    width: 100%;
    table-layout: fixed;
}

#item-container table thead{
    font-weight: 700;
}

#item-container table thead{
    background: #fd8c66;
    color: white;
    border: none;
    padding: 6px 0;
}

#item-container table td{
    border: 1px solid #b6b3b3;
    text-align: center;
}

#item-container table td:nth-child(1){
    width: 100px;
}

#item-container table td:nth-child(2),
#item-container table td:nth-child(3){
    width: 200px;
}

#item-container table td:nth-child(4),
#item-container table td:nth-child(5),
#item-container table td:nth-child(6){
    width: 170px;
}

#item-container table tbody img{
    width: 100px;
    height: 80px;
    object-fit: cover;
}

#item-container table tbody a {
    color: #fd8c66;
}
    </style>

</head>
<body>
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
                <a href="buyer_home.php"><button>Go Back-</button></a>
            </div>
        </sectoin>
            <section id="cart-item" class="pt-5 mt-5 container">
                <h2 class="font-weight-bold pt-5">My wishlist</h2>
                <hr>
            </section>

            <section id="item-container" class="container my-5">
            <table width="100%">
            <thead>
                <tr>
                    
                    <td>Image</td>
                    <td>Product-Name</td>
                    <td>Price</td>
                    <td>Quality</td>
                    <td>Categorey-Name</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><img src="image/sports2.jpg" alt=""></td>
                    <td><h5>Stylist-Shoes</h5></td>
                    <td><h5>Rm 69</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Sports</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/sport4.jpg" alt=""></td>
                    <td><h5>Cricket-Kit</h5></td>
                    <td><h5>Rm 120</h5></td>
                    <td><h5>Old</h5></td>
                    <td><h5>Sports</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/sports1.jpg" alt=""></td>
                    <td><h5>Foot-Boll</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Sports</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/sports3.jpg" alt=""></td>
                    <td><h5>Latest-Shoes</h5></td>
                    <td><h5>Rm 200</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Sports</h5></td>
                </tr>
                <tr>
                   
                    <td><img src="image/book1.jpg" alt=""></td>
                    <td><h5>Stylist-Shoes</h5></td>
                    <td><h5>Rm 69</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Education</h5></td>
                </tr>
                <tr>
                   
                    <td><img src="image/book2.jpg" alt=""></td>
                    <td><h5>Cricket-Kit</h5></td>
                    <td><h5>Rm 120</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Education</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/book3.png" alt=""></td>
                    <td><h5>Foot-Boll</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>Old</h5></td>
                    <td><h5>Education</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/cat.jpg" alt=""></td>
                    <td><h5>Cat-Wallpaper</h5></td>
                    <td><h5>Rm 69</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                   
                    <td><img src="image/flare.jpg" alt=""></td>
                    <td><h5>Dark-Red Wallpaper</h5></td>
                    <td><h5>Rm 120</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/img2.png" alt=""></td>
                    <td><h5>juicer Machine</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                   
                    <td><img src="image/img3.jpg" alt=""></td>
                    <td><h5>Table Fan</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                   
                    <td><img src="image/nat.jpg" alt=""></td>
                    <td><h5>Nature Wallpaper</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                 
                    <td><img src="image/table_lamp.webp" alt=""></td>
                    <td><h5>Table Lamp</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/table_lamp2.jpg" alt=""></td>
                    <td><h5>Study Lamp</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>old</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
                <tr>
                    
                    <td><img src="image/table_lamp3.jpg" alt=""></td>
                    <td><h5>Old Lamp</h5></td>
                    <td><h5>Rm 170</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Other</h5></td>
                </tr>
</body>
</html>