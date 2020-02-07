<?php

include('../.env.php'); 


$conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'); 
    var_dump($_POST); // Post contains all of the form data 

    $sql = "INSERT INTO countries (
        name,
        description,
        population
    ) VALUES (
        '{$_POST['name']}',
        '{$_POST['description']}',
        {$_POST['population']}
    )"; 
    echo $sql; 

    $response = mysqli_query($conn, $sql);  //function we need to take a String 

    //In order to use $_SESSION we have to start the session 
    session_start(); 

    if ($response) {

        //we were successful 

        $_SESSION['notification'] = "The new country was created succesfully";

    } else {
        //otherwise we failed and should be ashamed of ourselves

        $_SESSION['notification']= "There was an error creating the country" .mysqli_error($conn); 
    }


    //Redirect to notification.php

    header("Location: ./notification.php");
    exit; //die or exit 
?>