<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Account</title>
  <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/045a26da70.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.update-page {
  width: 770px;
  padding: 50px 0 0;
  margin: auto;
  margin-top: 100px;
}
.form .update-form {
  position: relative;
  height: 705px;
  z-index: 1;
  background: #f3dff5;
  width: 800px;
  top: -72px;
  margin-top: -180px;
  padding: 89px;
  padding-right: 400px;
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
img#profile{
  padding: 1px 4px 6px 8px;
  width: 180px;
  height: 160px;
  border: 1px solid #dadada;
  color: grey;
  font-size: 15px;
  background-color: #f5f8fa;
  position: relative;
  left: 400px;
  top: 160px;
  bottom: -145px;
}
img#bar-code{
  padding: 1px 4px 6px 8px;
  width: 100px;
  height: 100px;
  border: 1px solid #dadada;
  color: grey;
  font-size: 15px;
  background-color: #f5f8fa;
  position: relative;
  left: 290px;
  top: 300px;
  bottom: -145px;
}
.form .btn {
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
  border-radius: 10px;
  letter-spacing: 1.5px;
}

.form button:hover,
.form button:active,
.form button:focus {
  background: #9d2dac;
}
table,th,td{
    padding-left: 20px;
}
h2 {
  color: #7a7777;
  font-size: 15px;
  padding-bottom: 15px;
  font-weight: 40px;
  display: inline-block;
  position: relative;
  left: -15px;
}

.form .message {
  margin: 15px 0 0;
  color: #696666;
  font-size: 12px;
}
.form .message a {
  color: #af4caa;
  text-decoration: none;
  font-size: 15px;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before,
.container:after {
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #ef3b3a;
}

body {
  font-family: "Roboto", sans-serif;
 
  background: -webkit-linear-gradient(to right, #9796f0, #8de2f1);
  background: linear-gradient(to right, #9796f0, #8de2f1);
}

    </style>
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
                <a href="buyer_login.php"><button>Account</button></a>
                
            </div>
        </sectoin>
  <div class="update-page">
    <div class="form">
      <form class="update-form">
        <div class="input-box">
            <img src="image/images.png" id="profile">
            <img src="image/download (1).png" id="bar-code">
          <input type="text"  placeholder="Username" />
          <input type="text" placeholder="Student ID" />
          <input type="email" placeholder="Email" />
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
        <button class="btn" type="submit" name="update_submit">Update</button>
      </form>
    </div>
  </div>
</body>

</html>