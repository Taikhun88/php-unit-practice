<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Error\Error;

class FragmentCachingTest extends TestCase {
    /**
     * $cache = new FragmentCaching($cacheAdapter);
     */
    public function testConstructorInterface() {
        $this->expectError(Error::class);

        new \TestUnitaire\FragmentCaching(new stdClass());
    }
}