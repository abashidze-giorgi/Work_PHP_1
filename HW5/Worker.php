<?php
require 'User.php';


class Worker extends User
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}