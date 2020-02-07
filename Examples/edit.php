<?php 

//If no query string then go away 

if(empty($_GET['id'])) {
    header("Location: ./table.php");
    exit;
}
    //Our database connection

    include('../.env.php'); 


$conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB')); 

    //Fetch the rows Spot 

$result = mysqli_query($conn, "SELECT * FROM countries WHERE id = {$_GET['id']}"); 
$row = mysqli_fetch_assoc($result); 
var_dump($row);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Country</title>
    </head>

    <body>
        <header>
            <h1> Edit Country</h1>
        </header>

        <form action="./update.php" method = "post">
            <input type = "hidden" name="id" value=<?php echo $row['id']?>>
            <div>
                <label>Country Name:</label><br>
                <input name="name" value="<?php echo $row['name']?>">
            </div>
            <div>
                <label>Country Description:</label><br>
                <input name="description" value="<?php echo $row['description']?>">
            </div>
            <div>
                <label>Country Population:</label><br>
                <input name="population" type = "number" value="<?php echo $row['population']?>">
            </div>

            <button type= "submit">Update</button>
        </form>
    </body>
</html>