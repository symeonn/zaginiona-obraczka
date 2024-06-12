<html>
	<head>
	
	</head>
	<body>
	
	<?php 
$ToEmail = 'symeonn@tlen.pl'; 
$EmailSubject = 'Contact from byMario.pl '; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"])."<br>"; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>

<h3>Your message was sent</h3>
</br></br></br>

<a href="/index.html">&lt;go back</a>

</body>
</html>
