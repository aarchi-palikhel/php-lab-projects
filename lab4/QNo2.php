<!DOCTYPE html>
<html>
<head>
    <title>Q.No.2</title>
</head>
<body>
<h2>Area of different shapes</h2>
<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius= $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius,2);
    }
}
$triangle = new Triangle(5, 10);
echo "<b>Triangle Area:</b> " . $triangle->calculateArea() . "</br>";

$rectangle = new Rectangle(4, 6);
echo "<b>Rectangle Area:</b> " . $rectangle->calculateArea() . "</br>";

$circle = new Circle(7);
echo "<b>Circle Area:</b> " . $circle->calculateArea() . "</br>";
?>

</body>
</html>
