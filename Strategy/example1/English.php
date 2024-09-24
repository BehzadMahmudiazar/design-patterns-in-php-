<?php
include_once('Strategy.php');

class English implements Strategy{

    public function getMessageWelcome(){

        return "welcome";
    }

}

?>