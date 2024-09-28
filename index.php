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


// Insert Student Data
if (isset($_REQUEST['btn-submit'])) {

    $name = $_GET['name'];
    $age = $_GET['age'];
    $course = $_GET['course'];

    $res = $config->insertStudent($name, $age, $course);

    if ($res) {
        // header("Location: dashboard.php");
        echo '<div class="container pt-5"><div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Record Inserted Successfully....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
    } else {
        echo '<div class="container pt-5"><div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failure!</strong> Record Insertion Failed....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
       
    }
}




//  Fetch All Students Data
$fetch_stud = $config->fetchStudents();


// Delete Student 

if(isset($_REQUEST['btn_delete']))
{

    $id = $_GET['delete_id'];

    // echo "<h2> $id </h2>";

    $res = $config->deleteStudent($id);

    if ($res) {
        // header("Location: dashboard.php");
        echo '<div class="container pt-5"><div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Delete!</strong> Record deleted Successfully....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
        $fetch_stud = $config->fetchStudents();
    } else {
        echo '<div class="container pt-5"><div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Delete!</strong> Record deletion Failed....
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div></div>';
        $fetch_stud = $config->fetchStudents();       
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
            <input type="text" class="form-control" name="name"  placeholder="Enter your name"> <br>

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

    <br>
    <br>

    <div class="col col-5">
        <table class="table table-hover  table-success table-bordered text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>COURSE</th>
                    <th colspan="2">Action</th>
                </tr> 
            </thead>

            <tbody>
                <?php while ($result = mysqli_fetch_assoc($fetch_stud)) { ?>
                    <tr> 
                        <td><?php echo $result['id'] ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['age'] ?></td>
                        <td><?php echo $result['course'] ?></td>
                        <td><button class="btn btn-success">Edit</button></td>
                        <td>
                            <form method="GET">
                             <input type="hidden" name="delete_id" Value="<?php echo $result['id'] ?>">
                            <button class="btn btn-danger" name="btn_delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>