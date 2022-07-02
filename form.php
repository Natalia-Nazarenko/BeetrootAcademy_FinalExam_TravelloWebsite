<?php

// Option 1: PHP Mail Function:

 $mailto = "nazarenkont@gmail.com";  //My email address
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['tel']; //getting customer Phome number
 $userSubject = $_POST['subject']; //getting subject from client
 $userText = $_POST['msg']; //getting message from client
 $subject = "Message from a client";
 $subject2 = "Message was submitted successfully!"; // For customer confirmation
 
 //Email body I will receive
 $message = "Client Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n"
 . "Email: " . $fromEmail . "\n"
 . "Subject: " . $userSubject . "\n\n"
 . "Client Message: " . $userText;
 
 //Message for a client for confirmation
 $message2 = "Dear " . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "Regards," . "\n" . "Travello Team";
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email that I will receive
 $headers2 = "From: " . $mailto; // Email client will receive 
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }


// Option 2 - PHPMailer:

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/Exception.php';


// $mail = new PHPMailer(true);
// $mail->CharSet = 'UTF-8';
// $mail->IsHTML(true);

// $mail->setFrom('nazarenkont@gmail.com', 'Travello');
// $mail->addAddress('nazarenkont@gmail.com');
// $mail->Subject = 'Travello Client Form';


// $body = '<h1>Client information:</h1>';

// if(trim(!empty($_POST['name']))) {
//     $body.='<p><strong>Name:</strong> '.$_POST['email'].'</p>';
// }
// if(trim(!empty($_POST['email']))) {
//     $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
// }
// if(trim(!empty($_POST['tel']))) {
//     $body.='<p><strong>Phone number:</strong> '.$_POST['tel'].'</p>';
// }
// if(trim(!empty($_POST['subject']))) {
//     $body.='<p><strong>Subject:</strong> '.$_POST['subject'].'</p>';
// }
// if(trim(!empty($_POST['msg']))) {
//     $body.='<p><strong>Message:</strong> '.$_POST['msg'].'</p>';
// }

// $mail->Body = $body;

// if (!$mail->send()) {
//     $message = 'Error. Try Again!';
// }
// else {
//     $message = 'Your message has been sent';
// }

// $response = ['message' => $message];

// header('Content-type: application/json');
// echo json_encode($response);

?>
