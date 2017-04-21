<?php

if ( isset( $_POST[ 'email' ] ) ) {
	
	//user email
	$email = $_POST["email"];

	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'mail.apareciumlabs.com'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'info@apareciumlabs.com'; // SMTP username
	$mail->Password = 'admin@aparecium'; // SMTP password
	$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 25; // TCP port to connect to
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	$mail->setFrom( 'info@apareciumlabs.com', 'Aparecium Labs' );
	$mail->addAddress( 'info@apareciumlabs.com', 'Visitor - Aparecium Labs' ); // Add a recipient 
	$mail->addReplyTo( 'info@apareciumlabs.com', 'Information' );

	$mail->isHTML( true ); // Set email format to HTML

	$mail->Subject = 'Coming Soon page subscription. New';
	$mail->Body =
	'
	<html>
	<head></head>
	<body>
	<p>Howdy Admin!,</p>
	
	<p>A visitor ( ' . $email . ' ) came to your website and was redirected to the website under construction page. And He/She would like to subscribe to stay tuned. Please refer back immediately.
	<br><br>Cheers.<br></p>
	
	<table border="0" cellspacing="0" cellpadding="0" style="color:#393939" >
	<tbody>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>
	<table border="0" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
	<td>&nbsp;<img src="http://apareciumlabs.com/images/aparecium_email_signature.png" alt="" width="96" height="85" /></td>
	</tr>
	<tr>
	<td><span style="font-size:16px" ><b>Aparecium Labs</b></span></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td><span>Address&nbsp;-&nbsp;</span><span>&nbsp;Near Galpinthaliya, Kalamulla, Kalutara, Sri Lanka</span></td>
	</tr>
	<tr>
	<td><span><span>Phone</span>&nbsp;-&nbsp;<a href="tel:+94-777933830" target="_blank">+94-777933830&nbsp;&nbsp;</a>&nbsp;</span></td>
	</tr>
	<tr>
	<td><span><span>Email&nbsp;-&nbsp;</span>&nbsp;<a href="mailto:info@apareciumlabs.com" target="_blank">info@apareciumlabs.com&nbsp;&nbsp;</a>&nbsp;</span></td>
	</tr>
	<tr>
	<td><span><span>Website&nbsp;-&nbsp;</span>&nbsp;<a href="http://www.apareciumlabs.com/" target="_blank" rel="nofollow">www.apareciumlabs.com&nbsp;</a>&nbsp;</span></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	</tr>
	<tr>
	<td>
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tbody>
	<tr>
	<td><a href="http://facebook.com/apareciumlabs" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/facebook.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://us.linkedin.com/in/brion-mario" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/linkedin.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://twitter.com/apareciumlabs" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/twitter.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://www.youtube.com/channel/UCvVTVLPfR_05rqAcL8MuqLg" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/youtube.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://vimeo.com/apareciumlabs" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/vimeo.png" alt="" width="16" height="16" /></a>&nbsp;<a href="https://dribbble.com/apareciumlabs" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/dribbble.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://github.com/brionsilva" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/github.png" alt="" width="16" height="16" /></a>&nbsp;<a href="http://plus.google.com/109529137893902801266" target="_blank"><img src="http://apareciumlabs.com/images/icons_32/googleplus.png" alt="" width="16" height="16" /></a></td>
</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	-------------------------------------                     
	<br><br>
	[ Sent at - ' . $time .' ]
	
	</body>
	</html>';

	$mail->AltBody = 'A visitor came to your website and was redirected to the website under construction page. And He/She would like to subscribe to stay tuned. Please refer back immediately. Cheers.';
	
	if ( !$mail->send() ) {
		
		echo "<script type='text/javascript'>alert('Oops! Something went wrong.');
		window.location.replace(\"index.php\");</script>";
		
	} else {
		header('Location:thanks_comingsoon.php');
	}

}
?>