<?php
class animals
{

    function databaseConn($host, $username, $password, $database)
    {
        $conn = mysqli_connect($host, $username, $password, $database);
        return $conn;
    }

    function animalRegistartion($connection, $table, $name, $noOfLegs, $type)
    {
        $query = "INSERT INTO $table(name, legs, type)VALUES('$name', '$noOfLegs', '$type')";
        $query_run = mysqli_query($connection, $query);
        return $query_run;
    }
}

if (isset($_POST['register'])) {
    $table = "animals";
    $animalName = $_POST['name'];
    $numberOfLegs = $_POST['legs'];
    $animalType = $_POST['type'];

    $animal = new animals();

    // establish connection
    $conn = $animal->databaseConn('localhost', 'root', '', 'dantechx');

    // if($conn){
    //     echo "Connected successfully";
    // }else{
    //     echo "Failure connection";
    // }


    $datastorage = $animal->animalRegistartion($conn, $table, $animalName, $numberOfLegs, $animalType);

    if ($datastorage) {
        $_SESSION['status'] = "Data saved successfully";
    } else {
        $_SESSION['status'] = "Error while storing data";
    }
}

?>

<!-- Including the header.php file -->
<?php include('include/header.php'); ?>

<!-- Everything to display on the page is put here -->

<?php include('include/nav.php') ?>

<div class="row justify-content-center">
    <div class="col-lg-4 col-md-8 d-flex flex-column align-items-center justify-content-center">

        <form action="xxx.php" class="form-group" method="post">
            <h4>Animal Registration</h4>
            <input type="text" class="form-control " name="name" placeholder="enter animal name" required>
            <br>
            <input type="text" class="form-control" name="legs" placeholder="enter number of legs" required>
            <br>
            <input type="text" class="form-control" name="type" placeholder="Type of animal" required>
            <br>
            <input type="submit" class="btn btn-primary" name="register" value="Register">

        </form>
    </div>

</div>
<!-- Including the footer.php file -->
<?php include('include/footer.php'); ?>