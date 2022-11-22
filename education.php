<?php
include 'server.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Education</title>
    <style>
      *{
    margin: 0;
    padding: 0;
}
.flex-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100%;
}

/* header */
.header {
    background-color: gray;
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
    /* display: block; */
    width: 12%;
    text-transform: uppercase;
    word-wrap: break-word;
    text-align: center;
    font-stretch: 0px;
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

.navigate-btn {
    margin-top: 90px;
    display: flex;
}

.navigate-btn li {
    list-style-type: none;
}

.navigate-btn a {
    padding: 6px 30px;
    margin: auto 6px;
    background-color: rgb(225, 228, 36);
    border: none;
    border-radius: 10px;
    cursor: pointer;
    letter-spacing: 1px;
    text-transform: capitalize;
    text-decoration: none;
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
    <div class="flex-container">
        <sectoin class="header">
            <div class="logo">
                <h1 style="color: rgb(95, 243, 248)";>
                    utar
                </h1>
                <h1 style="color: rgb(95, 243, 248)";>
                    c2c
                </h1>
            </div>
            <div class="title">
                <h2>
                    utar c2c <span>online&nbsp;purchase</span>
                </h2>
            </div>
            <div class="navigate-btn">
                <li><a href="home.php">Home</a>
                </li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="buyer_login.php">Login/Register</a></li>
            </div>
        </sectoin>
    </div>
    <section id="cart-item" class="pt-5 mt-5 container">
        <h2 class="font-weight-bold pt-5">Education</h2>
        <hr>
    </section>

    <section id="item-container" class="container my-5">
        <table width="100%">
            <thead>
                <tr>
                    <td>Add</td>
                    <td>Image</td>
                    <td>Product-Name</td>
                    <td>Price</td>
                    <td>Quality</td>
                    <td>Categorey-Name</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="buyer_login.php">Add</a></td>
                    <td><img src="image/book1.jpg" alt=""></td>
                    <td><h5>Machine Learning Book</h5></td>
                    <td><h5>Rm 69</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Education</h5></td>
                </tr>
                <tr>
                    <td><a href="buyer_login.php">Add</a></td>
                    <td><img src="image/book2.jpg" alt=""></td>
                    <td><h5>C++ Book</h5></td>
                    <td><h5>Rm 120</h5></td>
                    <td><h5>New</h5></td>
                    <td><h5>Education</h5></td>
                </tr>
               
               
</body>
</html>