<?php

if(empty($_POST['id'])) {
    header("Location: ./table.php");
    exit;
}
    var_dump($_POST); 
  // Our database connection
  include('./.env.php'); 


  $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB');

  // Step 1: Write the SQL to update the row (replace null with the string)
  $sql = "UPDATE products SET
          name = '{$_POST['name']}', 
          price = {$_POST['price']}
         WHERE id = {$_POST['id']}"; 

    echo $sql; 
    
  $res = mysqli_query($conn, $sql);

  if ($res) {
    // We were successful
    echo "The product was updated successfully.";
  } else {
    // We failed
    echo "There was an error updating the record: " . mysqli_error($conn);
  }

?>