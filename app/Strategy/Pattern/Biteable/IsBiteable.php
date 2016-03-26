<?php

namespace App\Strategy\Pattern\Biteable;

use App\Strategy\Pattern\Biteable\Biteable;

/**
 * IsBiteable Biteable object
 */
class IsBiteable implements Biteable
{
	/**
	 * Try to bite an object
	 * 
	 * @return string
	 */
	public function tryToBite()
	{
		return "I can be biten!";
	}
}
