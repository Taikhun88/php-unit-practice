<?php 

namespace App;

use InvalidArgumentException;

class User {
    private string $password;
    private const EXCLUDE_CHARS = '@';

    public function setPassword(string $password): void
    {
        if(strlen($password) < 8 
        || str_contains($password, self::EXCLUDE_CHARS)) 

        {
            throw new InvalidArgumentException(
                'The password should have at least 8 valid characters'
            );
        }
        $this->password = $password;
    }
}