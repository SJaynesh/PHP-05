<?php

include "config/config.php";

$config = new Config();

// $res = $config->connect();

// if ($res) {
//     echo "Connection with DB Successfully...";
// } else {
//     echo "Connection with DB Failed...";
// }


// superglobal variable == Associative array == JSON Data == Key Value Pair Data
// $_GET
// $_POST
// $_REQUEST


if (isset($_REQUEST['btn-submit'])) {

    $name = $_GET['name'];
    $age = $_GET['age'];
    $course = $_GET['course'];

    $res = $config->insertStudent($name, $age, $course);

    if ($res) {
        echo "Record Inserted Successfully...";
    } else {
        echo "Record Insertion  Failed...";
    }


}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container pt-5">
    <h1>Student Form</h1>
</div>

<div class="container pt-5">

    <div class="col col-4">
        <form action="" method="GET">
            Name :
            <input type="text" class="form-control" name="name" placeholder="Enter your name"> <br>

            Age :

            <input type="number" class="form-control" name="age" placeholder="Enter your age"> <br>

            Course :
            <input type="text" class="form-control" name="course" placeholder="Enter your course"> <br>

            <div class="text-center">
                <button  class="btn btn-primary" name="btn-submit">Submit</button>
                <button  class="btn btn-success" >Reset</button>
            </div>
        </form>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>