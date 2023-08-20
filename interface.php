 <?php
    interface Car {
        public function speed($distance, $time);
        public function display($author, $car_name);
        public function stop($speed);
    }

    class Volvo implements Car {
        private $car_name;
        private $distance;
        private $time;
        private $speed;

        function __construct($car_name, $distance, $time, $speed){
            $this->car_name = $car_name;
            $this->distance = $distance;
            $this->time = $time;
            $this->speed = $speed;
        }

        public function speed($distance, $time){
            $this->speed = $distance / $time;
        }

        public function display($author, $car_name){
            echo "Author: ".$author."\n";
            echo "Car name: ".$car_name."\n";
            echo "Speed: ".$this->speed."\n";
        }

        public function stop($speed){
            return $speed = 0;
        }
    }

    $volvo = new Volvo("Volvo", 100, 10, 50);
    $volvo->display("Vo Ngoc Tinh", "Volvo");
    $speed = $volvo->stop(10);
    echo $speed;
    $volvo->speed(100, 10);
            
?>