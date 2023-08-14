<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION['favicon'] = "green";
    $_SESSION['favanimal'] = "cat";
    if(isset($_SESSION['favanimal'])){
        echo "session is set";
    } else {
        echo "session is not set";
    }
    ?>

    <?php
    echo "Favorite color is " . $_SESSION['favicon'] . "\n";
    echo "Favorite animal is " . $_SESSION['favanimal'] . "\n";
    var_dump($_SESSION);
    ?>
</body>
</html>