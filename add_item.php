<?php
include 'server.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Item</title>
  </head>
  
  <style>
    body {
      margin: 35px;
      background-color: rgb(241, 244, 247);
    }
    .container{
        border: 60px solid rgb(241, 244, 247) ;
        padding-right: 40px;
        width: 60%;
        margin-left: 200px;
        margin-top: 20px;
        border-radius: none;
       background-color: #f3dff5;

    }

    h1 {
      display: block;
      width: 200px;
      margin: 50px auto;
      margin-top: -65px;
    }
    p {
      display: block;
      width: 230px;
      margin: 25px auto;
    }
    textarea {
        padding-left: 10px;
        padding-right: 200px;
        padding-top: 6px;
    }
  label.control-label {
     padding-left: 40px;
     padding-bottom: 30px;
  }
  h1{
    text-decoration: underline;
  }

  .images {
    display: flex;
    flex-wrap: wrap;
    margin-top: 20px;
    margin-left: 550px;
    margin-right: -260px;
    margin-bottom: -135px;
  }

  .images .img,
  .images .pic {
    flex-basis: 31%;
    margin-bottom: 10px;
    border-radius: 4px;
  }

  .images .img{
    width: 112px;
    height: 93px;
    background-size: cover;
    margin-left: 10px;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }

  .images .img:nth-child(3n){
    margin-right:0px;
  }

  .images .img span{
    display: none;
    text-transform: capitalize;
    z-index: 2;
  }

  .images .img::after{
    content: '';
    width: 100%;
    height: 100%;
    transition: opacity .1s ease-in;
    border-radius: 4px;
    opacity: 0;
    position: absolute;
  }

  .images .img:hover::after{
    display: block;
    background-color: #000;
    opacity: .5;
  }

  .images .img:hover span {
    display: block;
    color: #fff;
  }

  .images .pic {
  background-color: #F5F7FA;
  align-self: center;
  text-align: center;
  padding: 40px 0;
  text-transform: uppercase;
  color: #848EA1;
  font-size: 12px;
  cursor: pointer;
}
#output {
  background-color: #F5F7FA;
}

  .btn{
  color: white;
  width: 70px;
  height: 33px;
  text-align: center;
  margin: auto;
  margin-left: 280px;
  margin-bottom: 20px;
  display: flex;
  padding-left: 20px;
  background-color: rgb(50, 113, 230);  
  cursor: pointer;
  border-color: #3c74e2;
  border-bottom: #3c74e2;
  border-left: #3c74e2;
  border-right: #3c74e2;
}

.btn:hover{
   background-color: #318fed;
}
.btn:active{
  background-color: #3e8e41;
    box-shadow: 0 5px #666;
    transform: translate(4px);
}

     input[type=text], select {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
    }

     input[type=email] {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     }

  @media only screen and (min-width: 250px) and (max-width: 700px) {
    .form-group{
      display: inline-block;
      width: 50%;
      padding-left: 60px;
      padding-right: 60px;
    }
  }
 @media only screen and (min-width:250px) and (max-width:700px){
  .btn{
    display: inline-block;
    margin-left: 47px;
    padding-left: 50px;
    padding-right: 50px;
    padding-bottom: 25px;
    text-align: center;
  }
 }
 .close {
    color: red; 
    font-size: 20px; 
    text-align: center;
   cursor:pointer; 
  }

 ul {
  list-style-type: none;
  margin-left: 70%;
  padding-left: 70px;
  margin-right: 325px;
  margin-bottom: -120px;
  padding-top: 38px;
 }
 .txt{
	color:#ffffff;
}
 ul li{
  border: 1px solid #ddd;
  margin-top: 12px; 
  background-color: #f6f6f6;
  padding: 4px;
  padding-left: 30px;
  padding-right: 40px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
 }
  
  </style>

  <body>
  <a href="seller_update.php">Go Back-</a>
    <ul>
      <li>
        <span class="close" onclick="location='seller_login.php'" title="Close">X</span>
      </li>
    </ul>
   
    <div class="container">
      <form method="POST" action="add_item.php" class="add_item-form">
      <h1>Add Item</h1>
      <p>
      <?php  
            
            $seller_email = $_SESSION['email'];
            $query = "SELECT * FROM seller_reg WHERE email = '$seller_email'";

            $results = mysqli_query($db, $query);

            $row = mysqli_fetch_array($results); ?>
      
        <label class="form-group" for="seller_reg_id">
          <input type="text" id="seller_reg_id" name="seller_reg_id"  readonly="readonly" value= "<?php echo $row['seller_reg_id']; ?> " /> </label>
     </p> 
    <p>
        <label class="form-group" for="name"> 
          <input type="text" id="name" name="item_name" placeholder="Item Name"pattern="[a-zA-Z]{2,70}+" title="Name only Alphabets/Characters" /> </label>
    </p> 
   
     <p>
        <label class="form-group" for="email">
          <input type="Email" id="email" name="email" placeholder="Email" /> </label>
     </p>   

    <p>
       <label class="form-group" for="category" >
          <select name="category" id="category" >
          <option value="" selected hidden>--Select--</option>
            <option value="Education">Education</option>
            <option value="Electronic">Electronic</option>
            <option value="Home appliances">Home Appliances</option>
            <option value="Sports">Sports</option>
            <option value="Others">Others</option>
        </select> </label>
    </p>    

    <p>
       <label class="form-group" for="item_quality" >   
        <select name="item_quality" id="item_quality" >
        <option value="" selected hidden>--Select--</option>
            <option value="New">New</option>
            <option value="Old">Old</option>
            <option value="Hand made">Hand made</option>
        </select></label>
    </p>  
    <p>
        <textarea class="form-control" rows="5" name="description" id="description" placeholder="Description"></textarea>
    </p>
    <p>
        <label for="image"></label>
        <input type="file" accept="image/*" required name="image"class="form-control"placeholder="File not choosen" onchange="loadfile(event)">
				<img id="output" width="200px" height="200px"/>
					<script>
					var loadfile=function(event){
						var output=document.getElementById('output');
				output.src=URL.createObjectURL(event.target.files[0]);
					};
				</script>
      </p>
      <p>
        <label class="form-group" for="price">
          <input type="tel" id="price"  name="price" title="Numeric value only" placeholder="Item Price" /> </label>
     </p>  
        <input type="submit" class="btn" name="item_submit" value="+ Add" >
      </form>
    </div>
  </body>
</html>



