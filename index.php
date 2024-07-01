<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM VALIDATION</title>
</head>
<body>
    <div class="container">
        <form action="includes/formhandler.php" id="form" method="POST">
            <label for="firstname">Firstname:</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname....">
            <label for="lastname">Lastname:</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname....">
            <label for="favoritepet">Favoritepet:</label>
            <select name="favoritepet" id="favoritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>