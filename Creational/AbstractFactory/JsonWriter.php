<?php
namespace DesignPatternsPHP\Creational\AbstractFactory;

interface JsonWriter{

    public function write(array $data, bool $formatted): string;
}