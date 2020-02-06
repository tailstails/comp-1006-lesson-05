
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>New Country</title>
    </head>

    <body>
        <header>
            <h1>New Country</h1>
        </header>

        <form action="./insert.php" method = "post">
            <div>
                <label>Country Name:</label><br>
                <input name="name">
            </div>
            <div>
                <label>Country Description:</label><br>
                <input name="description">
            </div>
            <div>
                <label>Country Population:</label><br>
                <input name="population" type = "number">
            </div>

            <button type= "submit">Create</button>
        </form>
    </body>
</html>