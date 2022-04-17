<?php 

namespace App\Tests;

use App\User;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase 
{
    public function testExceptionsAreThrownForShortPasswords()
    {
        $user = new User();
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('8 valid characters');

        $user->setPassword('short');
    }

    public function testExceptionThrownIfPasswordContainsExcludedChars()
    {
        try {
            $user = new User();

            $user->setPassword('p@ssword');
            $this->fail('A InvalidArgumentException should have been thrown');

        } catch (InvalidArgumentException $exception) {
            $this->assertStringContainsString('8 valid characters', $exception->getMessage());
        }
    }
}