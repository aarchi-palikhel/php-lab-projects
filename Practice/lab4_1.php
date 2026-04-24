<html>
    <head>
        <title>Triangle class</title>
    </head>
    <body>
        <?php
            class Triangle{
                private $a;
                private $b;
                private $c;
                function __construct($a,$b,$c){
                    $this->a=$a;
                    $this->b=$b;
                    $this->c=$c;
                }
                function get_Perimeter(){
                    return $this->a+$this->b+$this->c;
                }
                function get_Area(){
                    $s=($this->a+$this->b+$this->c)/2;
                    $area=sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
                    return $area;
                }
            }
            $t1 = new Triangle(13,9,7);
            echo "Perimeter of triangle: ".$t1->get_Perimeter();
            echo "<br>Area of triangle: ".$t1->get_Area();
        ?>
    </body>
</html>
