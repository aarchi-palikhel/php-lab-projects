<?php
    class Employee{
        private $e_id;
        private $full_name;
        private $email;
        private $m_salary;
        function __construct($e_id,$full_name,$email,$m_salary){
            $this->e_id=$e_id;
            $this->full_name=$full_name;
            $this->email=$email;
            $this->m_salary=$m_salary;
        }
        function cal_yearly_salary(){
            return $this->m_salary*12;
        }    
        function display_emp_info(){
            echo"<tr>";
            echo"<td>{$this->e_id}</td>";
            echo"<td>{$this->full_name}</td>";
            echo"<td>{$this->email}</td>";
            echo"<td>{$this->m_salary}</td>";
            echo"<td>{$this->cal_yearly_salary()}</td>";
            echo"</tr>";
        }
    }
    $emp=[new Employee(1,'aarchi','ap@gmail.com',12000),
    new Employee(1,'aarchi','ap@gmail.com',12000)]; 
?>
<table border='1'>
    <tr>
        <th>E_ID</th>
        <th>FULL_NAME</th>
        <th>EMAIL</th>
        <th>Monthly_Salary</th>
        <th>Yearly_salary</th>
    </tr>
    <?php
        foreach($emp as $e){
            $e->display_emp_info();
        }
    ?>
</table>