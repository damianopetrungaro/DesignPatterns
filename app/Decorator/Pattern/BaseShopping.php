<?php

namespace App\Decorator\Pattern;


class BaseShopping implements ShoppingInterface
{
	public function getAmount()
	{
		return 1;
	}
}