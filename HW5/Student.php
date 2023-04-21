<?php
require 'User.php';

class Student extends User
{
    private $stipend;
    private $course;

    public function setStipend($stipend): void
    {
        $this->stipend = $stipend;
    }

    public function getStipend()
    {
        return $this->stipend;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}