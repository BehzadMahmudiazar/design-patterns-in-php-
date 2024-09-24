<?php

include_once('Language.php');
include_once('Persian.php');
include_once('English.php');

$language=new Language(new Persian());
echo $language->getMessageWelcome();



$language=new Language(new English());
echo $language->getMessageWelcome();
