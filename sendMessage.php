<?php

echo  $name      = ($_REQUEST['name']);
echo  $email  = ($_REQUEST['email']);
echo  $subject  = ($_REQUEST['subject']);
echo  $message  = ($_REQUEST['message']);
// the message
$msg = "$message";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,700);

// send email
mail("$email","$subject",$msg);

header("Location: contact.php");
?>