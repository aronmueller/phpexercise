<?php declare(strict_types=1);

use \PHPUnit\Framework\TestCase;

class SequenceTest extends TestCase
{
    public function testStep1SequenceIsCorrect()
    {
        require 'src/FizzBuzzClass.php';
        $sequence = new Sequence;

        $this->assertEquals("fizz", $sequence->generateStep1(6));
        $this->assertEquals("buzz", $sequence->generateStep1(10));
        $this->assertEquals("fizzbuzz", $sequence->generateStep1(30));
    }

    public function testStep2SequenceIsCorrect()
    {
        $sequence = new Sequence;

        $this->assertEquals("fizz", $sequence->generateStep2(6));
        $this->assertEquals("buzz", $sequence->generateStep2(10));
        $this->assertEquals("fizzbuzz", $sequence->generateStep2(45));
        $this->assertEquals("lucky", $sequence->generateStep2(13));
    }
}