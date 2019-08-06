<?php session_start();
if(isset($_SESSION['username'])){
  //echo 'how are you '.$_SESSION ['username'];


  ?>
<!doctype html>
<html>
<style>
<?php require_once("sub_file/style.php");?>


</style>
<body>


<?php require_once("sub_file/new-message.php");?>

  <div id="container" style="background-image: url('https://i.pinimg.com/originals/94/30/e8/9430e85bcee211cda9dfff8400e2fe19.jpg');">
    <div id="menu">
      <?php

      echo $_SESSION['username'];
      echo '<a style="float:right;color:white;" href="logout.php">Log Out</a>';

      ?>

  </div>
  <div id="left-col">
        <?php require_once("sub_file/left-col.php");?>
    <!--end of left colom -->
</div>
<div id="right-col">
  <?php require_once("sub_file/right-col.php");?>

  <!--end of right colom -->
</div>
</div>
</body>
</html>
  <?php
}else{
  header("location:login.php");
}

 ?>
