<?php

declare(strict_types=1);

namespace WorkersSalary;

use WorkersSalary\Workers\Designer;
use WorkersSalary\Workers\Markup;
use WorkersSalary\Workers\MiddleDeveloper;
use WorkersSalary\Workers\SeniorDeveloper;

class Application
{
    public function run()
    {
        $design = new Designer('Georgiy', 'fixed', 3000);

        $middle1 = new MiddleDeveloper('Alexcei', 'hours', 10, 60);

        $senior = new SeniorDeveloper('Sebostian', 'fixed', 1000);

        $middle2 = new MiddleDeveloper('Marik', 'fixed', 1000);

        $markup = new Markup('Nikolay', 'hours', 5, 120);

        $dream = new Command();

        $dream->add_worker($design);
        $dream->add_worker($senior);
        $dream->add_worker($middle1);
        $dream->add_worker($middle2);
        $dream->add_worker($markup);

        echo $dream->get_all_salary();
    }
}

/*
- 1 дизайнер, фиксированная оплата 3000 рублей
- 1 Senior Developer, нанятый на 60ч с оплатой 10 рублей в час
- 2 Middle Developer. Фиксированная оплата 1000 рублей в месяц
- 1 верстальщик, 120ч с оплатой 5 рублей в час
*/
