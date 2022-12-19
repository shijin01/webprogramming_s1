<!DOCTYPE HTML>
<html>
<head><title>Reg Form</title>
<head>
<body bgcolor="#a5d6d9">
<marquee onmouseover="this.stop()" onmouseout="this.start()"><h1 style="color:red">WELCOME TO FRESHERS WORLD!!!</h1></marquee>
<form method="post" action="reg_back.php">
<TABLE BORDER="1" align="center">
<TR>
<th colspan="2" height="15"><h2>Registration Form</h2></th></tr>
<tr>
<td>Name</td>
<td><input type="text" name="name"></td></tr>
<tr>
<td>Age</td>
<td><select name="Age">
<option value='not selected' selected>SELECT</option>
<?php
for($i=18;$i<=28;++$i)
{
	echo"<option value=".$i." >".$i."</option>";
}

?>
<!--
<option value='19' selected>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option></select>-->
</td></tr>
<tr>
<td>Password</td>
<td><input type="password" name="pwd"></td></tr>
<tr>
<td>Re-enter Password</td>
<td><input type="password" name="repwd"></td></tr>
<tr>
<td rowspan="4">Select your security question</td>
<td><input type="radio" name="security question" value="pet?">What is your pet name?</td></tr>
<tr><td><input type="radio" name="security_question" value="bestfriend?">Who is your best friend?</td></tr>
<tr><td><input type="radio" name="security_question" value="color?">What is your favourite color?</td></tr>
<tr><td><input type="radio" name="security_question" value="teacher?">Who is your favourite teacher?</td></tr>
<tr>
<td>Answer of security question</td>
<td><input type="text" name="ans_seq_ques"></td></tr>
<tr>
<td>Email id</td>
<td><input type="email" name="email"></td></tr>
<tr>
<td>Language Known</td>
<td><input type="checkbox" name="lang[]" value="Malayalam">Malayalam<input type="checkbox" name="lang[]" value="English">English<input type="checkbox" name="lang[]" value="Hindi">Hindi</td></tr>
<tr>
<td>Phone number</td>
<td><table border="1">
<tr>
<td>Home</td><td>Office</td></tr>
<tr>
<td><input type="name" name="homephno" ></td>
<td><input type="name" name="officephno" ></td></tr>
</table></td></tr>
<td>Upload CV</td>
<td><input type="file" name="cvupload"></td></tr>
<td><input type="reset" value="reset"></td>
<td><input type="submit" value="submit"></td></tr>
</table>
</form>
</body>
</html>


