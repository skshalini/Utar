<?php
include "server.php";

if(isset($_POST['delete']))
{
    $item_id=$_POST['item_id'];
    
    $query= "DELETE FROM seller_add_item WHERE item_id = '$item_id'";
    $data = mysqli_query($db,$query);
    if($data)
    {
        echo"<script>alert('Removed Successfully!!')</script>";
        echo"<script>window.location.href='seller_item_list.php' </script>";
        
    }
    echo"<script>alert(' Not Removed Successfully!!')</script>";
    echo"<script>window.location.href='seller_item_list.php' </script>";
  }

?>