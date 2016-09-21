<?php

## CONFIG ##

# LIST EMAIL ADDRESS
$recipient = "lafotokombi@gmail.com";

# SUBJECT (Subscribe/Remove)
$subject = "Subscriptor de La Fotokombi";

# RESULT PAGE
$location = "enter the URL of the result page here";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = $recipient;

# MAIL BODY

$body .= "Email: ".$_REQUEST['subscribe-email']." \n";
# add more fields here if required

## SEND MESSGAE ##

mail( $recipient, $subject, $body, "From: $sender" ) or die ("No se puedo suscribir.");

## SHOW RESULT PAGE ##

header( "Location: $location" );
?>