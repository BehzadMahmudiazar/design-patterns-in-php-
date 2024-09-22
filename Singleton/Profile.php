<?php 
class Profile{

    private static  $profile=null;

    private $name;

    private function __construct(){

    }

    public static function getInstance()//:profile
    {

        if (self::$profile === null) {
            self::$profile = new Profile();
        }
        return self::$profile;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){

        $this->name=$name;
    }

}


