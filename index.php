<?php
    interface Functions {
        public function move();
        public function specialFunction(); 
        public function beeping(); 
        public function turnOnTheWipers(); 
    }

    abstract class Technics implements Functions {
        private $type;
        private $color;
        private $salon;
        public function __construct($type, $color, $salon)
        {
            $this->type = $type;
            $this->color = $color;
            $this->salon = $salon;
        }
        public function info() {
            echo "Тип: $this->type.<br>";
            echo "Цвет: $this->color.<br>";
            echo "Салон: $this->salon.<br>";
        }
        abstract public function turn ();
    }

    class SpecialClass {
        public function special($object) {
            $object->move();
            $object->specialFunction();
        }
    }

    class Car extends Technics {
        public function move() {
            echo "Едем прямо, скорость 120 км/ч.<br>";
        }
        public function turn () {
            echo "Поворачиваем направо.<br>";
        }
        public function specialFunction() {
            echo "Включаем закись азота.<br>";
        }
        public function beeping() {
            echo "Бип-бип.<br>";
        }
        public function turnOnTheWipers() {
            echo "Включаем дворники.<br>";
        }
    }
    class Tank extends Technics {
        public function move() {
            echo "Едем прямо, скорость 30 км/ч.<br>";
        }
        public function turn () {
            echo "Поворачиваем налево.<br>";
        }
        public function specialFunction() {
            echo "Стреляем.<br>";
        }
        public function beeping() {
            echo "Ту-ту.<br>";
        }
        public function turnOnTheWipers() {
            echo "Пытаемся включить дворники, дворники не работают.<br>";
        }
    }
    class Buldozer extends Technics {
        public function move() {
            echo "Едем прямо, скорость 10 км/ч.<br>";
        }
        public function turn () {
            echo "Поворачиваем налево, затем ещё раз налево.<br>";
        }
        public function specialFunction() {
            echo "Опускаем ковш.<br>";
        }
        public function beeping() {
            echo "Брум-брум.<br>";
        }
        public function turnOnTheWipers() {
            echo "Включаем дворники. Работает только один.<br>";
        }
    }
    $auto = new Car("sportcar", "red", "leather");
    $auto->info();
    $auto->turn();
    $specialObject = new SpecialClass();
    $specialObject->special($auto);
    $tank = new Tank("T-34", "green", "metal");
    $tank->info();
    $tank->turnOnTheWipers();
    $specialObject->special($tank);
    $buldozer = new Buldozer("T-170", "yellow", "plastic");
    $buldozer->info();
    $specialObject->special($buldozer);
?>	
