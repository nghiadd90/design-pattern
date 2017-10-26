<?php

namespace DesignPattern\Decorator;


class MilkTea implements IngredientInterface
{
	private $description = 'Milk Tea';

	public function cost()
	{
		return 30;
	}

	public function getDescription()
	{
		return $this->description;
	}
}