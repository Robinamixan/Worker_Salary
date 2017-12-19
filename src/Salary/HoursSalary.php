<?php

namespace WorkersSalary\Salary;

class HoursSalary implements iSalary
{
    private $value;

    function __construct(int $value, int $hours)
    {
        $this->value = $value*$hours;
    }

    public function getSalary(): int
    {
        return $this->value;
    }
}