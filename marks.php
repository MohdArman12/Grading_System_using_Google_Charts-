<?php
$name=$_POST['name'];
$email=$_POST['email'];
$roll=$_POST['roll'];
$sem=$_POST['sem'];
$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];
$other=$_POST['other'];
$total=($first+$second+$third+$fourth+$fifth+$other);
$rem=(1000-$total);

$con = new  mysqli("localhost","root","","gdb");
$query = "INSERT into firstsem(name,email,roll,sem,first,second,third,fourth,fifth,other,total,rem)values(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $con->prepare($query);
$stmt->bind_param("sssiiiiiiiii",$name,$email,$roll,$sem,$first,$second,$third,$fourth,$fifth,$other,$total,$rem);
$stmt->execute();
echo "insertion Succesfull";
$stmt->close();
$con->close();


?>