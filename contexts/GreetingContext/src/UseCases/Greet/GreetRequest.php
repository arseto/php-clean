<?php
namespace Greeting\UseCases\Greet;

class GreetRequest
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}
