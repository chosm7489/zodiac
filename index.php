<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $zodiac = array(
            "Monkey",
            "Rooster",
            "Dog",
            "Pig",
            "Rat",
            "Ox",
            "Tiger",
            "Rabbit",
            "Dragon",
            "Snake",
            "Horse",
            "Goat"
        );
    ?>

    <form method = "get">
        Year:<br>
        <input type = "text" name = "year" value = ""> <br>
        <input type="submit" name="submit" value="Get Zodiac">
        <input type="reset" name="clear" value="Clear">
    </form>

   <?php
   echo 0;
    if(isset($_GET['year']) && !empty($_GET['year'])) {
    $year = $_GET['year'];
    $remainder = $year % 12;
    // echo $year;
    // echo $remainder;
    // echo strtolower($zodiac[0]);
        if (is_numeric($year) && $year >= 1900 && $year<2026){
            // Valid input, process it
            echo '<p>Your zodia is ' . $zodiac[$remainder - 1] . '</p>';
            echo '<img src ="images/' . strtolower($zodiac[$remainder - 1]) . '.png">';
        } elseif (isset($_GET['clear'])) {
            // Redirect to localhost:888
            echo "hello";
            // header("Location: index.php");
            exit();
        } else {
            // Invalid input, display an error message
            echo "Please enter a valid year between 1900 and next year. Please try again";
        } 
    }
    ?>   


</body> 
</html>