<?php
namespace DesignPattern\Prototype;

class ITBookPrototype extends AbstractBookPrototype
{
    protected $title;
    protected $category = 'IT';

    public function __construct()
    {
        
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function __clone()
    {
        # code...
    }
}