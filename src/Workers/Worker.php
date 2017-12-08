<?php

namespace WorkersSalary\Workers;

use WorkersSalary\Salary\FixedSalary;
use WorkersSalary\Salary\HoursSalary;

class Worker
{
    private $salary;
    private $full_name;

    function __construct(string $full_name, string $type_salary, int $value, int $hours = 0)
    {
        $this->full_name = $full_name;
        $this->set_salary($type_salary, $value, $hours);
    }

    private function set_salary(string $type, int $value, int $hours)
    {
        if ($type == 'fixed'){
            $this->salary = new FixedSalary($value);
        } elseif ($type == 'hours'){
            $this->salary = new HoursSalary($value, $hours);
        }
    }

    public function get_salary(): int
    {
        return $this->salary->get_salary();
    }
}

