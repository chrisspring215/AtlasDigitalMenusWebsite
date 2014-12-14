<?php

$contact_name = $_POST['contact_name'];
$contact_company = $_POST['contact_company'];
$contact_website = $_POST['contact_website'];
$contact_phone = $_POST['contact_phone'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$to = 'sales@jettisystems.com';
$subject = 'New Affilate Contact';

$message = 'CONTACT NAME: ' . $contact_name . "\n" . 'COMPANY: ' . $contact_company . "\n" . 'WEBSITE: ' . $contact_website . "\n" . 'PHONE: ' . $contact_phone . "\n" . 'EMAIL: ' . $contact_email . "\n" . 'MESSAGE: ' . $contact_message;

mail ($to, $subject, $message, 'From: ' . $contact_name);
header("Location: http://www.jettisystems.com/affil-contact-thank-you.html");

?>


