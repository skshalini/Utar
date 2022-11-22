<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>
  
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: blueviolet;
}

.flex-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 100%;
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

/* main body */
.main-body {
  border: 2px solid red;
  width: 70%;
  height: 45rem;
  margin-top: 20px;
  color: white;
  border-radius: 10px;
}

/* seller tittle */
.seller-tittle {
  margin-top: 10px;
  text-transform: capitalize;
  padding-left: 10px;
  font-size: 30px;
  margin-left: 20px;
}

.seller-tittle hr {
  margin-top: 7px;
  color: white;
  margin-right: 20px;
  margin-left: -20px;
}

/* seller information */
.seller-information {
  display: flex;
  flex-direction: row;
  padding: 10px;
  letter-spacing: 1.4px;
}

.seller-question {
  margin-left: 40px;
}

.seller-question ol {
  margin-left: -9px;
  margin-top: -15px;
  margin-right: -560px;
  line-height: 1.5;
  /* text-transform: capitalize; */
}

.seller-question .question {
  margin: 50px -330px 29px -27px;
}

/* login signup button */
.login-singup-button {
  margin-top: 250px;
  text-align: center;
  margin-left: 900px;
}

.login-singup-button ul {
  list-style-type: none;
  border: 2px solid white;
}

.login-singup-button li {
  width: 200px;
  background-color: rgb(77, 143, 241);
  text-decoration: none;
}
.login-singup-button li a {
  color: white;
  padding: 10px 10px;
  width: 200px;
  
  text-decoration: none;
}

.last-body-text {
  text-align: center;
  margin-top: 50px;
  font-size: 50px;
  text-transform: capitalize;
  margin-right: 250px;
}

footer {
  background-color: bisque;
  width: 75%;
  padding: 15px;
  border-radius: 10px;
}

    </style>
<body>
    <div class="flex-container">
        <sectoin class="header">
            <div class="logo">
                <h1 style="color: rgb(95, 243, 248);">
                    utar
                </h1>
                <h1 style="color: rgb(95, 243, 248);">
                    c2c
                </h1>
            </div>
            <div class="title">
                <h2>
                    utar c2c <span>online&nbsp;purchase</span>
                </h2>
            </div>
            <div class="all-btn">
            <a href="home.php" ><button type="button ">home</button></a>
            <a href="sell.php" > <button type="button">sell</button></a>
            <a href="buyer_login.php" > <button>Login/Register</button></a>
            </div>
        </sectoin>
        <section class="main-body">
            <div class="seller-tittle">
                <p>sell</p>
                <hr>
            </div>
            <div class="seller-information">
                <div class="seller-question ">
                    <div class="be-a-seller options">
                        <h1 class="question">How to be a seller?</h1>
                        <ol>
                            <li>Logged In or Register using UTAR email and student ID</li>
                            <li>Go to Account > Update Account to update payment method(IF ANY)</li>
                            <li>Go to Account > My items to add new item.</li>
                            <li>After filling the required details of the item click add to insert the item.</li>
                            <li>You have successfully added an item into your list to sell</li>
                        </ol>
                    </div>
                    <div class="go-e-wallet options">
                        <h1 class="question">
                            Link Your Touch  n'go E-wallet
                        </h1>
                        <ol>
                            <li>Logged in into your Touch n'Go app.</li>
                            <li>Click Merchant on the home screen.</li>
                            <li>Select your business Industry and business type.</li>
                            <li>Fill in your business details, check the agreement box submit.</li>
                            <li>And you are approved</li>
                            <li>Get the screenshot of your OR code and update in your account details.</li>
                            <li>You can start receiving from buyer with e-wallet transfer.</li>
                        </ol>
                    </div>
                </div>
                <div class="login-singup-button">
                    <ul>
                        <li>
                            <a href="seller_login.php">login</a>
                        </li>
                    </ul>
                    <p>
                        or
                    </p>
                    <ul>
                        <li>
                            <a href="seller_reg.php">sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="last-body-text">
                <h3>
                    JOIN US!!
                </h3>
            </div>
        </section>
        <footer>
            <p>
                utar c2c online purchase
            </p>
        </footer>
    </div>
</body>

</html>