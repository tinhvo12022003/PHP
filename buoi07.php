
<?php

#REGULAR EXPRESSIONS

#using preg_match()


$str = "This is a string";
$parttern = "/is a/i";
echo preg_match($parttern, $str, $matches); //output 1
#preg_match() trả về true/false được lưu trong mảng ở vị trí index 0
echo $matches[0];
//kết quả khớp đầu tiên được lưu ở mảng vị trí 0




#using preg_match_all()

$str = "The rain in Spain falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str, $matches);
var_dump($matches);
//lưu trữ số lượng tất cả các kết quả khớp vào 1 mảng $matches


#using preg_replace()

$str = "Hello world!";
$pattern = "/Hello/i";
$new = "Goodbye";
echo preg_replace($pattern, $new, $str);

#REGULAR EXPRESSION MODIFIERS

#  "/pattern/i" không phân biệt hoa thường

#  "/pattern/m" tìm kiếm trên nhiều dòng

#  "/pattern/s" cho phép ký tự dấu chấm khớp với ký tự xuống dòng (\n)

#  "/pattern/u" chuỗi tìm kiếm là Unicode

#  "/[abc]/" tìm kiếm các ký tự trong []

#  "/[^abc]/" tìm kiếm các ký tự không có trong []

#  "/[0-9]/" tìm kiếm ký tự trong khoảng từ 0 đến 9

#  | tìm kiếm các pattern khớp với 1 trong các mẫu vd cat|dog|mouse

#  . tìm tất cả các ký tự kể cả các ký tự trống

#  ^ tìm kiếm chuỗi bắt đầu bằng mẫu

#  $ tìm kiếm chuỗi kết thúc bằng mẫu

#  / \d / tìm kiếm bất kỳ chữ số nào

#  / \s / tìm kiếm bất kỳ khoảng trống nào 

#  / \b / tìm kiếm các giới hạn từ

#QUANTIFIERS

# * khớp 0 hoặc nhiều lần. vd: /a*/ -> a, aa, aaa,...

# + khớp 1 hoặc nhiều lần. vd: /a+/ -> a, aa, aaa,...

# ? khớp 0 hoặc 1 lần. vd: /a?/ -> 'a' hoăc ''

# n{x} khớp x lần. vd: / a{n} / -> aaa

# n{x, y} khớp từ x đến y lần. vd: / a{2, 4}/ -> aa, aaa, aaaa

# n{x, } khớp ít nhất x lần. vd: / a{2, }/ -> aa, aaa

#grouping quantifiers cho phép nhóm các mẫu lại bà áp dụng các toán tử xac định quy tắc khớp mẫu
?>