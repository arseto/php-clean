<?php
namespace Greeting\Http\Controllers;

use Greeting\UseCases\Greet\GreetUseCase;
use Greeting\UseCases\Greet\GreetResponse;
use Greeting\UseCases\Greet\GreetRequest;
use Silex\Application;

class GreetingController
{
    private $app;
    private $greetUseCase;

    public function __construct(Application $app, GreetUseCase $greetUseCase)
    {
        $this->app = $app;
        $this->greetUseCase = $greetUseCase;
    }

    public function greet($name)
    {
        $req = new GreetRequest($name);
        $res = $this->greetUseCase->greet($req);
        return $this->app->json([
            'message' => $res->getMessage(),
        ], 200);
    }
}
