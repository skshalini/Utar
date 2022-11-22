<?php
error_reporting(0);
session_start();
$db = mysqli_connect('localhost', 'root', 'root@123', 'utar');


if (isset($_POST['buyer_reg_submit'])) {							//Buyer Registration

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phn_no = mysqli_real_escape_string($db, $_POST['phn_no']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  
  $user_check_query = "SELECT * FROM buyer_reg WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { 
  
      if ($user['email'] == $email) {
        $message = "The user already registered the system!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
  } 
  else { ($password = ($password_1));

    $query = "INSERT INTO buyer_reg (name, email, password, phn_no, gender) 
          VALUES('$name', '$email', '$password_1', '$phn_no', '$gender')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='buyer_login.php'; </script>";
    
  }
}

if (isset($_POST['buyer_login_submit']))           // Buyer login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM buyer_reg WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];

    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
      $_SESSION['name'] = $username;
      $_SESSION['email']= $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='buyer_home.php'; </script>";
    }
  }
}


if (isset($_POST['seller_reg_submit'])) {							//Seller Registration

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phn_no = mysqli_real_escape_string($db, $_POST['phn_no']);
  $image = mysqli_real_escape_string($db, $_POST['image']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  
  $user_check_query = "SELECT * FROM seller_reg WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { 
  
      if ($user['email'] == $email) {
        $message = "The user already registered the system!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
  } 
  else { ($password = ($password_1));

    $query = "INSERT INTO seller_reg (name, email, password, phn_no, image, gender) 
          VALUES('$name', '$email', '$password_1', '$phn_no', '$image', '$gender')";
     mysqli_query($db, $query);
    
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='seller_login.php'; </script>";
   // echo "Error: " . $query . "<br>" . mysqli_error($db); 
  }
}


if (isset($_POST['seller_login_submit']))           // Seller login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $query = "SELECT * FROM seller_reg WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $name = $row['name'];

    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
      $_SESSION['name'] = $name;
      $_SESSION['email']= $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$name'); 
      window.location.href='seller_update.php'; </script>";
    }
  }
}   
            


if(isset($_POST["item_submit"]))          //Add Items
{
  $seller_reg_id=$_POST["seller_reg_id"];
  $item_name=$_POST["item_name"];
  $email=$_POST["email"];
  $category=$_POST["category"];
  $item_quality=$_POST['item_quality'];
  $description=$_POST['description'];
  $image=$_POST['image'];
  $price=$_POST['price'];

  $query = "INSERT INTO seller_add_item(seller_reg_id, item_name, email, category,item_quality, description, image, price)
  VALUES ('$seller_reg_id', '$item_name', '$email', '$category', 'item_quality', '$description', '$image', '$price')";
  $data=mysqli_query($db,$query);
  if($data==true)
  {
    
    echo"<script>alert('Your data submitted Successfully')</script>";
    echo"<script>window.location.href='add_item.php' </script>";
  }
  else{
    echo"<script>alert('Data not submitted, please try again!)</script>";
    //echo"<script>window.location.href='marks2_detail.php' </script>";
    echo "Error: " . $query . "<br>" . mysqli_error($db);
  }
  }

  if(isset($_POST['update_submit']))          //Seller Update Account
   {
  $seller_reg_id=$POST['seller_reg_id'];
  $image=$_POST['image'];
  $name=$_POST['name'];
  $seller_reg_id=$_POST['seller_reg_id'];
  $email=$_POST['email'];
  $phn_no=$_POST['phn_no'];
  $gender=$_POST['gender'];
    
  $query="update seller_reg set image='$image',name='$name',seller_reg_id='$seller_reg_id',email='$email',phn_no='$phn_no',gender='$gender' where seller_reg_id=$seller_reg_id";
  
  if($db->query($query)==true)
  {
    
    echo"<script>alert('Updated Successfully!!')</script>";
  }
  else{
    echo"<script>alert('Not Updated!')</script>";
   // echo "Error updating record: " . $db->error;
  } 
  }

  
?>