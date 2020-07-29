<?php

use PHPUnit\Framework\TestCase;
use Ulid\Ulid;
use Ulid\UlidConstants;

class UlidTest extends TestCase
{
    public function testUlidCanBeInstanciated()
    {
        $ulid = new Ulid();

        $this->assertInstanceOf(Ulid::class, $ulid);
    }

    /**
     * @covers Ulid\Ulid::isValidFormat
     */
    public function testIsValidFormat()
    {
        $ulid = new Ulid();
        $result = $ulid->isValidFormat('01E475VQGHNW990PVHXFDT4C6W');

        $this->assertTrue($result);
    }

    /**
     * @covers Ulid\Ulid::isValidFormat
     */
    public function testIsInvalidFormat()
    {
        $ulid = new Ulid();
        $result = $ulid->isValidFormat('1585083964');

        $this->assertFalse($result);
    }

    /**
     * @covers Ulid\Ulid::getTimeFromUlid
     */
    public function testGetTimeFromUlid()
    {
        $ulid = new Ulid();
        $result = $ulid->getTimeFromUlid('01E475VQGHNW990PVHXFDT4C6W');

        $this->assertEquals('1585083964', $result);
    }

    /**
     * @covers Ulid\Ulid::getTimeFromUlid
     */
    public function testGetTimeFromUlidInvalid()
    {
        $ulid = new Ulid();

        $this->expectExceptionObject(
            new \Exception('Invalid format ULID string.')
        );

        $ulid->getTimeFromUlid('1585083964');
    }

    /**
     * @covers Ulid\Ulid::getDateFromUlid
     */
    public function testGetDateFromUlid()
    {
        $ulid = new Ulid();
        $result = $ulid->getDateFromUlid('01E475VQGHNW990PVHXFDT4C6W');

        $this->assertEquals('2020-03-24 21:06:04', $result);
    }

    /**
     * @covers Ulid\Ulid::getDateFromUlid
     */
    public function testGetDateFromUlidInvalid()
    {
        $ulid = new Ulid();

        $this->expectExceptionObject(
            new \Exception('Invalid format ULID string.')
        );

        $ulid->getDateFromUlid('1585083964');
    }

    /**
     * @covers Ulid\Ulid::getRandomnessFromString
     */
    public function testGetRandomnessFromString()
    {
        $ulid = new Ulid();
        $result = $ulid->getRandomnessFromString('01E475VQGHNW990PVHXFDT4C6W');

        $this->assertEquals('NW990PVHXFDT4C6W', $result);
    }

    /**
     * @covers Ulid\Ulid::getRandomnessFromString
     */
    public function testGetRandomnessFromStringInvalid()
    {
        $ulid = new Ulid();

        $this->expectExceptionObject(
            new \Exception('Invalid format ULID string.')
        );

        $ulid->getRandomnessFromString('1585083964');
    }

    /**
     * @covers Ulid\Ulid::isDuplicatedTime
     */
    public function testIsDuplicatedTime()
    {
        $ulid = new Ulid();
        $result = $ulid->isDuplicatedTime(0);

        $this->assertTrue($result);
    }

    /**
     * @covers Ulid\Ulid::isDuplicatedTime
     */
    public function testIsNotDuplicatedTime()
    {
        $ulid = new Ulid();
        $result = $ulid->isDuplicatedTime(1);

        $this->assertFalse($result);
    }

    /**
     * @covers Ulid\Ulid::hasIncrementLastRandChars
     */
    public function testHasNotIncrementLastRandChars()
    {
        $ulid = new Ulid();
        $result = $ulid->hasIncrementLastRandChars(false);

        $this->assertFalse($result);
    }

    /**
     * @covers Ulid\Ulid::hasIncrementLastRandChars
     */
    public function testHasIncrementLastRandChars()
    {
        $ulid = new Ulid();

        for ($i = 0; $i < 16; $i++) {
            $ulid->lastRandChars[$i] = random_int(0, 31);
        }

        $ulid->lastRandChars[15] = 31;
        $result = $ulid->hasIncrementLastRandChars(true);

        $this->assertTrue($result);
    }

    /**
     * @covers Ulid\Ulid::generate
     */
    public function testGenerate()
    {
        $ulid = new Ulid();
        $result = $ulid->generate();
        
        $this->assertIsString($result);
        $this->assertEquals(26, strlen($result));
    }

    /**
     * @covers Ulid\Ulid::generate
     */
    public function testGenerateWithTime()
    {
        $ulid = new Ulid();
        $result = $ulid->generate(1585083964945);

        $timePart = substr(
            $result,
            0,
            UlidConstants::TIME_LENGTH
        );

        $this->assertIsString($result);
        $this->assertEquals('01E475VQGH', $timePart);
    }

    /**
     * @covers Ulid\Ulid::decodeTime
     */
    public function testDecodeTime()
    {
        $ulid = new Ulid();
        $result = $ulid->decodeTime('01E475VQGH');

        $this->assertIsInt($result);
        $this->assertEquals('1585083964', $result);
    }

    /**
     * @covers Ulid\Ulid::decodeTime
     */
    public function testDecodeTimeInvalid()
    {
        $ulid = new Ulid();

        $this->expectExceptionObject(
            new \Exception('Invalid ULID character: %')
        );

        $ulid->decodeTime('01E%75VQGH');
    }

    /**
     * @covers Ulid\Ulid::decodeTime
     */
    public function testDecodeTimeInvalidTime()
    {
        $ulid = new Ulid();

        $this->expectExceptionObject(
            new \Exception('Invalid ULID string. Timestamp too large')
        );

        $ulid->decodeTime('QS234SAD23RADSWRA3FADQ3RS2');
    }

    protected function tearDown(): void
    {
        //
    }
}
