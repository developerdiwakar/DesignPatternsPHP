<?php
namespace DesignPatternsPHP\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory{

    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}