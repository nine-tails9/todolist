<?php

namespace App\Billing;

/**
* 
*/
class Stripe
{
	protected $key;
	
	function __construct($key)
	{
		# code...

		$this -> key = $key;
	}
}