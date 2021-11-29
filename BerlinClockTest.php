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

    //Testing getFiveMinutesBlock
    public function testGetFiveMinutesBlockGiven43MinutesShouldReturnYYRYYRYYOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveMinutesBlock(43);
        //Assert
        $this->assertEquals("YYRYYRYYOOO",$actual);
    }

    public function testGetFiveMinutesBlockGiven11MinutesShouldReturnYYOOOOOOOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveMinutesBlock(11);
        //Assert
        $this->assertEquals("YYOOOOOOOOO",$actual);
    }
    public function testGetFiveMinutesBlockGiven39MinutesShouldReturnYYRYYRYOOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveMinutesBlock(39);
        //Assert
        $this->assertEquals("YYRYYRYOOOO",$actual);
    }
    public function testGetFiveMinutesBlockGiven32MinutesShouldReturnYYRYYROOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveMinutesBlock(32);
        //Assert
        $this->assertEquals("YYRYYROOOOO",$actual);
    }


    //Testing getSimpleHours
    public function testGetSimpleHoursGiven2HoursShouldReturnRROO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesHours(2);
        //Assert
        $this->assertEquals("RROO",$actual);
    }
    public function testGetSimpleHoursGiven0HoursShouldReturnOOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesHours(0);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }
    public function testGetSimpleHoursGiven4HoursShouldReturnRRRR()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesHours(4);
        //Assert
        $this->assertEquals("RRRR",$actual);
    }
    public function testGetSimpleHoursGiven3HoursShouldReturnRRRO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSimplesHours(3);
        //Assert
        $this->assertEquals("RRRO",$actual);
    }


    //Testing getFiveHoursBlock
    public function testGetFiveHoursBlockGiven12HoursShouldReturnRROO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveHoursBlock(12);
        //Assert
        $this->assertEquals("RROO",$actual);
    }
    public function testGetFiveHoursBlockGiven2HoursShouldReturnOOOO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveHoursBlock(2);
        //Assert
        $this->assertEquals("OOOO",$actual);
    }
    public function testGetFiveHoursBlockGiven23HoursShouldReturnRRRR()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveHoursBlock(23);
        //Assert
        $this->assertEquals("RRRR",$actual);
    }
    public function testGetFiveHoursBlockGiven17HoursShouldReturnRRRO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getFiveHoursBlock(17);
        //Assert
        $this->assertEquals("RRRO",$actual);
    }

    //Testing getSecondsLamp
    public function testGetSecondsLampGiven1SecondsShouldReturnO()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSecondsLamp(1);
        //Assert
        $this->assertEquals("O",$actual);
    }
    public function testGetSecondsLampGiven42SecondsShouldReturnY()
    {
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->getSecondsLamp(42);
        //Assert
        $this->assertEquals("Y",$actual);
    }
}
