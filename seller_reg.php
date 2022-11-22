<?php
include ("server.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/045a26da70.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);
.registration-page {
  width: 440px;
  padding: 5% 0 0;
  margin: auto;
}


.header {
  background-color: rgb(119, 114, 114);
  display: flex;
  flex-direction: row;
  color: white;
  width: 100%;
  height: 15rem;
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
  margin-top: 100px;
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
.forgot-pass a {
  text-align: left;
  font-size: 13px;
  color: #696666;
}
body {
  font-family: "Roboto", sans-serif;
  background: #ffffff;
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
            </div>
        </sectoin>
  <div class="registration-page">
    <div class="form">
      <h1>Registration</h1>
      <form method="POST" action="seller_reg.php" class="registration-form">
        <div class="input-box">
          <input type="text"name="name" required placeholder="Username" pattern="[a-zA-Z]{2,70}+" title="Enter your full name" />
          <input type="email" name="email" required placeholder="Email" title="Ex-abc@gmail.com"/>
          <input type="password" name="password_1" required placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" Must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" />
          <input type="password" name="password_2" id="confirm_password" required placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title=" Must contain atleast one number and one uppercase and lowercase letter,and atleast 8 or more characters" />
          <input type="tel" name="phn_no" min="10" max="10" required  title="Must be numeric" placeholder="Phone Number" />
				   <input type="file" accept="image/*" required name="image" placeholder="File not choosen" title="Upload your photo" />
              
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

        <button type="submit" name="seller_reg_submit">Register Now</button>
        <p class="message">Already have account? <a href="seller_login.php">Login here</a></p>

      </form>
    </div>
  </div>

</body>
</html>
