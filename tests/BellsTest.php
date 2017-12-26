<?php
use Globalfit\Classes\Bells as Bells;

class BellsTest extends \PHPUnit_Framework_TestCase
{
    /**
	  * Test on twelve hour clock
	  */
	public function testTwelveHourClock()
	{
		$bell = new Bells();
		$this->assertEquals($bell::countBells('2:00', '3:00'),5);
	}
    /**
      * Test on twenty four hour clock
      */
	public function testTwentyFourHourClock()
	{
		$bell = new Bells();
		$this->assertEquals($bell::countBells('14:00', '15:00'),5);
	}
	/**
	  * Test when minutes are not zero(ex:3:30, 13:30)
	  */
	public function testNonZeroMinutes()
	{
		$bell = new Bells();
		$this->assertEquals($bell::countBells('14:23', '15:42'),3);
	}
	/**
	  * Test combination of twelve hour and twenty four hour clock
	  */
	public function testHourMix()
	{
		$bell = new Bells();
		$this->assertEquals($bell::countBells('23:00', '1:00'),24);
	}
}