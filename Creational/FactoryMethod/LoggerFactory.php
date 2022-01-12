<?php declare(strict_types=1);
namespace DesignPatternsPHP\Creational\FactoryMethod;

use DesignPatternsPHP\FactoryMethod\Logger;

interface LoggerFactory
{
    public function createLogger(): Logger;
}