<?php
include 'server.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Add-Item</title>
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
        <a href="sell"> <button type="button">sell</button></a>
        <a href="buyer_home.php"><button>Go Back-</button></a>
        <div class="dropdown">             
        <a href="#"><button><?php echo "Hi! ".$_SESSION["name"]; ?></button></a>
        <div class="dropdown-content">
     <a href="logout.php" name="log_out">Logout</a>
     <a href="#">Wishlist</a>
</div>
</div>
    </div>

        </sectoin>
            <section id="cart-item" class="pt-5 mt-5 container">
                <h2 class="font-weight-bold pt-5">My Wishlists</h2>
                <hr>
            </section>

            <section id="item-container" class="container my-5">
                
                <table width="100%" id="myTable">
                    <thead>
                        <tr>
                            <td>Registered Id</td>
                            <td>Product-Name</td>
                            <td>Categorey-Name</td>
                            <td>Quality</td>
                            <td>Price</td>
                            <td>Remove Items</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                          $buyer_reg_id = $row['buyer_reg_id'];

                          $query = "SELECT * FROM buyer_wishlist WHERE buyer_reg_id = '$buyer_reg_id'";
                          $results = mysqli_query($db, $query);
                          while($row = mysqli_fetch_array($results))
                          {
                            

                         $product_id = $row['product_id'];

                          $query = "SELECT * FROM product WHERE buyer_reg_id = '$buyer_reg_id' ";
                          $results2 = mysqli_query($db, $query);
                          $row2 = mysqli_fetch_array($results2);   
                          ?>
                          <tr>
                            <td scope="row"><?php echo $row2['buyer_reg_id'] ?></td>
                            <td scope="row"><?php echo $row2['item_name'] ?></td>
                            <td scope="row"><?php echo $row2['category'] ?></td>
                            <td scope="row"><?php echo $row2['item_quality'] ?></td>
                            <td scope="row"><?php echo "Rm ". $row2['price'] .".00/-"?></td>

                      </tr><?php }?> 
                        
                    <?php  
            
           /* $seller_email = $_SESSION['email'];
            $seller_reg_id = $_SESSION['seller_reg_id'];
            $query = "SELECT * FROM seller_add_item WHERE email = '$seller_email' OR seller_reg_id ='$seller_reg_id'";   
            $results = mysqli_query($db, $query);       
             
            if(mysqli_num_rows($results)>0){
                while($row = mysqli_fetch_array($results))
            {?>
                        <tr>
                            <td scope="row"><?php echo $row['seller_reg_id'] ?></td>
                            <td scope="row"><?php echo $row['item_name'] ?></td>
                            <td scope="row"><?php echo $row['category'] ?></td>
                            <td scope="row"><?php echo $row['item_quality'] ?></td>
                            <td scope="row"><?php echo "Rm ". $row['price'] .".00/-"?></td>
                            <form method="POST" action="delete.php">
                            <input type="hidden" name="item_id" value="<?php echo $row['item_id']?>">
                            <td scope="row"><input style="background-color:aquamarine;" type="submit" name="delete" class="btn btn-danger" value="Remove"></td>
     
                        </tr>
            </form>
            <?php }
        } */?>
           
                    </tbody>
                </table>
            </section>
</body>
</html>