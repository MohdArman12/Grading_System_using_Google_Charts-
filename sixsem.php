<?php
$name=$_POST['name'];
$dob=$_POST['dob'];
$enroll=$_POST['enroll'];
$sem=$_POST['sem'];
$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$total=($first+$second+$third+$fourth);
$rem=(1000-$total);
$t=($total/10);
if($t){
	if($t>=91 && $t<=100){
		$tg="O";
	}
	else if($t>=86 && $t<=90){
		$tg="A+";
	}
	else if($t>=76 && $t<=85){
		$tg="A";
	}
	else if($t>=66 && $t<=75){
		$tg="B+";
	}
	else if($t>=56 && $t<=65){
		$tg="B";
	}
	else if($t>=46 && $t<=55){
		$tg="C";
	}
	else if($t>=33 && $t<=45){
		$tg="P";
	}
	else{
		$tg="F";
	}
}

if($first){
	if($first=="Ab"){
		$g1="Ab";
	}
	else if($first>=136 && $first<=150){
		$g1="O";
	}
	else if($first>=129 && $first<=135){
		$g1="A+";
	}
	else if($first>=114 && $first<=128){
		$g1="A";
	}
	else if($first>=99 && $first<=113){
		$g1="B+";
	}
	else if($first>=84 && $first<=98){
		$g1="B";
	}
	else if($first>=69 && $first<=83){
		$g1="C";
	}
	else if($first>=50 && $first<=68){
		$g1="P";
	}
	else{
		$g1="F";
	}
}

if($second){
	if($second=="Ab"){
		$g2="Ab";
	}
	else if($second>=136 && $second<=150){
		$g2="O";
	}
	else if($second>=129 && $second<=135){
		$g2="A+";
	}
	else if($second>=114 && $second<=128){
		$g2="A";
	}
	else if($second>=99 && $second<=113){
		$g2="B+";
	}
	else if($second>=84 && $second<=98){
		$g2="B";
	}
	else if($second>=69 && $second<=83){
		$g2="C";
	}
	else if($second>=50 && $second<=68){
		$g2="P";
	}
	else{
		$g2="F";
	}
}

if($third){
	if($third=="Ab"){
		$g3="Ab";
	}
	else if($third>=136 && $third<=150){
		$g3="O";
	}
	else if($third>=129 && $third<=135){
		$g3="A+";
	}
	else if($third>=114 && $third<=128){
		$g3="A";
	}
	else if($third>=99 && $third<=113){
		$g3="B+";
	}
	else if($third>=84 && $third<=98){
		$g3="B";
	}
	else if($third>=69 && $third<=83){
		$g3="C";
	}
	else if($third>=50 && $third<=68){
		$g3="P";
	}
	else{
		$g3="F";
	}
}

if($fourth){
	if($fourth=="Ab"){
		$g4="Ab";
	}
	else if($fourth>=496 && $fourth<=550){
		$g4="O";
	}
	else if($fourth>=452 && $fourth<=495){
		$g4="A+";
	}
	else if($fourth>=413 && $fourth<=451){
		$g4="A";
	}
	else if($fourth>=358 && $fourth<=412){
		$g4="B+";
	}
	else if($fourth>=303 && $fourth<=357){
		$g4="B";
	}
	else if($fourth>=248 && $fourth<=302){
		$g4="C";
	}
	else if($fourth>=182 && $fourth<=247){
		$g4="P";
	}
	else{
		$g4="F";
	}
}

$con=mysqli_connect("localhost","root","","gdb");
$q="insert into sixsem (name,dob,enroll,sem,Ecom,DMW,SC,major,total,rem)values('$name','$dob','$enroll','$sem','$first','$second','$third','$fourth','$total','$rem')";
$q1="insert into grade6(name,enroll,Ecom,DMW,SC,major,total)values('$name','$enroll','$g1','$g2','$g3','$g4','$tg')";
$s1=mysqli_query($con,$q);
$s2=mysqli_query($con,$q1);
if(($s1==true)&&($s2==true)){
	
?>
<html>
<div>
<link rel="stylesheet" href="css/msg.css">
<svg height="120px" viewBox="0 0 512 512" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="0" y2="512"><stop offset="0" stop-color="#2af598"/><stop offset="1" stop-color="#009efd"/></linearGradient><path d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0" fill="url(#a)"/></svg>
<h1>Insertion Success!</h1>
<form action="crud6.php" method="POST">
<input type="submit" id="btn" name="add6" value ="Continue">
</form>
</div>
</html>
<?php

}

?>