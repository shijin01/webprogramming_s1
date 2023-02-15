<html>
    <body>
        <?php
            session_start();
            if($_SESSION){
            echo "<h1>Hello {$_SESSION['name']}</h1>";
            if($_SESSION['p']=='teacher'){
                echo"<h2>Search student</h2>
                <form method='post'>
                <input type='text' name='name' placeholder='KTU ID'><br>
                <input type='submit' value='Search'>
                ";

            }
            }
            else{
                echo "<script>alert('Session expired');</script>";
            }
            if($_POST){
                $n=$_POST['name'];
                echo "<h3>hi {$_POST['name']}.</h3>";
                $conn=mysqli_connect('localhost','root','','studentmark');
                $q="select * from login where regno='{$n}'";
                $r=mysqli_query($conn,$q);
                if(mysqli_num_rows($r)>0){
                    $res=mysqli_fetch_assoc($r);
                    echo "<br>{$res['name']}";
                }
                else{
                    echo "Not found";
                }

            }
        ?>
    </body>
</html>