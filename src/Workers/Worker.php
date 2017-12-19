<?php

namespace WorkersSalary\Workers;

use WorkersSalary\Salary\iSalary;

class Worker
{
    private $salary;
    private $full_name;

    function __construct(string $full_name, iSalary $salary)
    {
        $this->full_name = $full_name;
        $this->salary = $salary;
    }

    public function getSalary(): int
    {
        return $this->salary->getSalary();
    }
}

