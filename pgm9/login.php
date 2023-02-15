<html>
    <head><title>Login</title></head>
    <body>
        <center>
            <H1><U>LOGIN</U></H1>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pwd"></td>
                    </tr>
                    <tr>
                        <th ><input type="submit" value="LOGIN"></th>
                        <th ><input type="button" value="REGISTER" onclick="location.href='/mca/pgm9/reg.php'"></th>
                        <!-- <th></th> -->
                    </tr>
                </table>
            </form>
        </center>
</BODY>
</HTML>
<?php
    if($_POST){
        $servername="localhost";
        $username="root";
        $password="";
        $db="studentmark";

        $conn=mysqli_connect($servername,$username,$password,$db);

        $uname=$_POST['uname'];
        $pwd=$_POST['pwd'];

        if($conn){
            //echo "connected";
            $sql="SELECT * FROM `login` WHERE `regno`='$uname' and `password`='$pwd'";

            $res=mysqli_query($conn,$sql);

            if(mysqli_num_rows($res)>0)
            {
                session_start();
                $_SESSION['uname']=$uname;
                while($r=mysqli_fetch_assoc($res)){
                    $_SESSION['name']=$r['name'];
                    if($r['person']=='teacher'){
                        $_SESSION['p']='teacher';
                        $q1="SELECT * FROM `subject` WHERE regno='{$uname}'";
                        $res1=mysqli_query($conn,$q1);
                        if($r1=mysqli_fetch_assoc($res1)){
                            $_SESSION['sub']=$r1['sub'];
                        }
                    }
                    else{
                        $_SESSION['p']='students';

                    }
                    header('Location:/mca/pgm9/homepage.php');
                }
                
            }

            else{
                echo "invalid username and password";
            }
        }
        else{
            echo "not connected";
        }
        
        

    }
