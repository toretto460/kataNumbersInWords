<?php

namespace Trt\NumberInWords;

interface ConverterInterface 
{
	/**
	 * Convert an integer in words.
	 * 
	 * @param  int $number
	 * 
	 * @return String
	 */
	public function convert($number);
}