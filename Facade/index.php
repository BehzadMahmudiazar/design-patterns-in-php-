<?php 

include('Pc.php');

$pc=new Pc();
$pc->reportStatus();

$pc->PowerOn();
$pc->reportStatus();

$pc->PowerOff();
$pc->reportStatus();

