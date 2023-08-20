<?php
    trait A {
        public function printA(){
            echo "A\n";
        }
    }

    trait B {
        public function printB(){
            echo "B\n";
        }
    }

    class C {
        use A, B;
        public function printC(){
            echo "C\n";
        }
    }

$c = new C();
$c->printA();
$c->printB();
$c->printC();

?>