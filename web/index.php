<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

//$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html.twig', array());
});

$app->get('/boende', function() use($app) {
    return $app['twig']->render('boende.html.twig', array());
});

$app->get('/hitta-hit', function() use($app) {
    return $app['twig']->render('hitta_hit.html.twig', array());
});

$app->get('/kontakt', function() use($app) {
    return $app['twig']->render('kontakt.html.twig', array());
});


$app->run(); 