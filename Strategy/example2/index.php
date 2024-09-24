<?php

include_once('Language.php');
include_once('Persian.php');
include_once('English.php');

$language=new Language();
echo $language->getMessageWelcome(new Persian());

echo $language->getMessageWelcome(new English());
