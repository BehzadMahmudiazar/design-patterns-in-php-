<?php
class Ram
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
       
        echo " ram is {$this->status} \n";
    }

    public function readData(){
        if($this->status=='ON')
            echo "Reading data from RAM has started";
        else 
           echo "Cannot read data from RAM because RAM is off";
             
    }

    public function WriteData(){
        if($this->status=='ON')
            echo "Writing data from RAM has started";
        else 
           echo "Cannot writing data from RAM because RAM is off";
             
    }
}