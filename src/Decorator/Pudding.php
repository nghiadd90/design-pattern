<?php

namespace DesignPattern\Decorator;

class Pudding extends IngredientDecorator
{
	public function cost()
	{
		return $this->ingredient->cost() + 5;
	}

	public function getDescription()
	{
		return $this->ingredient->getDescription() . ', Pudding';
	}
}