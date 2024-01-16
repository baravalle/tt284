<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>More for loops</title>
</head>

<body>
    <?php
    $animals = array("cat", "dog", "chicken");
    for ($a = 0; $a < sizeof($animals); $a++) {
        //  we are writing the name of each animal
        //  and then a line break, <br>
        echo $animals[$a]  . "<br>";
    }
    ?>



</body>

</html>