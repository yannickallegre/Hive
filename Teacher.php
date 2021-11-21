<?php

require_once('Employee.php');

final class Teacher implements Employee
{
    const TEACHER_SALARY = 30000;

    public function getSalary()
    {
        return self::TEACHER_SALARY;
    }

    public function getBudget() {}
}
