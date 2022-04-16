<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testTwoStringsAreTheSame() 
    {
        $string1 = 'TaiTest';
        $string2 = 'TaiTests';

        $this->assertFalse($string1 == $string2);
    }

        public function testProductIsCalculatedCorrectly() 
    {
        require 'example-functions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }
}

