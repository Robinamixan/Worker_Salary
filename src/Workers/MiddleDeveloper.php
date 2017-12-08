<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 08.12.17
 * Time: 19:19
 */

namespace WorkersSalary\Workers;


class MiddleDeveloper extends Worker
{
    function __construct($full_name, $type_salary, $value, $hours = 0)
    {
        parent::__construct($full_name, $type_salary, $value, $hours);
    }
}