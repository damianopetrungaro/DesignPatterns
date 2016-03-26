<?php

namespace App\Strategy\Pattern\Biteable;

use App\Strategy\Pattern\Biteable\Biteable;

/**
 * NoBiteable Biteable object
 */
class NoBiteable implements Biteable
{
	/**
	 * Try to bite an object
	 * 
	 * @return string
	 */
	public function tryToBite()
	{
		return "I can't be biten!";
	}
}
