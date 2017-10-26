<?php

namespace DesignPattern\Decorator;

abstract class IngredientDecorator implements IngredientInterface
{
	protected $ingredient;

	public function __construct(IngredientInterface $ingredient)
	{
		$this->ingredient = $ingredient;
	}
}