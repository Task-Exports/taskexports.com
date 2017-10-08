<?php
	
	$name=$_POST["name"];
	$from=$_POST["email"];
	$sub=$_POST["subject"];
	$mess=$_POST["message"];

date_default_timezone_set('Etc/UTC');

include('/usr/share/php/libphp-phpmailer/class.phpmailer.php');
include('/usr/share/php/libphp-phpmailer/class.smtp.php');

$mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "admin@taskexports.com";
//Password to use for SMTP authentication
$mail->Password = "saiBaba@4";
//Set who the message is to be sent from
$mail->setFrom($from, $name);
//Set an alternative reply-to address
$mail->addReplyTo($from, $name);
//Set who the message is to be sent to
$mail->addAddress('info@taskexports.com', 'Website Contact');

$mail->Subject = $sub;

$mail->Body = $mess;

$err = "";
if (!$mail->send()) {
    $err = "Sorry, There's been some trouble. Try again please. " . $mail->ErrorInfo;
} else {
    $err = "Thanks for Contacting us. We will be in touch soon.";
}


?>

<html>
<head>
	<title>TASK Exports</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/texlogo.png" type="image/png" sizes="16x16 32x32"> 
	<link rel="stylesheet" type="text/css" media="(min-width: 720px)" href="css/styles.css">
	<link rel="stylesheet" type="text/css" media="(max-width: 720px)" href="css/mobilestyles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="cont">
		<div class="ovl">
			<h1><?php echo $err; ?></h1><br>
			<form action="index.php">
				<button type="submit">Home</button>
			</form>
		</div>
	</div>
	<div class="foot">
        <div class="ns">
            <div class="diso">
                <strong>TASK Exports</strong><br>
                H-4, 2nd Floor,<br>
                TNHB, Arakkonam,<br>
                Tamil Nadu, India<br>
                631003
            </div>
            <div class="diso">
                <strong><a href="mailto:info@taskexports.com">info@taskexports.com</a><br>
                <a href="tel:+919894807274">+91 98 94 807274</a></strong>
            </div>
            <div class="diso">
                &copy;<?php echo date('Y'); ?> Task Exports<br>
                Site Designed by: <strong><a href="https://therohith.com" target="_">Rohith</a></strong>
            </div>
        </div>
    </div>

</body>
</html>