<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="includes/form.php" method="POST">
        <label for="favfood">Favorite Food:</label>
        <input type="text" name="favfood" placeholder="Favourite food...">
        <label for="destination">Travel Destination:</label>
        <input type="text" name="destination" placeholder="Favourite travel destination...">
        <label for="career">Dream Career:</label>
        <input type="text" name="career" placeholder="Dream career....">
        <button type="submit">Submit</button>
    </form>
</body>
</html>