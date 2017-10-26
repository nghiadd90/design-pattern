<?php

namespace DesignPattern\Decorator;

class Pearl extends IngredientDecorator
{
	public function cost()
	{
		return $this->ingredient->cost() + 10;
	}

	public function getDescription()
	{
		return $this->ingredient->getDescription() . ', Pearl';
	}
}