<?php

//static method, truy cập các phương thức, variable của lớp
//không cần khởi tạo đối tượng
    class Person {
        public static function printPerson(){
            echo "Person\n";
        }
    }

    class User extends Person {
        public function printUser(){
            Person::printPerson();
            echo "User\n";
        }
    }
$user = new User();
$user->printUser();
Person::printPerson();

//self method, truy cập các phương thức trong cùng 1 lớp
//nếu có thừa kế, sử dụng parent:: để truy cập phương thức ở lớp cha
