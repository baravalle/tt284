<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Foreach loops</title>
</head>

<body>
    <?php
    $array = array(
        "Andres" => 20,
        "Mike" => 50,
        "Gaurav" => 75,
        "Paolo" => 100
    );
    foreach ($array as $key => $val) {
        echo "$key: $val<br>";
    }
    ?>

</body>

</html>