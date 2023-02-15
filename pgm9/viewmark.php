<?php
session_start();
    $con=mysqli_connect("localhost","root","","studentmark");
    if($_SESSION['p']=='students'){
    if($con){
      
        echo "Name:{$_SESSION['name']}<br>KTU ID:{$_SESSION['uname']}<br>";
          echo "<table border='1'>
            <tr>
    <td>Subject</td>
    <td>Series1</td>
    <td>Series2</td>
    <td>Assignment1</td>
    <td>Assingment2</td>
    <td>Attendance</td>
    <td>series</td>
    <td>Assingment</td>
    <td>Attendance</td>
    <td>Total</td>
  </tr> ";
        $q1="SELECT `sub` FROM `subject`";
        $res1=mysqli_query($con,$q1);
        while($r1=mysqli_fetch_assoc($res1)){
          $s=$r1['sub'];
          $q="SELECT * FROM {$s} JOIN login ON login.regno={$s}.regno WHERE {$s}.regno='{$_SESSION['uname']}'"; 
          $res=mysqli_query($con,$q);
          if($r=mysqli_fetch_assoc($res)){
            $series=($r['s1']*20/50+$r['s2']*20/40)/2;
            $assgnmt=$r['a1']+$r['a2'];
            $attn=$r['att']*8/100;
            echo "<tr><td>{$r1['sub']}</td><td>{$r['s1']}</td><td>{$r['s2']}</td>
            <td>{$r['a1']}</td><td>{$r['a2']}</td>
            <td>{$r['att']}</td>
            <td>{$series}</td>
            <td>{$assgnmt}</td>
            <td>{$attn}</td>
            <td>".($series+$assgnmt+$attn)."</td></tr>";
            
          }
          else{
            echo "<tr><td>{$s}</td><th colspan='9'>No data</th></tr>";
          }
          


        }
        echo"</table>";
          
    }
  }
  else{
    if($con){
      $sub=$_SESSION['sub'];
        $q="SELECT * FROM `{$sub}`,login where login.regno={$sub}.regno"; 
        $res=mysqli_query($con,$q);
        echo "<table border='1'>
  <tr>
    <td>KTUID</td>
    <td>Name</td>
    <td>Series1</td>
    <td>Series2</td>
    <td>Assignment1</td>
    <td>Assingment2</td>
    <td>Attendance</td>
  </tr>
          ";
        while($r=mysqli_fetch_assoc($res)){
          
            echo "<tr><td>{$r['regno']}</td><td>{$r['name']}</td><td>{$r['s1']}</td><td>{$r['s2']}</td>
            <td>{$r['a1']}</td><td>{$r['a2']}</td>
            <td>{$r['att']}</td></tr>";
            
        }
        echo"<td colspan='7'><form action='addmark.php' method='post'><input type='submit' name='ADDmark' value='Add mark' /></td></form></table>";
  }
}
    ?>
    </table>
