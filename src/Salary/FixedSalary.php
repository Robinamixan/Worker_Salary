<?php

namespace WorkersSalary\Salary;

class FixedSalary implements iSalary
{
    private $value;

    function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getSalary(): int
    {
        return $this->value;
    }
}