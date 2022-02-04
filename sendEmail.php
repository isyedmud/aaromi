<?php
                $to='contacts@aaromi.co';
				$subject="Regarding New Enquiry";
				$from = 'aarmoi@care.com';
				$body='Hi, <br/> You have new enquiry from <br> Name : '.$_POST['name'].' <br>Email : '.$_POST['email'].' <br>Subject : '.$_POST['subject'].' 
				<br>Message : '.$_POST['message'].'' ;
				$headers = "From: " . strip_tags($from) . "\r\n";
				$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				mail($to,$subject,$body,$headers);
?>