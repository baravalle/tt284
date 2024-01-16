<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello variable variables</title>
</head>

<body>
    <?php
    $a = "Hello";
    $$a = "world";
    echo "<p>$a {$$a}</p>"; // prints 'hello world'
    echo "<p>$a $Hello</p>"; // prints 'hello world'
    ?>

</body>

</html>