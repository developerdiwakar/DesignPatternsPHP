<?php
declare(strict_types=1);
namespace DesignPatternsPHP\Creational\Builder;

use DesignPatternsPHP\Creational\Builder\Parts\Vehicle;

interface Builder
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle(): Vehicle;

}