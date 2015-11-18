<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "HariRamaKrishna_Gurram@uml.edu";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "smtp.mandrillapp.com"; // Mandrillapp.com SES server, note "tls://" protocol
$mail->Port       =  587;                    // set the SMTP port
$mail->Username   = "g.hariramakrishna@yahoo.com";  // SMTP  username
$mail->Password   = "IoO9J1uH1MvKHp9wjEsJdQ";  // SMTP password
$mail->SetFrom($from, 'ISA Website');
$mail->AddReplyTo($from,'ISA Website');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
