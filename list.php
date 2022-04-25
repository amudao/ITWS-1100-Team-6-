<?php
include("auth_session.php");
include("db.php");
$id = $_GET['id'];
$query = "select * from songs where song_in_album = '$id'";
$record = mysqli_query($con, $query);
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
<h2 style="text-align:center;">List of songs in Album no : <?php echo $id ?></h2>
<?php foreach($record as $res){?>
 
    <table style="width: 95%;border:2px solid black;margin:2%;">
      <tbody >
        <tr style="height: 23px;">
        <a href="lyrics.php?sid=<?php echo $res['id'] ?>">
          <td style="width: 23%; height: 23px; border:2px solid black;" colspan="3">
          <a href="lyrics.php?sid=<?php echo $res['id'] ?>">
          <?php echo $res['song'] ?>
        </a>
        </td>
        </tr>
      </tbody>
    </table>
    <?php } ?>



    
</body>
</html>