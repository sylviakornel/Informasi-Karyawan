<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employee
 *
 * @author Sylvia Kornelina Sihombing
 */
class Employee {
    public $name;
    public $title;
    public $salary;
    
    function setEmployeeName($name) {
        $this->name = $name;
    }

    function getEmployeeTitle() {
        return $this->title;
    }

    function getEmployeeProfil() {
        return $this->name. $this->title. $this->salary;
    }
  
    function getEmployeeMonthlySalary($day) {
        return $this->salary;
    }

}

?>

