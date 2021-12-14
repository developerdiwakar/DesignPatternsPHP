<?php
namespace DesignPatternsPHP\Creational\AbstractFactory;

class WinWriterFactory implements WriterFactory{

    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }

    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }
}