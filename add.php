<?php
include 'server.php';

if(isset($_POST['machine_learning_book']))       //For buyer to add items in a wishlist
{
	$product_id = 101;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['c++_book']))       
{
	$product_id = 102;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['table_fan']))      
{
	$product_id = 103;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['mixer_grinder']))     
{
	$product_id = 104;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}
if(isset($_POST['foot-boll']))       
{
	$product_id = 105;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['sports_shoes']))       
{
	$product_id = 106;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['cat-wallpaper']))    
{
	$product_id = 107;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

if(isset($_POST['study_lamp']))       
{
	$product_id = 108;
	$buy_user_email = $_SESSION['email'];
	$query = "SELECT * FROM buyer_reg WHERE email='$buy_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$buyer_reg_id = $row['buyer_reg_id'];

    $query = "INSERT INTO buyer_wishlist (product_id, buyer_reg_id) 
          VALUES('$product_id', '$buyer_reg_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully added to your wishlist'); </script>";
    echo"<script>window.location.href='buyer_home.php' </script>";
}

?>