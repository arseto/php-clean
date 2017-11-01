<?php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views'
));

$guc = new \Greeting\UseCases\Greet\GreetUseCase();
$gc = new \Greeting\Http\Controllers\GreetingController(
    $app,
    $guc
);

$app->get('/hello/{name}', function($name) use ($gc) {
    return $gc->greet($name);
});

$app->get('/hello-twig/{name}', function($name) use($app) {
    return $app['twig']->render('hello.twig', [
        'name' => $name,
    ]);
});

$app->run();
