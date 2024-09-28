<?php
class Monitor
{

    protected $status;
    public function __construct(){
        $this->status='OFF';
    }


    public function ON(){
        $this->status='ON';
    }
    public function OFF(){
        $this->status='OFF';
    }

    public function status(){
        echo "monitor is {$this->status} \n";
    }
}