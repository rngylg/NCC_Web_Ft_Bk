<h1>Add Customer 2</h1>

<?php

    //Print out the values of $_GET arrary(built-in)
    // print_r($_GET); 

    // print_r($_POST);

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $gender = $_POST["gender"];

    //echo "<p>$name $phone $gender";

    $con = mysqli_connect("localhost", "root", "password", "myshop");

    if($con) {
        // echo "<p>Conneted</p>";

        $sql = "Insert into customers(name, phone, gender)
                values ('$name', '$phone', '$gender');
                ";

        // just to check if $sql is correctly typed
        // echo $sql;
        
        $result = mysqli_query($con,$sql);

        //echo $result;
        if($result) {
            echo "<h2>New Customer is added</h2>";
        }
        else {
            echo "<h2>Cannot add customer</h2>";
        }
        echo "<p></p><a href='menu.php'>Back to Menu</a>";
    }

    else {
        echo "Cannot Connect";
    }









?>