<?php
include_once('Strategy.php');

class Persian implements Strategy{

    public function getMessageWelcome(){

        return "خوش آمدید";
    }

}

?>