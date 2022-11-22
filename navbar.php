<?php
include ("server.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 115px;
            background-color: rgb(64, 145, 226);
        }

        .container {
            border: 325px solid rgb(249, 250, 246);
            width: 533px;
            margin-left: 57px;
            margin-top: -90px;
            margin-bottom: -85px;
            background-color: white;

        }

        #mySidenav a {
            position: absolute;
            transition: 0.3s;
            padding: 45px;
            width: 120px;
            text-decoration: none;
            font-size: 18px;
            color: white;

        }

        #mySidenav a {
            left: 550px;
            margin-top: 6px;
            margin-left: -377px;
            padding-left: 40px;
            padding-right: 78px;
            padding-top: 35px;
            /* box-shadow: rgb(219, 8, 8); */
        }

        #mySidenav a:hover {
            background-color: #2EE59D;
            box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
            color: #fff;
            transform: translateY(-7px);
        }

        #Update {
            top: 23px;
            background-color: #04AA6D;
        }

        #Items {
            top: 128px;
            background-color: #2196F3;
        }

        #Wishlist {
            top: 235px;
            background-color: #f44336;
        }

        #contact {
            top: 200px;
            background-color: #555
        }
    </style>
    <title>Nav Bar</title>
</head>

<body>
    <div class="container">
        <div id="mySidenav" class="sidenav">
            <a href="#" id="Update">Udate Account</a>
            <a href="#" id="Items">My Items</a>
            <a href="#" id="Wishlist">Wishlist</a>
        </div>
    </div>
</body>

</html>