<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM VALIDATION</title>
</head>
<body>
    <div class="container">
        <!-- <form action="includes/formhandler.php" id="form" method="POST">
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
        </form> -->

        <!-- <form action="includes/form.php" method="POST">
        <label for="favfood">Favorite Food:</label>
        <input type="text" name="favfood" placeholder="Favourite food...">
        <br>
        <label for="destination">Travel Destination:</label>
        <input type="text" name="destination" placeholder="Favourite travel destination...">
        <br>
        <label for="career">Dream Career:</label>
        <input type="text" name="career" placeholder="Dream career....">
        <br>
        <button type="submit">Submit</button>
    </form> -->
    <!-- <form action="index.php" method="POST">
            Apples:
            <input type="checkbox" name="fruits[]" value="apples">
            Oranges:
            <input type="checkbox" name="fruits[]" value="oranges">
            Melons:
            <input type="checkbox" name="fruits[]" value="melons">

            <button type="submit">Submit</button>
        </form> -->

        <!-- CALCULATE -->
        <!-- <form action="index.php" method="POST">
            <Label>First number:</Label>
            <input type="number" step="0.01" name="num1">
            <br>
            <label for="">Second number:</label>
            <input type="number" step="0.01" name="num2">
            <br>
            <label for="">Operation:</label>
            <input type="text" name="op">
            <br>
            <button type="submit">Submit</button>
        </form> -->

        <!-- SWITCH -->

        <!-- <form action="index.php" method="POST">
            <label for="">Grade: </label>
            <input type="text" name="grade" placeholder="Please enter your grade...">
            <br>
            <button type="submit">Submit</button>
        </form> -->
    <?php
        // function sayHi($name){
        //     echo "Hi $name!";
        // }

        

        // function cube($num){
        //     return $num * $num * $num;
        // }

        // // $result = cube(4);

        // // echo "4 cubed is: $result";

        // function introduce($name, $age, $prof){
        //     return "My name is $name. I am a $age years old $prof";
        // }

        // // $person = introduce("Lawan", 32, "CEO");

        // // echo $person;

        // $fastFive = array("Game", "Joe", "Lawan", "Echo", "Paddy");

        // // echo $fastFive[3];

        // $fastFiveAge = array(
        //     "Game" => 31,
        //     "Joe" => 29,
        //     "Lawan" => 32,
        //     "Echo" => 30,
        //     "Paddy" => 32
        // );

        // $fastFiveAge['Echo'] = 100;
        // $fastFiveAge['Doc'] = 47;
        // // echo $fastFiveAge['Doc'];

        // CALCULATE
    
        // $num1 = htmlspecialchars($_POST['num1']);
        // $num2 = htmlspecialchars($_POST['num2']);
        // $op = htmlspecialchars($_POST['op']);

        // function calculate($n1, $n2, $optn){
        //     if ($optn == "+"){
        //         return $n1 + $n2;
        //     } 
        //     else if ($optn == "-"){
        //         return $n1 - $n1;
        //     } 
        //     else if($optn == "/" && $n1 != 0){
        //         return $n1 / $n2;
        //     }
        //     else if($optn == "*"){
        //         return $n1 * $n2;
        //     }
        //     else {
        //         return "Invalid operator!";
        //     }
        // }


        // $result = calculate($num1, $num2, $op);

        
        // SWITCH

        // $grade = htmlspecialchars($_POST['grade']);

        // if(empty($grade)){
        //     echo "Grade cannot be empty!";
        // } else {
        //     switch(strtoupper($grade)){
        //         case "A":
        //             echo "You did amazing!";
        //             break;
        //         case "B":
        //             echo "You did pretty good";
        //             break;
        //         case "C":
        //             echo "You have average!";
        //             break;
        //         case "D":
        //             echo "You did very bad!";
        //             break;
        //         case "F":
        //             echo "You failed!";
        //             break;
        //         default:
        //             echo "Invalid grade!";
        //     }
        // }

        // ARRAYS

        $myNames = ["Lawan", "Austin", "Sewoyebaa", "Nitsua", "Nawal"];

        $arrLen = count($myNames);
        
        // WHILE LOOP
        $i = 0;

        echo "While Loop <br>";
        while($i < $arrLen){

            $letters = strlen($myNames[$i]);
            echo "The name: $myNames[$i] is $letters letters long.<br>";
            $i++;
        }


        // FOR LOOP
        echo "<br>";
        echo "For Loop <br>";
        for ($i = 0; $i < $arrLen; $i++){
            $letters = strlen($myNames[$i]);
            echo "Name: $myNames[$i], Letters: $letters <br>";
        }

        // FOREACH LOOP

        echo "<br>Foreach Loop<br>";
        foreach ($myNames as $name){
            echo "$name <br>";
        }

        // echo print_r($myNames);

        // ASSOCIATIVE ARRAYS

        $nicknames = [
            "Kingsley" => "The Game",
            "Thelma" => "Joe",
            "Desmon" => "Doc",
            "Patrick" => "Paddy",
            "Joel" => "Gha",
            "Echo" => "That Capo"
        ];

        echo "<br>Associative Array<br>";
        foreach ($nicknames as $key => $value){
            echo "$key's nickname is $value<br>";
        }
    ?>

       
    </div>
</body>
</html>