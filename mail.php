<?php

//Taking all values
$fname 		= $_POST['fname'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$fname."\n\nSubject: ".$subject."\n\nMessage: ".$msg;

$to 		= 'gerakl.bee@mail.com';
$to         = 'gerakl.bee@gmail.com';
$to         = 'itground2020@gmail.com';
$headers	= 'FROM: "'.$email.'"';

$send		= mail($to, $fname, $output."\n\n***Это писмо было отправлено из сайта ooo'Gerakl'", $headers);