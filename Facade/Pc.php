<?php

include('Monitor.php');
include('Ram.php');

class Pc{

    private $Monitor;
    private $Ram;

    public function __construct(){
        $this->Monitor=new Monitor();
        $this->Ram=new Ram();
    }


    public function PowerOn(){
        $this->Monitor->ON();
        $this->Ram->ON();
    }

    public function PowerOff(){
        $this->Monitor->OFF();
        $this->Ram->OFF();
    }

    public function reportStatus(){
        $this->Monitor->status();
        $this->Ram->status();
    }

}