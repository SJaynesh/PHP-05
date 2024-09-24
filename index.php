<?php

include "config/config.php";

$config = new Config();

$res = $config->connect();

if ($res) {
    echo "Connection with DB Successfully...";
} else {
    echo "Connection with DB Failed...";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
</head>
<body>
<h1>Student Form</h1>

<form action="" method="GET">
    Name :
    <input type="text" name="name" placeholder="Enter your name"> <br><br>

    Age :
    <input type="number" name="age" placeholder="Enter your age"> <br><br>

    Course :
    <input type="text" name="course" placeholder="Enter your course"> <br><br>

    <button>Submit</button>

</form>
</body>
</html>