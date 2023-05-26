<?php     
$to_email = 'mdmuzammilarman786@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';

if(mail($to_email,$subject,$message)){
	echo "successfull";
}else{
	echo "sorry";
}
?>