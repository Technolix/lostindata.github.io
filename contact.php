<?php
	if(isset($_POST['submit'])){
		$entreprise=$_POST['entreprise'];
		$email=$_POST['email'];
		$tel=$_POST['tel'];
		$site = $_POST['site'];
		$message=$_POST['message'];

		$to='leang.cecile@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Entreprise :".$entreprise."\n"."Telephone :".$tel."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>