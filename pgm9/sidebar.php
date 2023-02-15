<html>
  <body>
    <?php
    session_start();
    if($_SESSION){
    if($_SESSION['p']=='teacher'){
      echo "<a href='mainpage.php' target='right'>Home</a><br/>";
      echo "<a href='viewstudent.php' target='right'>View Student</a><br/>";
      echo "<a href='viewmark.php' target='right'>View Mark</a><br/>";

    }
    else{
      echo "<a href='viewmark.php' target='right'>View mark</a><br />";
    }
      echo "<a href='logout.php' target='_top'>Logout</a><br/>";
  }
  else{
    echo "<script>alert('session expired')</script>";
    header('Location:/mca/pgm9/login.php');
  }
    ?>
  </body>
</html>
