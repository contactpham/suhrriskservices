<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'info@insuhr.com';

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Name:  $_POST[name]
	E-Mail: $_POST[email]
	Message: $_POST[message]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	// finally, send the message
	mail($youremail, 'Contact Form', $body, $headers );

}

// otherwise, let the spammer think that they got their message through

header('Location: http://localhost:8080/suhrriskservices/index.html');
exit('Redirecting you to http://localhost:8080/suhrriskservices/index.html');

?>
<!DOCTYPE HTML>
<html>
<head>

<title>Thank You!</title>

</head>
<body>

<h1>Thank You!</h1>
<p>We'll get back to you as soon as possible.</p>

</body>
</html>