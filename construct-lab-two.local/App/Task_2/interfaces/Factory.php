<?php



namespace App\Task_2\interfaces;



interface Factory
{
    public function createLaptop(): Device;

    public function createNetbook(): Device;

    public function createEBook(): Device;

    public function createSmartphone(): Device;
}
