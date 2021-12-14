<?php
namespace DesignPatternsPHP\Creational\AbstractFactory;

interface WriterFactory{

    public function createJsonWriter(): JsonWriter;
    public function createCsvWriter(): CsvWriter;

}
