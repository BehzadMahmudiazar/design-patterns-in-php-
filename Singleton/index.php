<?php
require_once('Profile.php');

$myProfile=Profile::getInstance();
$myProfile->setName('ShnoSoft');
$myProfile1=Profile::getInstance();
echo $myProfile1->getName();
