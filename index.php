<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="form.css">
</head>
<body>
<div class="main2"><h2>Create your own ID Card</h2>


<div class="container">
    <form action="bio.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-25">
            <label for="fname">Name</label>
        </div>
        <div class="col-75">
            <input type="text" id="name" name="name" placeholder="name">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="phone">Phone Number</label>
        </div>
        <div class="col-75">
            <input type="text" id="phone" name="phone" placeholder="phone">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="text">User ID</label>
        </div>
        <div class="col-75">
            <input type="userid" id="userid" name="userid" placeholder="userid">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="text">Email</label>
        </div>
        <div class="col-75">
            <input type="email" id="email" name="email" placeholder="email">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="text">District</label>
        </div>
        <div class="col-75">
            <input type="text" id="district" name="district" placeholder="District">
        </div>
    </div>
    <div class="row">
        <div class="col-25">
            <label for="text">Photo</label>
        </div>
        <div class="col-75">
            <input type="file" id="photo" name="photo" placeholder="photo">
        </div>
    </div>
    
    
      
      
    
    <div class="row">
      <input type="submit" value="Submit" name="Submit">
    </div>
  </form>
</div></div>


</body>
</html>
