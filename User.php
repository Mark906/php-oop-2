<?php
class User {
    public $name;
    public $lastname;
    public $age;
    public $nickname;
    private $password;

    function __construct($_name,$_lastname, $_age){
        $this->name = $_name;
        $this->lastname = $_lastname;
        if(is_numeric($_age)){
            $this->age = $_age;
        } else {
          throw new Exception("Bisogna inserire un numero.");
        }
    }
    public function getName(){
        return $this->name;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getAge(){
        return $this->age;
    }

    public function setNickname($_nickname){
        if (!is_numeric($_nickname)) {
            $this->nickname = $_nickname;
        } else {
            throw new Exception("Bisogna inserire testo.");
        }
    }

    public function getNickname(){
        return $this->nickname;
    }

    public function setPassword($_password){
        $this->password = $_password;
    }

    public function getPassword(){
        return $this->password;
    }

}
?>
