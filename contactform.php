<!DOCTYPE html>
<html>
<head>
	<title>contact_form</title>
</head>
<body>
<?php 
echo "<p>Data processed</>";

if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$mailFrom=$_POST['e-mail'];
	$telephone=$_POST['telephone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

	$mailTo="secilafsar@uic.es";
	$headers="From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n". $message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
} 

 ?>
</body>
</html>
