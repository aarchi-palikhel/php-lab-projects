<!DOCTYPE html>
<html>
<head>
    <title>Q.No.1</title>
</head>
<body>
<h2>Perimeter and Area of Triangle</h2>
<?php
class Triangle {
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea() {
        $s=$this-> getPerimeter()/2;
        $area=sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
        return $area;                                       
    }

    public function getPerimeter() {
        return $this->a + $this->b + $this->c;
    }
}

$triangle = new Triangle(13, 9, 7);
echo "<h3>Area of the Triangle: " . $triangle->getArea() . "</h3>";
echo "<h3>Perimeter of the Triangle: " . $triangle->getPerimeter() . "</h3>";
?>
</body>
</html>