<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q.No.3</title>
    <?php
class Employee{
    private $e_Id;
    private $f_name;
    private $email;
    private $monthlySalary;
    public function __construct($e_Id, $f_name, $email, $monthlySalary) {
        $this->e_Id = $e_Id;
        $this->f_name =$f_name;
        $this->email = $email;
        $this->monthlySalary = $monthlySalary;
    }

    public function getYearlySalary() {
        return $this->monthlySalary * 12;
    }

    public function displayE_TableRow() {
        echo "<tr>";
        echo "<td>{$this->e_Id}</td>";
        echo "<td>{$this->f_name}</td>";
        echo "<td>{$this->email}</td>";
        echo "<td>{$this->monthlySalary}</td>";
        echo "<td>{$this->getYearlySalary()}</td>";
        echo "</tr>";
    }
}

$employees = [
    new Employee(1, "Aarchi", "aarchi@gmail.com", 35000),
    new Employee(2, "Aprama", "aprama@gmail.com", 25000),
    new Employee(3, "Ajhumma", "ajhumma@gmail.com", 60000),
];

?>

    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Employees Information</h2>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Monthly Salary (Rs)</th>
                <th>Yearly Salary (Rs)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Display each e_'s information in a table row
            foreach ($employees as $employee) {
                $employee->displayE_TableRow();
            }
            ?>
        </tbody>
    </table>
</body>
</html>
