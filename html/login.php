<html>
<head><title>Login Page</title></head>
<body><center>
<h1>LOGIN</h1>
<form action="" method="post">
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="uname"></td></tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td></tr>
<tr>
<td><input type="submit" value="LOGIN"></td></tr></table></center>
</body>
</html>
<?php
if($_POST){
    $servername = "localhost";
    $username = "root";
    $password = "cetmca";
    $db="mca_s1";
    session_start();
    $conn = mysqli_connect($servername, $username, $password, $db);
$u_name=$_POST['uname'];
$pwd=$_POST['pwd'];
// echo "<script>alert('User name:$u_name Password:$pwd');</script>";
 $sql="SELECT * FROM `login` WHERE `username`='$u_name' and `password`='$pwd' ";
if($conn){
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    $_SESSION['uname']=$u_name;
            // echo "<script>console.log($u_name);</script>";
    header("Location:/homepage.php");
    // while($row = (mysqli_fetch_assoc($res))){
    //     //  echo "id: ".$row['s_no']." Name: ".$row['username']."Password: ".$row['password']." <br>";
    //     if($u_name==$row['username'] && $pwd==$row['password']){
    //         $_SESSION['uname']=$u_name;
    //         // echo "<script>console.log($u_name);</script>";
    //         header("Location:/homepage.php");
        }

else{
    echo "invalid username or password";
}}
  
else{
echo "not connected";
}
}

?>
