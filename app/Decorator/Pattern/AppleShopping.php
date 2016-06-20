<?php

namespace App\Decorator\Pattern;


class AppleShopping implements ShoppingInterface
{
	private $shopping;

	public function __construct(ShoppingInterface $shopping)
	{
		$this->shopping = $shopping;
	}

	public function getAmount()
	{
		return 2 + $this->shopping->getAmount();
	}
}