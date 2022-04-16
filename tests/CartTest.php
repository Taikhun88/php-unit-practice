<?php

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase 
{
    public function testNetPriceIsCalculatedCorrectly()
    {
        // Setup or Giver : is the phase where you bring the dependencies to run the execution
        $cart = new Cart();
        $cart->price = 10;

        // Act or When : is the phase that will execute the thing or Do something 
        $netPrice = $cart->getNetPrice();
        
        // Make or Then : assertions refers to assert or Then. These 3 phases are referred as (Given, When, Then)
        $this->assertEquals(12, $netPrice);
    }
}