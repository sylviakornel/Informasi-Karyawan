<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Department
 *
 * @author Sylvia Kornelina Sihombing
 */
class Department {
    public $name;
    
    function setDepartmentName($name) {
        $this->name = $name;
    }

    function getDepartmentName() {
        return $this->name;
    }
}

?>
