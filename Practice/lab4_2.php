<?php
    abstract class Shape{
        public abstract function cal_area();
    }
    class Rectangle extends Shape{
        private $l;
        private $b;
        function __construct($l,$b){
            $this->l=$l;
            $this->b=$b;
        }
        function cal_area(){
            return $this->l*$this->b;
        }
    }
    class Circle extends Shape{
        private $r;
        function __construct($r){
            $this->r=$r;
        }
        function cal_area(){
            return pi()*pow($this->r,2);
        }
    }
    class Triangle extends Shape{
        private $a;
        private $b;
        private $c;
        function __construct($a,$b,$c){
            $this->a=$a;
            $this->b=$b;
            $this->c=$c;
        }
        function cal_area(){
            $s=($this->a+$this->b+$this->c)/2;
            $area=sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
            return $area;
        }
    }
    $r=new Rectangle(7,7);
    echo "area of rectangle: ".$r->cal_area();
    $c=new Circle(7);
    echo "area of circle: ".$c->cal_area();
    $t=new Triangle(13,9,7);
    echo "area of triangle: ".$t->cal_area();

?>