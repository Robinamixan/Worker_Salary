<?php

namespace WorkersSalary\Salary;

class FixedSalary implements iSalary
{
    private $value;

    function __construct(int $value)
    {
        $this->value = $value;
    }

    public function get_salary(): int
    {
        return $this->value;
    }
}