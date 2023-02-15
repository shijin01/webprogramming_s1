<html>
    <body>
        <form action='' method='post'>
            <table>
                <tr>
                    <td>KTU ID</td>
                    <td><input type='text' name='ktuid'></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='name'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='pwd'></td>
                </tr>
                <tr>
                    <th colspan='2'><input type='submit' value='ADD'></th>
                </tr>
                
            </table>
    </body>
</html>
<?php
if($_POST){
    $ktu=$_POST['ktuid'];
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $conn=mysqli_connect('localhost','root','','studentmark');
    $q="INSERT INTO `login`( `regno`, `password`, `name`, `person`) VALUES ('$ktu','$pwd','$name','student')";
    $r=mysqli_query($conn,$q);
    if($r){
        echo "<script>alert('Succesfully inserted');</script>";
        header('Location:/mca/pgm9/viewstudent.php');
    }
}
?>