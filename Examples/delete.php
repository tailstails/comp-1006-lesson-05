<?php 

//If no query string then go away 

if(empty($_GET['id'])) {
    header("Location: ./table.php");
    exit;
}


include('../.env.php'); 


$conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB')); 

    var_dump($_GET); 

$sql = "DELETE FROM countries WHERE id = {$_GET['id']}";
echo $sql; 

$res = mysqli_query($conn, $sql); 

if ($res) {
    echo "The country was deleted succesfully"; 
} else { 

echo "There was an error deleting the row: " . mysqli_error($conn); 
}

?> 