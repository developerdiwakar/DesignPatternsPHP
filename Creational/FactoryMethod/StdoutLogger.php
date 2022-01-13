<?php declare(strict_types=1);
namespace DesignPatternsPHP\Creational\FactoryMethod;

use DesignPatternsPHP\FactoryMethod\Logger;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
