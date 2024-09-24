<?php
class Language{

   private $strategy;

    public function getMessageWelcome(Strategy $strategy){
       return $strategy->getMessageWelcome();
    }

}

?>