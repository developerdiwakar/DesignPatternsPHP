<?php declare(strict_types=1);
namespace DesignPatternsPHP\Creational\FactoryMethod;

use DesignPatternsPHP\FactoryMethod\Logger;

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}