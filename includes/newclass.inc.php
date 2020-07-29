<?php

class User
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}


class Todo extends User
{
    public $name;

    function __construct($name, User $user)
    {
        $this->name = $name;
        $this->user = $user;
    }
}

$user1 = new User("Paul");
$todo1 = new Todo("do dishes", $user1);

var_dump($todo1);
