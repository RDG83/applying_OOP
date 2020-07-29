<?php

require_once "User.php";

class Todo extends User
{

    public string $todoName;

    public function __construct(string $todoName, User $user)
    {
        $this->todoName = $todoName;
        $this->userName = $user->userName;
        $this->userAge = $user->userAge;
    }
}
