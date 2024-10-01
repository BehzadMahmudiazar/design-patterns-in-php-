<?php
abstract class Connection
{

   abstract public function connect();

   public function send()
   {
    
       $this->connect();

   }


}