<?php

	include_once "../swiftmailer/lib/swift_required.php";

	$subject = 'Hello from Mandrill, PHP!';
	$from = array('isaac.vanhouten@connected-customer.herokuapp.com' =>'Isaac Van Houten');
	$to = array(
	 'isaac.vanhouten@standardregister.com'  => 'Isaac Van Houten',
	 'aaron.retter@standardregister.com' => 'Aaron Retter'
	);

	$text = "Mandrill speaks plaintext";
	$html = "<em>Mandrill speaks <strong>HTML</strong></em>";

	$transport = Swift_SmtpTransport::newInstance('smtp.mandrillapp.com', 587);
	$transport->setUsername('app27682359@heroku.com');
	$transport->setPassword('KzD7XngTVPG4rpgbiRZJ4g');
	$swift = Swift_Mailer::newInstance($transport);

	$message = new Swift_Message($subject);
	$message->setFrom($from);
	$message->setBody($html, 'text/html');
	$message->setTo($to);
	$message->addPart($text, 'text/plain');

	if ($recipients = $swift->send($message, $failures))
	{
	 	echo 'Message successfully sent!';
	 	print("Message Successfully sent!");
	} else {
	 	echo "There was an error:\n";
	 	print("There was an error:\n");
	 	print_r($failures);
	}

?>