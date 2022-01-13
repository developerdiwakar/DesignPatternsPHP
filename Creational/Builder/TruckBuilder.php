<?php
declare(strict_types=1);
namespace DesignPatternsPHP\Creational\Builder;

use DesignPatternsPHP\Creational\Builder\Parts\Door;
use DesignPatternsPHP\Creational\Builder\Parts\Engine;
use DesignPatternsPHP\Creational\Builder\Parts\Truck;
use DesignPatternsPHP\Creational\Builder\Parts\Vehicle;
use DesignPatternsPHP\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVehicle()
    {
        $this->truck = new Truck;
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }

    public function addWheel()
    {
        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

}