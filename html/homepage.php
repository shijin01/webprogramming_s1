<html>
    <head>
        <title>HOME</title>
        <script> function go(){location.href='/login.php'}</script>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION){
        echo "<h1>HELLO ".$_SESSION['uname']."</h2>";}
        else{
            echo "Session expired login";
        }
        ?>
        <button type="button" value="logout" onclick="<?php session_destroy(); 
        
        ?> go()">logout</button>
</body>
</html>
