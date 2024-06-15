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

    class Employee extends User {
        private $salary;
        private $department;

        public function __construct($first_name, $middle_name, $last_name, $salary, $department){
            parent::__construct($first_name, $middle_name, $last_name);
            $this->salary = $salary;
            $this->department = $department;
        }

        public function getSalary(){
            return $this->salary;
        }

        public function setSalary($salary){
            $this->salary = $salary;
        }

        public function getDepartment(){
            return $this->department;
        }

        public function setDepartment($department){
            $this->department = $department;
        }
    }

    //creating an instance of Employee
    $users = array();
    array_push($users, new User("Jerick Royce", "Delcoro", "Cumayas"));
    array_push($users, new User("Charles Christian", "Delcoro", "Cumayas"));
    array_push($users, new User("Princess Ericka", "Delcoro", "Cumayas"));
    array_push($users, new User("Jecil", "Delcoro", "Cumayas"));
    array_push($users, new User("Eric", "Delcoro", "Cumayas"));
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
                </tr>   
            </thead>
            <tbody>
                    
                    <?php 
                        foreach($users as $user){
                            echo "
                                <tr>
                                    <td>{$user->getFirstName()}</td>
                                    <td>{$user->getMiddleName()}</td>
                                    <td>{$user->getLastName()}</td>
                                </tr>
                            ";
                        }
                    ?>   
            </tbody>
    </table>
    </body>
</html>
