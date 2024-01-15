<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Hello World</title>
</head>

<body>
    <?php
    $a = "hello";
    $$a = "world";
    echo "<p>$a ${$a}</p>"; // prints 'hello world'
    echo "<p>$a $hello</p>"; // prints 'hello world'
    ?>

</body>

</html>