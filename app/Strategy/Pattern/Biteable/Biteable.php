<?php

namespace App\Strategy\Pattern\Biteable;

/**
 * Interface for Biteable
 */
interface Biteable
{
	/**
	 * Try to bite an object
	 * 
	 * @return string
	 */
	public function tryToBite();
}
