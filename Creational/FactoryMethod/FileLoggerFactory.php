<?php declare(strict_types=1);
namespace DesignPatternsPHP\Creational\FactoryMethod;

use DesignPatternsPHP\FactoryMethod\Logger;

class FileLoggerFactory implements LoggerFactory
{
    public function __construct(private string $filePath)
    {

    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}