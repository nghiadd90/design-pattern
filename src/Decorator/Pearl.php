<?php

namespace DesignPattern\Decorator;

class Pearl extends AbstractIngredientDecorator
{
	private $ingredient;

	public function __construct(IngredientInterface $ingredient)
	{
		$this->ingredient = $ingredient;
	}

	public function cost()
	{
		# code...
	}
}