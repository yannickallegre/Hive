<?php

require_once('Employee.php');

interface Employer
{
    public function getEmployees();

    public function addEmployee(Employee $employee);

    public function removeEmployee(Employee $employee);
}

// et une implémentation abstraite
abstract class SimpleEmployer
{
    protected $employees = [];

    public function getEmployees()
    {
        return $this->employees;
    }

    public function addEmployee(Employee $employee)
    {
        //
    }

    public function removeEmployee(Employee $employee)
    {
        //
    }
}
