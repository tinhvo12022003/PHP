<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'footer.php';
        echo $a;
        echo $b;

        //include: include được sử dụng để nhập tệp tin 
        //vào mã nguồn PHP. Nếu tệp tin không được tìm thấy hoặc có lỗi trong quá trình nhập, mã sẽ tiếp tục chạy và hiển thị một cảnh báo
        //equire: require cũng được sử dụng để nhập tệp tin vào mã nguồn PHP. 
        //Tuy nhiên, nếu tệp tin không được tìm thấy hoặc có lỗi trong quá trình nhập, mã sẽ dừng lại và hiển thị một thông báo lỗi nghiêm trọng. require được sử dụng khi tệp tin nhập là cần thiết cho hoạt động chính của mã
    ?>
</body>
</html>