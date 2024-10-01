<?php 

require('Connection.php');
require('Sms.php');
require('Email.php');

function Send(Connection $connection)
{
    $connection->send();
}

$sms=new Sms();
$email=new Email();

Send($email);
Send($sms);



