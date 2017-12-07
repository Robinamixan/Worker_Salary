<?php

namespace WorkersSalary;

include "Worker.php";

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

$design = new Worker('Georgiy', 'Designer', 'fixed', 3000);

$senior = new Worker('Alexcei', 'Senior Developer', 'hours', 10, 60);

$middle1 = new Worker('Alexcei', 'Middle Developer', 'fixed', 1000);

$middle2 = new Worker('Alexcei', 'Middle Developer', 'fixed', 1000);

$markup = new Worker('Alexcei', 'Markup', 'hours', 5, 120);

$dream = new Command();
$dream->add_worker($design);
$dream->add_worker($senior);
$dream->add_worker($middle1);
$dream->add_worker($middle2);
$dream->add_worker($markup);

echo $dream->get_all_salary();
/*
- 1 дизайнер, фиксированная оплата 3000 рублей
- 1 Senior Developer, нанятый на 60ч с оплатой 10 рублей в час
- 2 Middle Developer. Фиксированная оплата 1000 рублей в месяц
- 1 верстальщик, 120ч с оплатой 5 рублей в час
*/