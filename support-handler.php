<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_form = 'nvidia.skncoe2020@gmail.com';

$email_subject='New Form Submission';

$email_body='User Name: $name.\n'.
            'User Email: $visitor_email.\n'.
            'User Message: $message.\n';

$to='nvidia.skncoe20202@hgmail.com';

$headers='Form: $email_form\r\n';

$headers='Reply-To: $visitor_email \r\n';

mail($to,$email_subject,$email_body ,$headers);

header('Location: support.html');

?>
