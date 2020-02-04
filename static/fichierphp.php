
<?php

$name=$_POST["name"];
$email=$_POST["email"];
$text=$_POST["message"];
$receiver="chloe.bosquin@gmail.com";
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n" .
				'Reply-To:'.$email. "\r\n" .
				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
				'Content-Disposition: inline'. "\r\n" .
				'Content-Transfer-Encoding: 7bit'." \r\n" .
                'X-Mailer:PHP/'.phpversion();
				
mail($receiver,$email_subject,$email_body,$headers);
if(isset($_POST["sent"])){
	echo 'email sent';
	header('Location: http://www.paradisecity.be/');
}
else{
	header('Location: http://www.paradisecity.be/contact');
}

?>