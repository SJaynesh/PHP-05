<?php

class Config
{
    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "rnw";

    public $conn;

    // connect Method
    public function connect()
    {
        // mysqli_connect() // return bool
        $this->conn = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

        return $this->conn;
    }

    public function insertStudent($name, $age, $course)
    {
        $this->connect();

        $query = "INSERT INTO students (name, age, course) VALUES('$name', $age, '$course');";

        return mysqli_query($this->conn, $query); // return bool

    }

    public function fetchStudents()
    {
        $this->connect();

        $query = "SELECT * FROM students;";

        $res = mysqli_query($this->conn, $query);// return obj mysqli_result

        return $res;
    }

    public function deleteStudent($id)
    {
        $this->connect();

        $query = "DELETE FROM students WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);// return 1 || 0    bool

        return $res;
    } 

    public function fetchSingleStudent($id)
    {
        $this->connect();

        $query = "SELECT * FROM students WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);// return obj mysqli_result

        return $res;
    }

    public function updateStudent($name, $age, $course, $id)
    {
        $this->connect();

        $query = "UPDATE students SET name='$name', age=$age, course='$course' WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

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