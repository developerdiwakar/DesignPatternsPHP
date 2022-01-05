<?php
declare(strict_types=1);
namespace DesignPatternsPHP\Creational\Builder\Tests;

use DesignPatternsPHP\Creational\Builder\CarBuilder;
use DesignPatternsPHP\Creational\Builder\Director;
use DesignPatternsPHP\Creational\Builder\Parts\Car;
use DesignPatternsPHP\Creational\Builder\Parts\Truck;
use DesignPatternsPHP\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

final class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);
        $this->assertInstanceOf(Truck::class, $newVehicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}