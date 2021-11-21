<?php

require_once('Employer.php');
require_once('Employee.php');

final class President extends SimpleEmployer implements Employee
{
    const PRESIDENT_SALARY = 80000;

    public function __construct()
    {
        $this->employees = [new PrimeMinister()];
    }

    public function getBudget()
    {
        $salary = self::PRESIDENT_SALARY;

        foreach ($this->getEmployees() as $employee) {
            $salary += $employee->getSalary();
        }

        return $salary;
    }
}
