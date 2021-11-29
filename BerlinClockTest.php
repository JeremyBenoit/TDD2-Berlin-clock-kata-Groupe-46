<?php


use PHPUnit\Framework\TestCase;
require 'BerlinClock.php';

class BerlinClockTest extends TestCase
{
    //Testing getSimplesMinutes
    public function testGetSimplesMinutesGiven43MinutesShouldReturnYYYO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesMinutes(43);
        //Assert
        $this->assertEquals("YYYO",$actual);
    }

    public function testGetSimplesMinutesGiven11MinutesShouldReturnYOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesMinutes(11);
        //Assert
        $this->assertEquals("YOOO",$actual);
    }
    public function testGetSimplesMinutesGiven39MinutesShouldReturnYYYY()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesMinutes(39);
        //Assert
        $this->assertEquals("YYYY",$actual);
    }
    public function testGetSimplesMinutesGiven32MinutesShouldReturnYYOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesMinutes(32);
        //Assert
        $this->assertEquals("YYOO",$actual);
    }
}
