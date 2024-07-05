<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $userSearch = $_POST["usersearch"];

    try{
        require_once "includes/db.php";

        // *************USING NON-NAMED PARAMETERS**************//

        // $query = "INSERT INTO users(username, passwd, email)VALUES (?, ?, ?);";

        // $stmt = $conn->prepare($query);

        // $stmt->execute([$username, $password, $email]);

        //  ************USING NAMED PARAMETERS***************//

        $query = "SELECT * FROM comments WHERE username = :usersearch;";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 

        $conn == null;

        $stmt == null;


        // die();


    } catch(PDOExeption $e){
        die("Query failed: " . $e.getMessage());
    }
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data from Database</title>
</head>
<body>

<h1>Search Results</h1>
    <?php
        
        if (empty($results)) {
            echo "<div>";
            echo "<p>
                No comments were found!
            </p>";
            echo "</div>";
        } else {
            foreach($results as $row) {
                echo htmlspecialchars($row["username"]);
                echo "<br>";
                echo htmlspecialchars($row["comment_text"]);
                echo "<br>";
                echo htmlspecialchars($row["created_at"]);
                echo "<br>";
                echo "<br>";
                echo "<br>";
            }
        }
    ?>
</body>
</html>