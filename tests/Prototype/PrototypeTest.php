<?php
namespace DesignPattern\Test\Prototype;

use DesignPattern\Prototype\ITBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetITBook()
    {
        $itBook = new ITBookPrototype();

        $book = clone $itBook;
        $book->setTitle('IT Book Clone');
        $this->assertInstanceOf(ITBookPrototype::class, $book);
    }
}