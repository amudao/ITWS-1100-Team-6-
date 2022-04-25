<?php
include("auth_session.php");
include("db.php");
$id = $_GET['sid'];
$query = "select * from lyrics where song = '$id'";
$record = mysqli_query($con, $query);
$query1 = "select * from songs where id = '$id'";
$record1 = mysqli_query($con, $query1);
$record1 = mysqli_fetch_assoc($record1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rate Lyrics</title>
    <link rel="stylesheet" href="style1.css" />
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
<h2 style="text-align:center;">Lyrics of  <?php echo $record1['song'] ?></h2>
 
    <table style="width: 95%;border:2px solid black;margin:2%;">
      <tbody >
        <tr style="height: 23px;">
          <td style="width: 23%; height: 80%; border:2px solid black;" colspan="3">
          <?php foreach($record as $res){ 
              echo $res['sentence'];
          } ?>
        </td>
        </tr>
      </tbody>
    </table>



    
</body>
</html>