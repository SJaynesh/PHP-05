
<?php

include "config/config.php";

$config = new Config();


$res = $config->fetchStudents();


while ($result = mysqli_fetch_assoc($res)) {
    echo $result['id'] . " ";
    echo $result['name'] . " ";
    echo $result['age'] . " ";
    echo $result['course'] . "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container pt-5">
    <h1>Dashboard</h1>
</div>

<div class="container pt-5">

    <div class="col col-6">
        <table class="table table-hover  table-success table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>COURSE</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Raj</td>
                    <td>18</td>
                    <td>Android</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Rajshree</td>
                    <td>19</td>
                    <td>Web</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>