<?php
namespace Greeting\UseCases\Greet;

class GreetUseCase
{
    public function greet(GreetRequest $req) : GreetResponse
    {
        $message = 'Hello ' . ucwords($req->getName());
        $res = new GreetResponse($message);
        return $res;
    }
}
