<?php

class Config
{
    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "rnw";

    // connect Method
    public function connect()
    {
        // mysqli_connect() // return bool
        $res = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

        return $res;
    }
}

?>



<!-- class Student
{
    // Attributes
    private $id;
    private $name;
    private $age;
    private $course;

    // Constructor
    public function __construct($id, $name, $age, $course)
    {
        echo "I am Constructor.... <br>";
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    // setter
    // public function setData($id, $name, $age, $course)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->age = $age;
    //     $this->course = $course;
    // }

    // getter
    public function getData()
    {
        echo "Id : " . $this->id . ", Name : " . $this->name . ", Age : " . $this->age . ", Course : " . $this->course . "<br>";
    }
}

// Object
$s1 = new Student(101, "Rahul", 18, "PHP");
$s2 = new Student(102, "Jay", 20, "Android");

// $s1->setData(101, "Uday", 18, "PHP");
// $s2->setData(102, "Raju", 20, "Android");



$s1->getData();
$s2->getData(); -->