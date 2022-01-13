<?php declare(strict_types=1);
namespace DesignPatternsPHP\Tests;

use DesignPatternsPHP\Creational\FactoryMethod\FileLogger;
use DesignPatternsPHP\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatternsPHP\Creational\FactoryMethod\StdoutLogger;
use DesignPatternsPHP\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}