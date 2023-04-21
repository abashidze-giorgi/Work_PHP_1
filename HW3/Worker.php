<?php

class Worker
{
    private $name;
    private $age;
    private $salary;

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        if($this->checkAge($age))
        {
            $this->age = $age;
        }
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    private function checkAge(int $age): bool
    {
        if($age > 1 && $age <= 100)
        {
            return true;
        }
        return false;
    }
}