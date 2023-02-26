<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
    
        <h3>Details</h3>

        <?php
            $con=mysqli_connect("localhost","root","","school");
        if($con){
        $sql="SELECT * FROM `details`";

        $res=mysqli_query($con,$sql);
        if(mysqli_num_rows($res)){
            echo "<table border='1'>
            <tr>
            <td>Rollno</td>
            <td>Name</td>
            <td>MF</td>
            <td>DF</td>
            <td>ADS</td>
            <td>ASE</td>
            </tr>";
            while($r=mysqli_fetch_assoc($res)){
                echo "
            <tr>
            <td>{$r['rollno']}</td>
            <td>{$r['name']}</td>
            <td>{$r['mf']}</td>
            <td>{$r['df']}</td>
            <td>{$r['ads']}</td>
            <td>{$r['ase']}</td>
            </tr>";
            }
            echo "</table><table><tr><td colspan='6' align='left'>
            <form method='post'><input type='submit' value='ADD DATA' name='add'></form></td></tr></table>";
        }
        else{
            echo "<h4>No data found</h4>";
        }


    }
        ?>


    </form>
</center>
</body>
</html>

<?php
    if(isset($_POST['add'])){
        echo "<center><br><br>
        <h2>ADD</h2>
        <form method='post'>
        <table>
            <tr>
                <td>Rollno</td>
                <td>
                <select name='rollno'>";
                for($i=1;$i<=60;++$i){
                    echo "<option value='{$i}'>{$i}</option>";
                }
                echo "</select>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name'></td>
            </tr>
            <tr>
                <td>ASE</td>
                <td><input type='text' name='ase'></td>
            </tr>
            <tr>
                <td>ADS</td>
                <td><input type='text' name='ads'></td>
            </tr>
            <tr>
                <td>DF</td>
                <td><input type='text' name='df'></td>
            </tr>
            <tr>
                <td>MF</td>
                <td><input type='text' name='mf'></td>
            </tr>
            <tr>
                <td colspan='2'>
                <input type='submit' name='ins' value='SUBMIT'>
                </td>
            </tr>
        </table>";
}


if(isset($_POST['ins'])){
    // $con=mysqli_connect("localhost","root","","school");
    if($con){
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $ase=$_POST['ase'];
        $ads=$_POST['ads'];
        $df=$_POST['df'];
        $mf=$_POST['mf'];
        $sql="INSERT INTO `details`(`rollno`, `name`, `ads`, `df`, `ase`, `mf`)
         VALUES ('$rollno','{$name}','{$ads}','{$df}','{$ase}','{$mf}')";
        $res=mysqli_query($con,$sql);
        if($res){
            echo "<script>alert('inserted');
            location.href='/mca/annan/entryview2.php';
            </script>";
            // header("location:/mca/annan/entryview2.php");
        }
        else{
            echo "<script>alert('error');</script>";
        }

    }
}
?>