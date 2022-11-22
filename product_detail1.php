<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product-Details</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">

<style>
   
    .small-img-group{
        display: flex;
        justify-content: space-between;
    }
    .small-img-col{
        flex-basis: 24%;
        cursor: pointer;
    }

    .sproduct select{
        display: block;
        padding: 5px 10px;
    } 

    .sproduct input{
        width: 50px;
        height: 40px;
        padding-left: 10px;
        font-size: 16px;
        margin-right: 10px;
    }

    .sproduct input{
        outline: none;
    }

    .buy-btn{
        background: #ffffff;
        opacity:1;
        transition:0.3s all ;
        border-radius: 20px;
        width: 250px;
        height: 50px;
    }

    .social-media-icon{
        width: 230px;
        height: 300px;
        font-size: 30px;
        justify-content: space-between;
        margin-top: 300px;
        margin-bottom: -68px;
        margin-left: -773px;
        background-color: rgb(226, 207, 183);
    }
    .sell-by h1{
        text-align: center;
        font-size: 20px;
        font-weight: 100;
        margin-right: 760px;
        margin-top: -150px;
    }
    .fa{
        border-radius: 10px;
    }
    .fa:hover {
  opacity: 0.7;
}

  .fa-facebook {
    background: #020202;
    color: white;
    margin-top: 30px;
    text-decoration: none;
}

.fa-twitter {
  background: #000000;
  color: white;
  text-decoration: none;
}
.fa-pinterest {
  background: #070707;
  color: white;
  text-decoration: none;
}
.fa-youtube {
  background: #030303;
  color: white;
}
.fa-instagram {
  background: #080808;
  color: white;
  text-decoration: none;
}
.fa-tumblr {
  background: #0f0f0f;
  color: white;
  text-decoration: none;
}
.sell-by .fa-heart{
    padding: 10px 15px 10px 15px;
    background-color: white;
    margin-left: 150px;
    margin-top: 30px;
    font-size: 20px;
    text-decoration: none;    
}
.chat a{
    color: aliceblue;
    background-color: #7c6509;
    border-radius: 30px;
    text-decoration: none;
    text-align: center;
    padding:9px 21px 12px 10px;
    margin-left: 115px;
    font-weight: 600;
}
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
        </sectoin>
    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-4 col-md-12 col-5">
                <img class="img-fluid w-100 pb-1" src="image/table_lamp2.jpg" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="image/table_lamp2.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/table_lamp2.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/table_lamp2.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/table_lamp2.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-12">
                <h6>Home/Table_lamp</h6>
                <h3 class="py-4">Electronice material</h3>
                <h2>RM 700.00</h2>
            
                <button class="buy-btn"><a href="QR_code.php">Buy Now</a></button>
                <h4 class="mt-4 mb-4">Product Details</h4>
                <span>A table lamp is a source of light that stands on a table or any piece of furniture. In the family of lamps, table lamps serve as the easiest lighting solutions.Table lamps serve primarily to generate illumination. Often, they are placed on the bed's side tables if not anywhere else in the house. Apart from providing reading light, they also account for nighttime luminescence. Different people employ different styles.</span>
            </div>
            <div class="social-media-icon">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-pinterest"></a>
                <a href="#" class="fa fa-tumblr"></a>
            </div>
            <div class="sell-by">
                <h1>Sell by  : Ali bin Abu</h1>
                <a href="" class="fa fa-heart"></a>
            </div><br>
            <div class="chat">
                <a href=""> > Chat Now</a>
            </div>
        </div>
    </section>
</body>
</html>