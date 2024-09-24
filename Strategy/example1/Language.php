<?php
class Language{

   private $strategy;

    public function __construct(Strategy $strategy){

        $this->strategy=$strategy;

    }

    public function getMessageWelcome(){
       return $this->strategy->getMessageWelcome();
    }

}

?>