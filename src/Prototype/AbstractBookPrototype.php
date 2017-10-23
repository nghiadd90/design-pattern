<?php
namespace DesignPattern\Prototype;

abstract class AbstractBookPrototype
{
    protected $title;
    protected $category;
    
    abstract public function __clone();
}