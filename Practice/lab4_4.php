<?php
    class Calculator{
        private $n1;
        private $n2;
        function __construct($n1,$n2){
            $this->n1=$n1;
            $this->n2=$n2;
        }
        function sum(){
            return $this->n1+$this->n2;
        }
        function difference(){
            return $this->n1-$this->n2;
        }
        function multiplication(){
            return $this->n1*$this->n2;
        }
        function division(){
            return $this->n1/$this->n2;
        }
    }
    $c=new Calculator(12,3);
    echo"Sum: ".$c->sum();
    echo"<br>Diff: ".$c->difference();
    echo"<br>Mul: ".$c->multiplication();
    echo"<br>Div: ".$c->division();
?>