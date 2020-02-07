<?php 
    include('../.env.php'); 


    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'); 
    
    $result = mysqli_query($conn, "SELECT * FROM countries"); 
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    // var_dump($rows); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Countries Index</title>


        <style>
        table, th, td {
            border: 1px dashed black;
            padding: 0.25; 
        }

        </style> 
    </head>

    <body>
        <table>
           <thead>
                <tr>
                <th>Name</th>
                <th>Decription</th>
                <th>Population</th>
                <th>Actions</th>
                </tr>
           </thead>


                <tbody>
                <?php
                
                    foreach ($rows as $row) {
                        echo "<tr>";
                        echo "<td>{$row['name']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "<td>{$row['population']}</td>";
                        echo "<td>";
                        echo"<a href = './edit.php?id={$row['id']}'>edit</a>"; 
                        echo " | ";
                        echo"<a href = './delete.php?id={$row['id']}'>delete</a>"; 
                        echo "</td>";
                        echo "</tr>";
                    } 
                
                ?>

                <!-- Shorthand example -->
                <?php foreach ($rows as $row): ?>
                <tr><td colspan="4" style="background: #333;"></td></tr>
                <tr>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['description'] ?></td>
                    <td><?= $row['population'] ?></td>
                </tr>
                <?php endforeach ?>
                </tbody>
        </table> 
    </body>
</html>