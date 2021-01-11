<?php
header('Access-Control-Allow-Origin: *'); 
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  
  $email = 'kesav.nallan@gmail.com';
  $name = 'Manjusree';
  echo ($email); 
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

 
  $fromName = $_POST['name'];
  $fromEmail = $_POST['email'];
  $replyName = $_POST['name'];
  $replyEmail = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  
  $send = SimpleMail::make()
->setTo($email, $name)
->setFrom($fromEmail, $fromName)
->setSubject($subject)
->setMessage($message)
->send();
    
echo ($send) ? 'Email sent successfully' : 'Could not send email';
?>
