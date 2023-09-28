<?php
if(isset($_POST["Submit"])){
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $userid = $_POST["userid"];
  $email = $_POST["email"];
  $district = $_POST["district"];
  // print_r($_FILES['photo']);
  $img_name = $_FILES["photo"]["name"];
  
  $tmp_name = $_FILES["photo"]["tmp_name"];
  move_uploaded_file($tmp_name, "upload/".$img_name);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=	, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="main">
<h1>ID CARD</h1>
  <div class="photo"><img src="upload/ <?php if(isset($img_name)){
      echo $img_name;
    } ?> " alt=""></div>
  <div class="idd">
    
    <ul>
      <li class="info"><span>Name</span>: <?php if(isset($name)){
      echo $name;
    } ?></li>
      <li class="info"><span>Phone</span>: <?php if(isset($phone)){echo $phone;}?></li>
      <li class="info">User ID:<?php if(isset($userid)){
      echo $userid;
    } ?></li>
      <li class="info">Email Address: <?php if(isset($email)){
      echo $email;
    }?></li>
      <li class="info">District: <?php if(isset($district)){
      echo $district;
    }?></li>
    </ul>
  </div>
</div>


</body>
</html>




