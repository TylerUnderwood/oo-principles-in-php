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

    public function remove()
    {

    }
}

$acme = new Team('Acme', [
    'John Doe',
    'Jane Doe'
]);

$acme->add('Frank Doe');

var_dump($acme->members());