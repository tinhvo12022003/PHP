<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="username" id="username">
        <input type="submit" value="Submit">
    </form>

    <a href="buoi06.php?subject=PHP&web=W3schools.com">Test $GET</a>


    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $name = $_REQUEST['username'];
            if(empty($name)){
                echo "Please enter your name";
            } else {
                echo $name;
            }
        }

        echo $_GET['subject']. " at " . $_GET['web'];
    ?>
</body>
</html>