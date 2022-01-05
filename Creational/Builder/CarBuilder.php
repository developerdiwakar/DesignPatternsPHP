<?php
declare(strict_types=1);
namespace DesignPatternsPHP\Creational\Builder;

use DesignPatternsPHP\Creational\Builder\Parts\Door;
use DesignPatternsPHP\Creational\Builder\Parts\Engine;
use DesignPatternsPHP\Creational\Builder\Parts\Car;
use DesignPatternsPHP\Creational\Builder\Parts\Vehicle;
use DesignPatternsPHP\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle()
    {
        $this->car = new Car;
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

    public function addWheel()
    {
        $this->car->setPart('wheelFR', new Wheel());
        $this->car->setPart('wheelFL', new Wheel());
        $this->car->setPart('wheelSR', new Wheel());
        $this->car->setPart('wheelSL', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setPart('carEngine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setPart('DoorFR', new Door());
        $this->car->setPart('DoorFL', new Door());
        $this->car->setPart('DoorSR', new Door());
        $this->car->setPart('DoorSL', new Door());
    }

}