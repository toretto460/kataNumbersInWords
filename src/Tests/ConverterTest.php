<?php
namespace Trt\NumberInWords\Tests;

use Trt\NumberInWords\Converter;

/**
 * Converter test case. 
 */ 
class ConverterTest extends \PHPUnit_Framework_TestCase
{

	/**
	 * @dataProvider provideNumberToConvert
	 */
	public function testConvert($number, $numberInWords)
	{
		$converter = new Converter();

		$this->assertEquals($numberInWords, $converter->convert($number));
	}


	public function provideNumberToConvert()
	{
		return [
			'should convert 100 in one hundred'  
				=> [100, 'one hundred'],
			'should convert 99 in ninety nine'   
				=> [99,  'ninety nine'],
			'should convert 1208 in one thounsand two hundreds and eight'  
				=> [1208, 'one thounsand two hundreds and eight'],
			'should convert 2 in two'  
				=> [2, 'two'],
		];

	}
}