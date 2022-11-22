<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Update</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/045a26da70.js" crossorigin="anonymous"></script>
<style>
.update-page {
  width: 440px;
  padding: -100% 0 0;
  margin: auto;
}
img#bar-code{
  padding: 1px 4px 6px 8px;
  width: 150px;
  height: 150px;
  border: 1px solid #dadada;
  color: grey;
  font-size: 15px;
  background-color: #f5f8fa;
  position: relative;
  left: 1000px;
  top: 100px;
  bottom: -145px;
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
            background-color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            letter-spacing: 1px;
            text-transform: capitalize;
            text-decoration: none;
        }

        /* side nave */


        .sidenav {
            margin-left: 100px;

        }

        .sidenav li {
            list-style-type: none;
        }

        #mySidenav a {
            position: absolute;
            text-align: center;
            transition: 0.3s;
            padding: 45px;
            width: 200px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            margin-top: 200px;

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

.form {
  position: relative;
  height: 740px;
  z-index: 1;
  background: #f3dff5;
  max-width: 460px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.input-box input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  padding-top: 25px;
  background: #ffffff;
  width: 100%;
  border: 0;
  margin: 0 0 25px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  box-shadow: 0 0 20px 0 rgba(224, 220, 220, 0.2),
    0 5px 5px 0 rgba(105, 101, 101, 0.24);
}
.gen-selector {
  display: flex;
  justify-content: center;
  align-items: center;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #942994;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #ffffff;
  font-size: 16px;
  cursor: pointer;
  box-shadow: 0 0 20px 0 rgba(224, 220, 220, 0.2),
    0 5px 5px 0 rgba(105, 101, 101, 0.24);
  letter-spacing: 1.5px;
}
.form button:hover,
.form button:active,
.form button:focus {
  background: #9d2dac;
}
.form h1 {
  color: #7a7777;
  font-size: 26px;
  padding-top: -10px;
  padding-bottom: 15px;
  font-weight: 40px;
  display: inline-block;
  position: relative;
}
.form h2 {
  color: #7a7777;
  font-size: 20px;
  padding-bottom: 12px;
  font-weight: 10px;
  display: inline-block;
  position: relative;
  left: -15px;
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
                <a href="seller_update.php"><button>Account</button></a>
                <a href="seller_logout.php"><button>Log Out</button></a>
            </div>
        </sectoin>
        <div id="mySidenav" class="sidenav">
        <li><a href="seller_update.php" id="Update">Udate Account</a></li>
        <li><a href="add_item.php" id="Items">My Items</a></li>
        <li><a href="seller_item_list.php" id="Wishlist">Wishlist</a></li>
    </div>

        <img src="image/download (1).png" id="bar-code">
        <div class="update-page">
    <div class="form">
      
      <form method="POST" action="seller_update.php" class="update-form">
        <div class="input-box">
       		<img id="output" width="200px" height="200px"/>
               <input type="file" accept="image/*" required name="image"class="form-control"placeholder="File not choosen" onchange="loadfile(event)">
		
                    <script>
					var loadfile=function(event){
						var output=document.getElementById('output');
				output.src=URL.createObjectURL(event.target.files[0]);
					};
				</script>
        <?php  
            
            $seller_email = $_SESSION['email'];
            $query = "SELECT * FROM seller_reg WHERE email = '$seller_email'";

            $results = mysqli_query($db, $query);

            $row = mysqli_fetch_array($results); ?>
          <input type="text"name="name" readonly="readonly" value= "<?php echo $row['name']; ?> "  />
          <input type="text"name="seller_reg_id" readonly="readonly" value= "<?php echo $row['seller_reg_id']; ?> " />   
          <input type="email" name="email" required placeholder="Email" title="Ex-abc@gmail.com"/>
          <input type="tel" name="phn_no" min="10" max="10" required  title="Must be numeric" placeholder="Phone Number" />    
         
        </div>
        <div class="gen-selector">
          <h2>Gender:</h2>
          <label class="radio-inline">
            <input type="radio" name="gender" required value="Male">Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" required value="Female">Female
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" required value="Other">Other
          </label>
        </div>
<br>
        <button type="submit" name="update_submit">Update</button>