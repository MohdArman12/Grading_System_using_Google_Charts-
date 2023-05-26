<?php
$name=$_POST['name'];
$dob=$_POST['dob'];
$enroll=$_POST['enroll'];
$sem=$_POST['sem'];
$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];
$sixth=$_POST['sixth'];
$seventh=$_POST['seventh'];
$eighth=$_POST['eighth'];
$total=($first+$second+$third+$fourth+$fifth+$sixth+$seventh+$eighth);
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
	else if($fourth>=136 && $fourth<=150){
		$g4="O";
	}
	else if($fourth>=129 && $fourth<=135){
		$g4="A+";
	}
	else if($fourth>=114 && $fourth<=128){
		$g4="A";
	}
	else if($fourth>=99 && $fourth<=113){
		$g4="B+";
	}
	else if($fourth>=84 && $fourth<=98){
		$g4="B";
	}
	else if($fourth>=69 && $fourth<=83){
		$g4="C";
	}
	else if($fourth>=50 && $fourth<=68){
		$g4="P";
	}
	else{
		$g4="F";
	}
}

if($fifth){
	if($fifth=="Ab"){
		$g5="Ab";
	}
	else if($fifth>=136 && $fifth<=150){
		$g5="O";
	}
	else if($fifth>=129 && $fifth<=135){
		$g5="A+";
	}
	else if($fifth>=114 && $fifth<=128){
		$g5="A";
	}
	else if($fifth>=99 && $fifth<=113){
		$g5="B+";
	}
	else if($fifth>=84 && $fifth<=98){
		$g5="B";
	}
	else if($fifth>=69 && $fifth<=83){
		$g5="C";
	}
	else if($fifth>=50 && $fifth<=68){
		$g5="P";
	}
	else{
		$g5="F";
	}
}
if($sixth){
	if($sixth=="Ab"){
		$g6="Ab";
	}
	else if($sixth>=91 && $sixth<=100){
		$g6="O";
	}
	else if($sixth>=86 && $sixth<=90){
		$g6="A+";
	}
	else if($sixth>=76 && $sixth<=85){
		$g6="A";
	}
	else if($sixth>=66 && $sixth<=75){
		$g6="B+";
	}
	else if($sixth>=56 && $sixth<=65){
		$g6="B";
	}
	else if($sixth>=46 && $sixth<=55){
		$g6="C";
	}
	else if($sixth>=33 && $sixth<=45){
		$g6="P";
	}
	else{
		$g6="F";
	}
}
if($seventh){
	if($seventh=="Ab"){
		$g7="Ab";
	}
	else if($seventh>=91 && $seventh<=100){
		$g7="O";
	}
	else if($seventh>=86 && $seventh<=90){
		$g7="A+";
	}
	else if($seventh>=76 && $seventh<=85){
		$g7="A";
	}
	else if($seventh>=66 && $seventh<=75){
		$g7="B+";
	}
	else if($seventh>=56 && $seventh<=65){
		$g7="B";
	}
	else if($seventh>=46 && $seventh<=55){
		$g7="C";
	}
	else if($seventh>=33 && $seventh<=45){
		$g7="P";
	}
	else{
		$g7="F";
	}
}
if($eighth){
	if($eighth=="Ab"){
		$g8="Ab";
	}
	else if($eighth>=46 && $eighth<=50){
		$g8="O";
	}
	else if($eighth>=43 && $eighth<=45){
		$g8="A+";
	}
	else if($eighth>=38 && $eighth<=42){
		$g8="A";
	}
	else if($eighth>=33 && $eighth<=37){
		$g8="B+";
	}
	else if($eighth>=28 && $eighth<=32){
		$g8="B";
	}
	else if($eighth>=23 && $eighth<=27){
		$g8="C";
	}
	else if($eighth>=17 && $eighth<=22){
		$g8="P";
	}
	else{
		$g8="F";
	}
}

$con=mysqli_connect("localhost","root","","gdb");
$q="insert into fifsem (name,dob,enroll,sem,Csharp,WT,OperationRes,Egov,SE,Csharp_pr,WT_pr,SE_pr,total,rem)values('$name','$dob','$enroll','$sem','$first','$second','$third','$fourth','$fifth','$sixth','$seventh','$eighth','$total','$rem')";
$q1="insert into grade5(name,enroll,Csharp,WT,OperationRes,Egov,SE,Csharp_pr,WT_pr,SE_pr,total)values('$name','$enroll','$g1','$g2','$g3','$g4','$g5','$g6','$g7','$g8','$tg')";
$s1=mysqli_query($con,$q);
$s2=mysqli_query($con,$q1);
if(($s1==true)&&($s2==true)){
	
?>
<html>
<div>
<link rel="stylesheet" href="css/msg.css">
<svg height="120px" viewBox="0 0 512 512" width="120px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="256" x2="256" y1="0" y2="512"><stop offset="0" stop-color="#2af598"/><stop offset="1" stop-color="#009efd"/></linearGradient><path d="m437.019531 74.980469c-48.351562-48.351563-112.640625-74.980469-181.019531-74.980469s-132.667969 26.628906-181.019531 74.980469c-48.351563 48.351562-74.980469 112.640625-74.980469 181.019531s26.628906 132.667969 74.980469 181.019531c48.351562 48.351563 112.640625 74.980469 181.019531 74.980469s132.667969-26.628906 181.019531-74.980469c48.351563-48.351562 74.980469-112.640625 74.980469-181.019531s-26.628906-132.667969-74.980469-181.019531zm-181.019531 397.019531c-119.101562 0-216-96.898438-216-216s96.898438-216 216-216 216 96.898438 216 216-96.898438 216-216 216zm20-236.019531h90v40h-90v90h-40v-90h-90v-40h90v-90h40zm0 0" fill="url(#a)"/></svg>
<h1>Insertion Success!</h1>
<form action="crud5.php" method="POST">
<input type="submit" id="btn" name="add5" value ="Continue">
</form>
</div>
</html>
<?php

}

?>