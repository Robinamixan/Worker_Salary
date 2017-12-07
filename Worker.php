<?php

namespace WorkersSalary;

include "Salary/iSalary.php";
include "Salary/FixedSalary.php";
include "Salary/HoursSalary.php";

class Worker
{
    private $salary;
    private $work_name;
    private $full_name;

    function __construct(string $full_name, string $work_name, string $type, int $value, int $hours = 0)
    {
        $this->full_name = $full_name;
        $this->work_name = $work_name;
        $this->set_salary($type, $value, $hours);
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

