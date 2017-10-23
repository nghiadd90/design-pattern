<?php

namespace DesignPattern\Decorator;

class Sugar extends AbstractIngredientDecorator
{
	private $ingredient;

	public function __construct(IngredientInterface $ingredient)
	{
		$this->$ingredient = $ingredient;
	}

	public function cost()
	{
		
	}
}