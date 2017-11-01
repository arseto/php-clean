<?php
namespace Greeting\UseCases\Greet;

class GreetResponse
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function getMessage() : string
    {
        return $this->message;
    }
}
