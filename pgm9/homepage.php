<html>
  <head>
    <title>Homepage</title>
  </head>
  <body> 
    <?php
    session_start();
    if($_SESSION){
      echo "<iframe src='sidebar.php' width='20%' height='100%' name='left'></iframe>
<iframe src='mainpage.php' width='79%' height='100%' name='right' ></iframe>";
    }
    else{
      echo "session expired";
    }
    ?>
    

</body>

</html>
