<?php declare(strict_types=1);
namespace DesignPatternsPHP\Creational\FactoryMethod;

use DesignPatternsPHP\FactoryMethod\Logger;

class FileLogger implements Logger
{
    public function __construct(private string $filePath)
    {

    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}