<?php

class User {
    //class attributes
    public $name;
    public $email;
    public $password;
    //constructor method
    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //class methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$user1 = new User('Bennett', 'Bennett@gmail.com', '1234');

echo $user1->get_name();
echo $user1->email;

//inheritance
class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }
}
$employee1 = new Employee('Sara', 'sara@gmail.com', '12345', 'manager');
echo $employee1->get_title();

?>