<?php

namespace App\Tests;

use App\Cart;
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

    public function testSomeAssertions()
    {
        // Demo static v $this
        self::assertFalse(2 == 1);

        // AssertArrayHasKey
        $testArray = ['foo' => 'bar'];
        $this->assertArrayHasKey('foo', $testArray);

        $this->assertArrayNotHasKey('zoo', $testArray);

        // assertContains
        $this->assertContains('bar', $testArray);

        $this->assertNotContains('baz', $testArray);

        // assertStringContainsString
        $string = json_encode([
            'price' => '8.99',
            'date' => '2021-12-04',
        ]);

        $this->assertStringContainsString('"date":"2021-12-04"', $string);

        // assertInstanceOf
        $cart = new Cart();
        $this->assertInstanceOf(Cart::class, $cart);

        // assertCount
        $this->assertCount(5, [1,2,3,4,5]);

        // assertEquals / assertSame
        $value = 21;
        // $this->assertSame(1, $value);

        // assertGreaterThan (or equal)
        $this->assertGreaterThanOrEqual(21, $value);
        // $this->assertTrue(21 >= $value);

        // assertIsArray
        $this->assertIsArray([1,2,3]);
        // $this->assertTrue(is_array([1,2,3]));        
    }

}

