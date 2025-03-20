<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

if(trim($name) == '') {
    echo '<div class="error_message">Attention! You must enter your name.</div>';
    exit();
} 
else if(trim($email) == '') {
    echo '<div class="error_message">Attention! Please enter a valid email address.</div>';
    exit();
} 
else if(trim($phone) == '') {
    echo '<div class="error_message">Attention! Please enter your phone.</div>';
    exit();
} 
else if(trim($comments) == '') {
    echo '<div class="error_message">Attention! Please enter your message.</div>';
    exit();
}

$to = "infinmax2014@gmail.com";
$subject = 'You\'ve been contacted by ' . $name . '.';
$msg = "Name: ".$name."\n\nemail: ".$email."\n\nphone: ".$phone."\n\nComments:\n".$comments;

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/".phpversion();

if(mail($to, $subject, $msg, $headers)) {
    echo "</fieldset>";
    echo "<div id='success_page'>";
    echo "<h1>Your Message Sent Successfully.</h1>";
    echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us. We will contact you shortly.</p>";
    echo "</div>";
    echo "</fieldset>";
    echo '<a href="index.html">Return to Home</a>';
} 
else {
    echo 'ERROR! Email not sent.';
    error_log('Mail error: Unable to send email to ' . $to);
}
?>