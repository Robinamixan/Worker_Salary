<?php

declare(strict_types=1);

namespace WorkersSalary;

use WorkersSalary\Salary\FixedSalary;
use WorkersSalary\Salary\HoursSalary;
use WorkersSalary\Workers\Designer;
use WorkersSalary\Workers\Markup;
use WorkersSalary\Workers\MiddleDeveloper;
use WorkersSalary\Workers\SeniorDeveloper;

class Application
{
    public function run()
    {
        $design = new Designer('Georgiy', new FixedSalary(3000));

        $middle1 = new MiddleDeveloper('Alexcei', new HoursSalary(10, 60));

        $senior = new SeniorDeveloper('Sebostian', new FixedSalary(1000));

        $middle2 = new MiddleDeveloper('Marik', new FixedSalary(1000));

        $markup = new Markup('Nikolay', new HoursSalary(5, 120));

        $team_of_dream = new Command();

        $team_of_dream->addWorker($design);
        $team_of_dream->addWorker($senior);
        $team_of_dream->addWorker($middle1);
        $team_of_dream->addWorker($middle2);
        $team_of_dream->addWorker($markup);

        echo $team_of_dream->getAllSalary();
    }
}

/*
- 1 дизайнер, фиксированная оплата 3000 рублей
- 1 Senior Developer, нанятый на 60ч с оплатой 10 рублей в час
- 2 Middle Developer. Фиксированная оплата 1000 рублей в месяц
- 1 верстальщик, 120ч с оплатой 5 рублей в час
*/
