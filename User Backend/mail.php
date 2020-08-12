<?php
require 'PHPMailerAutoload.php';
						require 'credential.php';

						$mail = new PHPMailer;

						$mail->SMTPDebug = 4;                               // Enable verbose debug output

						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = EMAIL;                 // SMTP username
						$mail->Password = PASS;                           // SMTP password
						$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 587;                                    // TCP port to connect to

						$mail->setFrom(EMAIL, 'Caramel IT Academy');
						$mail->addAddress($_POST['email']);     // Add a recipient
						               // Name is optional
						$mail->addReplyTo(EMAIL);
						

						//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
						//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = 'Thank you for registering';
						$mail->Body    = 'You have been successfully registered with us';
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

						if(!$mail->send()) {
						    header('location:notsuccessreg.php');
						} else {
						    header('location:successreg.php');
						}
?>