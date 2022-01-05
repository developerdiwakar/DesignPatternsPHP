<?php
declare(strict_types=1);

namespace DesignPatternsPHP\Tests;

use DesignPatternsPHP\Creational\AbstractFactory\CsvWriter;
use DesignPatternsPHP\Creational\AbstractFactory\JsonWriter;
use DesignPatternsPHP\Creational\AbstractFactory\UnixWriterFactory;
use DesignPatternsPHP\Creational\AbstractFactory\WinWriterFactory;
use DesignPatternsPHP\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase{

    public function provideFactory()
    {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];

    }

    /**
     * @dataProvider provideFactory
     */

    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());

    }
}