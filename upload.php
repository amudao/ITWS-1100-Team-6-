<?php
include("auth_session.php");
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rate Lyrics</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style2.css" />
</head>
<body>

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
    <a href="index.php">
        Ranking
        </a>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.php" >Home</a>
    <a href="upload.php" >upload Album</a>
    <?php if(!isset($_SESSION["username"])){ ?>
    <a href="login.php" >login</a>
    <a href="registration.php" >Signup</a>
    <?php }else{ ?>
    <a href="logout.php" >Logout</a>
    <?php } ?>
  </div>
</div>

<div class="container">  
  <form id="contact" action="process.php" method="post" enctype="multipart/form-data">
    <h3>Upload Album</h3>
    <h4>Enter all details</h4>
    <fieldset>
      <input placeholder="Enter Name of Album" name="name"type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Rank" name="rank" type="text" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" name="cover" type="file" tabindex="3" accept="image/png, image/jpeg" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Score" name="score" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Enter description about Album" name="intro" tabindex="5" required></textarea>
    </fieldset>
    
    <fieldset>
      <input placeholder="Enter Name of Artist" name="artist" type="text" tabindex="6" required>
    </fieldset>

    <fieldset>
      <button name="album" type="submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>


    
</body>
</html>
