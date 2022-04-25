<?php
session_start();
include("db.php");
$query = 'select * from album order by rank';
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
<?php foreach($record as $res){?>
 
    <table style="width: 95%;border:2px solid black;margin:2%;">
      <tbody >
        <tr style="height: 23.5px;border:2px solid black;">
       
          <td style="width: 23%; height: 69.5px; border:2px solid black;" rowspan="3">
          <a href="list.php?id=<?php echo $res['id'] ?>">
            <img height="200px" src="images/<?php echo $res['cover'] ?>" alt="">
          </a>
          </td>
          <td style="width: 20.7495%; height: 23.5px; border:2px solid black;">Date : <?php echo $res['date'] ?></td>
          <td style="width: 54.2505%; height: 69.5px; border:2px solid black;" rowspan="3"><b><?php echo $res['name'] ?></b><br><br><?php echo $res['intro'] ?></td>
        </tr>
        <tr style="height: 23px; border:2px solid black;">
          <td style="width: 20.7495%; height: 23px; border:2px solid black;">Score : <?php echo $res['score'] ?>/10</td>
        </tr>
        <tr style="height: 23px;border:2px solid black;">
          <td style="width: 20.7495%; height: 23px; border:2px solid black;">Artist : <?php echo $res['artist'] ?></td>
        </tr>
        <tr style="height: 23px;">
          <td style="width: 23%; height: 23px; border:2px solid black;" colspan="3"></td>
        </tr>
      </tbody>
    </table>
    <?php } ?>



    
</body>
</html>
