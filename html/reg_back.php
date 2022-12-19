<?php
$name=$_POST['name'];
$age=$_POST['Age'];
$pwd=$_POST['pwd'];
$sec_ques=$_POST['security_question'];
$sec_anss=$_POST['ans_seq_ques'];
$email=$_POST['email'];
$lang=$_POST['lang'];
$homephno=$_POST['homephno'];
$officephno=$_POST['officephno'];
$lang=$_POST['lang'];
echo "Name:".$name."<br>Age:".$age."<br>"."Password:$pwd<br>";
echo "Security Question:$sec_ques<br>Answer of security question:$sec_anss<br>Email id:$email<br>Language Known:";
foreach($lang as $i)
echo "$i  ";
echo "<br>Phone number:     Home:$homephno  Office:$officephno<br>";
?>
