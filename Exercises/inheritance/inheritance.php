<?php
    class User{
        private $first_name;
        private $middle_name;
        private $last_name;

        public function __construct($first_name, $middle_name, $last_name){
            $this->first_name = $first_name;
            $this->middle_name = $middle_name;
            $this->last_name = $last_name;
        }

        public function getFirstName(){
            return $this->first_name;
        }

        public function setFirstName($first_name){
            $this->first_name = $first_name;
        }

        public function getMiddleName(){
            return $this->middle_name;
        }

        public function setMiddleName(){
            $this->middle_name = $middle_name;
        }

        public function getLastName(){
            return $this->last_name;
        }

        public function setLastName($last_name){
            $this->last_name = $last_name;
        }

        public function getFullName(){
            return "{$this->first_name} {$this->middle_name} {$this->last_name}";
        }
    }

    //creating an instance of Employee
    $employees = array();
    array_push($employees, new Employee("Jerick Royce", "Delcoro", "Cumayas", 45000, 'Software Development'));
    array_push($employees, new Employee("Charles Christian", "Delcoro", "Cumayas", 45000, 'Software Development'));
    array_push($employees, new Employee("Princess Ericka", "Delcoro", "Cumayas", 45000, 'Software Development'));
    array_push($employees, new Employee("Jecil", "Delcoro", "Cumayas", 45000, 'Software Development'));
    array_push($employees, new Employee("Eric", "Delcoro", "Cumayas", 45000, 'Software Development'));
?>

<!DOCTYPE html>
<html>
    <body>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Salary</th>
                    <th>Department</th>
                </tr>   
            </thead>
            <tbody>
                <?php 
                    foreach($employees as $employee){
                        echo "
                            <tr>
                                <td>{$employee->getFirstName()}</td>
                                <td>{$employee->getMiddleName()}</td>
                                <td>{$employee->getLastName()}</td>
                                <td>{$employee->getSalary()}</td>
                                <td>{$employee->getDepartment()}</td>
                            </tr>
                        ";
                    }
                ?> 
            </tbody>
    </table>
    </body>
</html>
