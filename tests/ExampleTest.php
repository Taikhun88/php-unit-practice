<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
    public function testThatTwoStringsAreTheSame() 
    {
        $string1 = 'TaiTest';
        $string2 = 'TaiTests';

        $this->assertFalse($string1 == $string2);
    }

        public function testProductFunction() 
    {
        require 'example-functions.php';

        $product = product(10, 2);

        $this->assertEquals(20, $product);
        $this->assertNotEquals(10, $product);
    }
}

