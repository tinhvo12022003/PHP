<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .error {
        color: red;
    }
</style>

<body>
    <form action="filter.php" method="post">

        Name: <input type="text" name="name" id=""><br><br>
        Email: <input type="text" name="email"><br><br>
        Phone: <input type="text" name="phone" id=""><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    $name = "";
    $email = "";
    $phone = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
            if (strlen($name) < 1) {
                echo "<p class='error'>Name is required</p>";
            } else {
                echo "Name: ". $name;
            }
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                echo "Email: ". $email;
            } else {
                echo "<p class='error'>Email is invalid</p>";
            }
        }

        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
            if (filter_var($phone, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^[0-9]{10}$/')))) {
                $phone = filter_var($phone, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => '/^[0-9]{10}$/')));
                echo "Phone: ". $phone;
            } else {
                echo "<p class='error'>Phone is invalid</p>";
            }
        }
    }


    error_reporting(0);
    ?>
</body>

</html>

<!-- 
FILTER_VALIDATE_EMAIL: kiểm tra  tính hợp lệ của email

FILTER_VALIDATE_URL: kiểm tra tính hợp lệ của 1 URL

FILTER_VALIDATE_IP: kiểm tra tính hợp lệ của 1 địa chỉ IP

FILTER_VALIDATE_INT: kiểm tra tính hợp lệ của 1 số nguyên

FILTER_SANITIZE_STRING: làm sạch các ký tự đặc biệt trong 1 chuỗi

FILTER_SANITIZE_EMAIL: làm sạch 1 đc email

FILTER_VALIDATE_FLOAT: kiểm tra tính hợp lệ của 1 số thực

FILTER_SANITIZE_URL: làm sạch 1 địa chỉ URL 

FILTER_SANITIZE_NUMBER_INT: làm sạch 1 số nguyên

FILTER_SANITIZE_NUMBER_FLOAT: làm sạch 1 số thực

FILTER_SANITIZE_FULL_SPECIAL_CHARS: làm sạch các ký tự trong 1 chuỗi

filter_var($int, FILTER_VALIDATE_INT, array("option" => array("min_range"=$min, "max_range"=>$max)) === TRUE

filter_var($ipv6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === true: kiểm tra tính hợp lệ của 1 địa chỉ IPv6

filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH); loại bỏ các kí tự không thuộc mã unicode
-->