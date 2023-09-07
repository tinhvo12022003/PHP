<?php

//************************GLOBALS*****************************/
$a = 10;  //là 1 biến toàn cục
$b = 9;  
function myFunction(&$a){  //&$ thay đổi giá trị của biến
    echo $a +=1 . "\n";
    // echo $b . "\n"; không được định nghĩa
    global $b;
    echo $b . "\n"; //sử dụng từ khóa global sẽ truy cập được biến global, nếu ko nó chỉ là biến local scope 
    global $c;
    echo $c; //biến c ko in ra kết quả vì c được khai báo sau
}
myFunction($a);

//các biến global được lưu thành mảng trong biến supperglobal
echo $GLOBALS['a'];  //$GLOBALS có kiểu là array
echo $GLOBALS['b']; //$GLOBALS c
$c = 2;

//sử dụng cách sau để khai báo biến globals
$GLOBALS['d'] = 123;
echo $d;




/*******************$SERVER****************************/
echo $_SERVER['PHP_SELF']; //$_SERVER['PHP_SELF] chứa đường dẫn hiện tại đang được thực thi
echo $_SERVER['SERVER_NAME']; //trả về tên của server chạy trên các nền tảng của web server(ngix, apache)

echo $_SERVER['REQUEST_METHOD']; //trả về phương thức yêu cầu của HTTP(get, post, put, delete, patch, head, connect, trace,...)
/*
    $_SERVER['REQUEST_URI'] URI của yêu cầu hiện tại
    $_SERVER['QUERY_STRING'] chuỗi truy vấn của yêu cầu hiện tại
    $_SERVER['HTTP_HOST] tên miền hặc điạ chỉ IP của máy chủ HTTP
    $_SERVER['HTTP_USER_AGENT'] chuỗi người dùng của trình duyệt gửi yêu cầu
    $_SERVER['REMOTE_ARDDR'] địa chỉ IP của máy tính từ xa yêu cầu, ::1 cho biết yêu cầu được thực hiện trên cùng 1 máy
    $_SERVER['SERVER_SOFWARE] thông tin về phần mềm máy chủ đang chạy trên webserver
    $_SERVER['SERVER_PROTOCOL'] thông tin về phiên bản giao thức HTTP mà máy chủ đang xử lý yêu cầu
    $_SERVER['REQUEST_TIME'] thời gian yêu cầu hiện tại được gửi đến máy chủ
    $_SERVER['HTTP_ACCEPT'] chứa thông tin về các loại ngôn ngữ mà trình duyệt client chấp nhận
    $_SERVER['HTTP_ACCEPT_CHARSET'] chứa thông tin về bộ ký tự mà trình duyệt chấp nhận
    $_SERVER[HTTPS] Nếu kết nối được thiết lập qua HTTPS, giá trị của $_SERVER['HTTPS'] sẽ là "on". Ngược lại, nếu kết nối được thiết lập qua HTTP, giá trị của $_SERVER['HTTPS'] sẽ là null
    $_SERVER['REMOTE_ADDR] chứa địa chỉ của máy tính từ xa gửi yêu cầu HTTP
    $_SERVER['REMOTE_PORT] chứa số cổng của client gửi yêu cầu http đến máy chủ
    $_SERVER['SERVER_ADMIN'] chứa địa chỉ email của quản trị viên của máy chủ.
    $_SERVER['SCRIPT_FILENAME'] cung cấp đường dẫn tuyệt đối đến tập tin PHP mà mã hiện tại đang được thực thi.
    $_SERVER['SERVER_PORT'] chứa số cổng của máy chủ HTTP

*/


/******************$GET**********************/
//$_GET mảng chứa các tham số truyền qua URL của yêu cầu HTTP GET
//mỗi phần tử trong mảng GET trả về là 1 cặp khóa và giá trị
/*
$name = $_GET['name']; // Lấy giá trị của tham số 'name'
$count = count($_GET); // Số lượng tham số trong mảng $_GET
$keys = array_keys($_GET); // Mảng chứa tất cả các khóa của $_GET
$values = array_values($_GET); // Mảng chứa tất cả các giá trị của $_GET
$exists = isset($_GET['name']); // Kiểm tra xem tham số 'name' có tồn tại trong $_GET hay không
$isEmpty = empty($_GET['name']); // Kiểm tra xem giá trị của tham số 'name' có rỗng hay không
*/




/********************$_POST***********************/
//cũng là mảng chứa các cặp khóa-giá trị được gửi đi bằng http-post

/********************$_REQUEST********************/
/*biến $_REQUEST chứa các giá trị được gửi đến máy chủ thông qua giao thức http bao gồm
cả phương thức POST và GET

$name = $_REQUEST['name']



/********************$_FILE**************************/

/*
    $_FILE lấy thông tin các tệp tin được gửi đến máy chủ thông qua 1 yêu cầu HTTP có phương
    thức POST và có kiêu dũ liệu enctype="multipart/form-data"

    $_FILE['name] tên gốc của tệp tin được gửi
    $_FILE['type'] loại MIME của tệp tin được gửi
    $_FILE['tmp_name'] đường dẫn tạm thời của tệp tin trên máy chủ
    $_FILE['error'] mã lỗi của tệp tin được gửi
    $_FILE['size'] kích thước của tệp tin được gửi
*/


/*********************$_ENV*************************/
/*
Các biến môi trường là các biến được thiết lập trong 
môi trường hoạt động của máy chủ web hoặc ứng dụng.
*/


/*********************$_COOKIE************************/
/*
    $_COOKIE['name] truy cập giá trị của cookie có tên 'name'
    $_COOKIE['value'] truy cập giá trị của cookie có tên 'value'
    $_COOKIE['domain'] truy cập tên miều của cookie
    $_COOKIE['path'] truy cập đường dẫn của cookie
    $_COOKIE['expires'] truy cập thời gian sử dụng của cookie
    $_COOKIE['secure'] truy cập trạng thái bảo mật của cookie
    $_COOKIE['httponly'] truy cập trạng thái onlyhttp của cookie
    $_COOKIE['samesite']: Truy cập cài đặt SameSite của cookie (giá trị có thể là "None", "Lax" hoặc "Strict").
    $_COOKIE['max-age']: Truy cập thời gian sống tối đa của cookie tính bằng giây.
    $_COOKIE['comment']: Truy cập một chú thích cho cookie.
    $_COOKIE['comment_url']: Truy cập một URL chú thích cho cookie.
    $_COOKIE['discard']: Truy cập trạng thái cookie có thể bị loại bỏ khi người dùng đóng trình duyệt (true nếu có thể, false nếu không).
    $_COOKIE['priority']: Truy cập độ ưu tiên của cookie.
 */

/*********************$_SESSION****************************/
/*
    $_SESSION['variable']: Truy cập giá trị của biến trong session có tên 'variable'.
    $_SESSION['name']: Truy cập giá trị của biến trong session có tên 'name'.
    $_SESSION['id']: Truy cập ID phiên hiện tại của session.
    $_SESSION['time']: Truy cập thời gian bắt đầu của session.
    $_SESSION['timeout']: Truy cập thời gian chờ đợi (timeout) của session.
    $_SESSION['ip_address']: Truy cập địa chỉ IP của client kết nối đến session.
    $_SESSION['user_agent']: Truy cập thông tin user agent của client kết nối đến session.
    $_SESSION['cookie_params']: Truy cập thông tin về các tham số của cookie liên kết với session.
    $_SESSION['cache_limiter']: Truy cập giá trị của cache limiter hiện tại cho session.
    $_SESSION['module_name']: Truy cập tên module (tiện ích) được sử dụng để lưu trữ session.
    $_SESSION['session_name']: Truy cập tên của session.
    $_SESSION['session_save_path']: Truy cập đường dẫn lưu trữ session trên máy chủ.
    $_SESSION['session_id']: Truy cập ID của session hiện tại.
    $_SESSION['session_status']: Truy cập trạng thái của session (ACTIVE, NONE, DISABLED).
 */
?>