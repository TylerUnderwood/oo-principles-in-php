<?php

class Team
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function name()
    {

    }
}

$acme = new Team('Acme');
