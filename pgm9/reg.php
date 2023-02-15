<html>
    <head><title>Register</title></head>
    <body>
        <center>
            <H1><U>Register</U></H1>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>Reg no</td>
                        <td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pwd"></td>
                    </tr><th colspan="2"><input type="submit" value="REGISTER"></th>
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
        $name=$_POST['name'];

        if($conn){
             $sql="select * from  `login` where `regno`='$uname'";

            $res=mysqli_query($conn,$sql);
            //echo "connected";
            if(mysqli_num_rows($res)){
                echo "<script>alert('Already registered!');</script>";
            }
            else{
            $sql="INSERT INTO `login`( `regno`, `password`, `name`,`person`) VALUES ('$uname','$pwd','$name','student')";

            $res=mysqli_query($conn,$sql);
            if($res)
            {
                echo "<script>confirm('Registrstion successfull');</script>";
             header('Location:/mca/pgm9/login.php');
                }
            }
                

        }
        else{
            echo "not connected";
        }
    }
        
        

