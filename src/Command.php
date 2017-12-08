<?php

namespace WorkersSalary;

use WorkersSalary\Workers\Worker;

class Command
{
    private $all_workers;

    function __construct()
    {
        $this->all_workers = [];
    }

    public function add_worker(Worker $worker)
    {
        array_push($this->all_workers, $worker);
    }

    public function get_all_salary()
    {
        $sum = 0;
        foreach ($this->all_workers as $worker) {
            $sum += $worker->get_salary();
        }
        return $sum;
    }
}