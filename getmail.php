<?php
$sroll=$_POST['sroll'];
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("gdb",$con);
$query = "SELECT * from firstsem where roll='$sroll'"; 
$result = mysql_query($query);
if (mysql_query($query)==true){
$row = mysql_fetch_array($result);
$name=$row[0];
$email=$row[1];
$roll=$row[2];
$sem=$row[3];
$first=$row[4];
$second=$row[5];
$third=$row[6];
$fourth=$row[7];
$fifth=$row[8];
$total=$row  [9];
$rem=$row[10];
echo $name."".$email."".$roll."".$sem."".$first."".$second."".$third."".$fourth."".$fifth."".$total."".$rem;
}
?>
