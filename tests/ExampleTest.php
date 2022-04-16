<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testThatTwoStringsAreTheSame() 
    {
        $string1 = 'TaiTest';
        $string2 = 'TaiTests';

        $this->assertTrue($string1 == $string2);
    }
}