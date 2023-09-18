<?php
require __DIR__ . '/../vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$name = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
 //Set the mail server settings
 $mail->isSMTP();
 $mail->Host = 'smtp.gmail.com';
 $mail->SMTPAuth = true;
 $mail->Username = 'mzns26@gmail.com';
 $mail->Password = 'fpzudwgnhzwfoonr';
 $mail->SMTPSecure = 'ssl';
 $mail->Port = '465';

function sendMailInscription($to, $user_id, $token)
{
    global $mail;
    $mail->CharSet = 'UTF-8';
    $mail->clearAddresses();
    //Set the recipients for the mail
    $mail->setFrom('mzns26@gmail.com', 'Martinez Nicolas' );
    $mail->addAddress($to);
    $mail->addReplyTo('info@example.com', 'Info');         //If the recipient replies to the mail, it will automatically use this address as reply-address
    //Set the content of the mail
    $mail->isHTML(true);                                  //Set the mail format to HTML
    $mail->Subject = 'Demande d\'inscription';
    $mail->Body = "Confirmation de votre compte" . ' '.  "afin de valider votre compte, merci de cliquer sur ce lien \n \n  http://localhost:8888/confirm.php?id=$user_id&token=$token";
    //Sending the mail
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}


function sendMailForget($to, $user_id, $reset_token)
{
    global $mail;
    $mail->CharSet = 'UTF-8';
    $mail->clearAddresses();
    //Set the recipients for the mail
    $mail->setFrom('mzns26@gmail.com', 'Martinez Nicolas' );
    $mail->addAddress($to);
    $mail->addReplyTo('info@example.com', 'Info');         //If the recipient replies to the mail, it will automatically use this address as reply-address
    //Set the content of the mail
    $mail->isHTML(true);                                  //Set the mail format to HTML
    $mail->Subject = 'Demande de mot de passe oublié';
    $mail->Body = "Réinitialisation de votre mot de passe". ' '. "Affin de réinitialiser votre mot de passe, merci de cliquer sur ce lien\n \n http://localhost:8888/inc/reset.php?id=$user_id&token=$reset_token ";
    //Sending the mail
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}

function sendMailNewsletters($to)
{
    global $mail;
    $mail->CharSet = 'UTF-8';
    $mail->clearAddresses();
    //Set the recipients for the mail
    $mail->setFrom('mzns26@gmail.com', 'Martinez Nicolas' );
    $mail->addAddress($to);
    $mail->addReplyTo('info@example.com', 'Info');         //If the recipient replies to the mail, it will automatically use this address as reply-address
    //Set the content of the mail
    $mail->isHTML(true);                                  //Set the mail format to HTML
    $mail->Subject = 'Inscription Newsletters Mode 83';
    $mail->Body = "<b>Confirmation de votre inscription à la newsletters </b>" . ' '. "On vous enverra bientot nos actualités ;)";
    //Sending the mail
    if (!$mail->send()) {
        return false;
    } else {
        return true;
    }
}

