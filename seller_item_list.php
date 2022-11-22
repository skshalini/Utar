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
                <a href="seller_update.php"><button>Account</button></a>
                <a href="add_item.php"><button>Add Item</button></a>
            </div>
        </sectoin>
            <section id="cart-item" class="pt-5 mt-5 container">
                <h2 class="font-weight-bold pt-5">Added-Item</h2>
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
            
            $seller_email = $_SESSION['email'];
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
        } ?>
           
                    </tbody>
                </table>
            </section>
</body>
</html>