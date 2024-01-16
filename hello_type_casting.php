<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hello type casting</title>
</head>

<body>
    <code>
    <?php
    $a = "0";
    
    echo "\$a = 0;  # \$a is a " . gettype($a) . "<br>\n";
    $a += 2;
    echo "\$a +=2;  # \$a is now an " . gettype($a) . "<br>\n";
    $a = $a + 1.3;
    echo "\$a = \$ + 1.3; # \$a is now a " . gettype($a) . "<br>\n";
    $a = "$a";
    echo "\$a = \"\$a\"; # \$a is now a " . gettype($a) . "<br>\n";
    ?>
    </code>
</body>

</html>