<?php 

declare(strict_types=1);

namespace App\Tests;

use App\Cart;
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase 
{
    protected $cart;

    protected function setUp():void
    {
        Cart::setTax(1.2);
        $this->cart = new Cart();
    }

    protected function tearDown(): void
    {
        // Cart::setTax(1.2);
    }

    public function testTheCartTaxValueCanBeChangedStatically()
    {
        // Setup
        $this->cart->setPrice(10);

        // Do something
        Cart::setTax(1.5);
        $netPrice = $this->cart->getNetPrice();
        
        // Make assertions
        $this->assertEquals(15, $netPrice);
    }

    public function testNetPriceIsCalculatedCorrectly()
    {
        // Setup or Giver : is the phase where you bring the dependencies to run the execution
        $this->cart->setPrice(10);

        // Act or When : is the phase that will execute the thing or Do something 
        $netPrice = $this->cart->getNetPrice();
        
        // Make or Then : assertions refers to assert or Then. These 3 phases are referred as (Given, When, Then)
        $this->assertEquals(12, $netPrice);
    }

    public function testErrorHappensWhenPriceIsSetAsString()
    {
        $this->expectError();
        $this->expectErrorMessage('must be of type float');

        $this->cart->setPrice('8.22');        
    }
}