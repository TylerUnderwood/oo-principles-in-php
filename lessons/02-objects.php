<?php

class Team
{
    protected $name;
    protected $members = [];

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params)
    {
        return new static(...$params);
    }

    public function name()
    {
        return $this->name;
    }

    public function members()
    {
        return $this->members;
    }

    public function add($name)
    {
        $this->members[] = $name;
    }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Jane Doe'),
]);

$foo = Team::start('Foo');

var_dump($acme->members());