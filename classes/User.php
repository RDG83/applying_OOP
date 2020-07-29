<?php

class User
{
    public string $userName;
    public int $userAge;
    function __construct(string $name, int $age)
    {
        $this->userName = $name;
        $this->userAge = $age;
    }
}
