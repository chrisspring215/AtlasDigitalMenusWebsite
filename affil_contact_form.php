<?php

$contact_name = $_POST['contact_name'];
$contact_company = $_POST['contact_company'];
$contact_website = $_POST['contact_website'];
$contact_phone = $_POST['contact_phone'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$to = "chris@spring215.com";
$subject = "New Affilate Contact";

$message = 'CONTACT NAME: ' . $contact_name . 'COMPANY: ' . $contact_company . 'WEBSITE: ' $contact_website . 'PHONE: ' $contact_phone . 'EMAIL: ' $contact_email . 'MESSAGE: ' $contact_message;

mail ($to, $subject, $message, "From: " . $contact_name);
echo "Your message has been sent.";

?>


