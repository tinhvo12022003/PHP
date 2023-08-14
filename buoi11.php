<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="buoi11.php" method="post">
        <input type="text" name="username" id="">
        <input type="submit" value="Submit">
    </form>


    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $user_value = "";
        if (isset($_POST['username'])) {
            $user_value = $_POST['username'];
        }
        $name = 'user';
        setcookie($name, $user_value, time() + (84600 * 30), '/');
        if (count($_COOKIE) > 0) {
            echo "Cookie is set" . "\n";
            echo count($_COOKIE);
        } else {
            echo "Cookie is not set" ."\n";
        }
    }
    ?>

</body>

</html>