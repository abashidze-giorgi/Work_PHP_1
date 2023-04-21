<?php
require 'Worker.php';


class Driver extends Worker
{
    private $drivingExperience;
    private  $drivingCategory = ['A', 'B', 'C'];

    /**
     * @param mixed $drivingExperience
     */
    public function setDrivingExperience($drivingExperience): void
    {
        $this->drivingExperience = $drivingExperience;
    }

    /**
     * @return mixed
     */
    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }

    /**
     * @return string[]
     */
    public function getDrivingCategory(): array
    {
        return $this->drivingCategory;
    }
}