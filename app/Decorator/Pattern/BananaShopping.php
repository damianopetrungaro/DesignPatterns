<?php

namespace App\Decorator\Pattern;


class BananaShopping implements ShoppingInterface
{
	private $shopping;

	public function __construct(ShoppingInterface $shopping)
	{
		$this->shopping = $shopping;
	}

	public function getAmount()
	{
		return 1 + $this->shopping->getAmount();
	}
}