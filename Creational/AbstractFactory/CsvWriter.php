<?php
namespace DesignPatternsPHP\Creational\AbstractFactory;

interface CsvWriter{
    public function write(array $line): string;
}