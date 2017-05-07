<?php
//echo "From Server".json_encode($_POST)."<br>";

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'sherazahmed93@gmail.com';
require '..\PHPMailer\PHPMailerAutoload.php';
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.mail.yahoo.com';
$mail->SMTPAuth = true;
$mail->Username = 'habibullahsajid@ymail.com';
$mail->Password = 'Window245';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($email, $name);
$mail->addAddress($to, 'Sheraz Ahmad');
$mail->Subject = $subject;
$mail->Body = $message;

if (!$mail->send()) {
    echo '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
} else {
    echo '<div class="alert alert-success">Thank You! I will be in touch</div>';
}

?>