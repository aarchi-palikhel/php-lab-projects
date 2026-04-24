<!DOCTYPE html>
<html>
<head>
    <title>Q.No.4</title>
</head>
<body>
    <h3>Calculator</h3>
<?php
class Calculator {
    private $_fval, $_sval;
    public function __construct($fval, $sval) {
        $this->_fval = $fval; // Assign the first value to the property _fval
        $this->_sval = $sval; // Assign the second value to the property _sval
    }
    public function add() {
        return $this->_fval + $this->_sval; // Return the sum of _fval and _sval
    }
    public function subtract() {
        return $this->_fval - $this->_sval; // Return the difference of _fval and _sval
    }
    public function multiply() {
        return $this->_fval * $this->_sval; // Return the product of _fval and _sval
    }
    public function divide() {
        return $this->_fval / $this->_sval; // Return the quotient of _fval and _sval
    }
}
$mycal = new Calculator(14, 7); 
echo "<b>Addition:</b> ".$mycal->add() . "<br>"; 
echo "<b>Subtraction: </b>".$mycal->subtract() . "<br>"; 
echo "<b>Multiplication:</b> ".$mycal->multiply() . "<br>";
echo "<b>Division: </b>".$mycal->divide() . "<br>"; 
?>
</body>
</html>