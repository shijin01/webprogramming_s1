<html>
    <body>
        <?php
                session_start();
                $conn=mysqli_connect('localhost','root','','studentmark');
                $q="select * from login where person='student'";
                $r=mysqli_query($conn,$q);
                $print="<form action='' method='post'><table border='1'><tr><td>KTU ID</td><td>Name</td><td>Delete</td></tr>";
                while($res=mysqli_fetch_assoc($r)){
                    $print.="<tr><td>{$res['regno']}</td><td>{$res['name']}</td>
                    <td><input type='checkbox' name='deletechk[]' value='{$res['regno']}'></td><tr>";
                }
                $print.="<td colspan='3' align='right'><input type='submit' name='Delete' value='Delete'></form></td></tr>
                <tr><td colspan='3' align='right'><form action='/mca/pgm9/add_student.php' method='post'><input type='submit' value='Add new'></form></td>";
                $print.="</table>";
                echo $print;
                if(isset($_POST['Delete'])){
                    $del=$_POST['deletechk'];
                    $conn=mysqli_connect('localhost','root','','studentmark');
                    foreach($del as $i){
                        
                        $q="delete from login where regno='$i'";
                        $r=mysqli_query($conn,$q);
                        if($r){
                            header('Location:/mca/pgm9/viewstudent.php');
                        }
                    }
                }
                


        ?>
</BODY>
    </html>
