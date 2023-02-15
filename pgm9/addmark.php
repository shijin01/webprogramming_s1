<html>
  <body>
    <center>
      <form action="" method="post">
        <select name="sname">
          <?php
          session_start();
          $con=mysqli_connect("localhost","root","","studentmark");
          if($con){
            $res=mysqli_query($con,"select name from login where person='student'");
            while($r=mysqli_fetch_assoc($res)){
              echo "<option value='{$r['name']}'>{$r['name']}</option>";
            }
          }
          ?>
          </select>
          <br>
        <table border="1">
          <tr>
            <th colspan="2">Series Test</th>
            <th colspan="2">Assignment</th>
            <th rowspan="2">Attendance</th>
          </tr>
          <tr>
            <th >Series 1</th>
            <th >Series 2</th>
            <th>Assignment 1</th>
            <th>Assignment 2</th>
          </tr>
          <tr>
            <td><input type="text" name="mfs1" /></td>
            <td><input type="text" name="mf_s2" /></td>
            <td><input type="text" name="mfa1" /></td>
            <td><input type="text" name="mf_a2" /></td>
            <td><input type="text" name="mfatt" /></td>
          </tr>
        </table>
        <input type="submit" name='save' value="Save" />
      </form>
    </center>
  </body>
</html>
<?php
session_start();
$sub=$_SESSION['sub'];
if(isset($_POST['save'])){
  $con=mysqli_connect("localhost","root","","studentmark");
  if($con){
    
    $mfs1=(int)$_POST['mfs1'];
    $mf_s2=(int)$_POST['mf_s2'];
      $mfa1=(int)$_POST['mfa1'];
         $mf_a2=(int)$_POST['mf_a2'];
      $mfatt=(int)$_POST['mfatt'];
    $re=mysqli_query($con,"SELECT login.regno FROM login WHERE login.name='{$_POST['sname']}'");
    foreach($re as $i){
      $regno=$i['regno'];
    }
    $q1="SELECT * FROM {$sub}  WHERE regno='{$regno}'";
    $res1=mysqli_query($con,$q1);
    if(mysqli_num_rows($res1)>0){
      
      $q="UPDATE `{$sub}` SET `s1`='{$mfs1}',
      `s2`='{$mf_s2}',`a1`='{$mfa1}',
      `a2`='$mf_a2',`att`='$mfatt'
       WHERE `regno`='{$regno}'";
    $res=mysqli_query($con,$q);
    if($res){
      echo "<script>alert('updated');</script>";
    }
    }
    else{
    $q="INSERT INTO {$sub}(`regno`, `s1`, `s2`,  `a1`, `a2`,
      `att`) VALUES ('{$regno}','{$mfs1}',
     '{$mf_s2}','{$mfa1}','{$mf_a2}','{$mfatt}')";
    $res=mysqli_query($con,$q);
    if($res){
      echo "<script>alert('successfull');</script>";
    }
  }}
  else{
    echo "<Script>alert('Connection error');</script>";
  }
}

?>