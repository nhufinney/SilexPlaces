<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Place.php";

    session_start();
    if (empty($_SESSION['list_of_cities'])) {
        $_SESSION['list_of_cities'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('places.php', array('places'=> Place::getAll()));
    });

    $app->post("/places", function() use ($app) {
        $place = new Place($_POST['location'], $_POST['duration'], $_POST['image']);
        $place->save();
        return $app['twig']->render('create_place.php', array('newplace' => $place, $duration, $image));
    });

    $app->post("/delete_places", function() use ($app) {
        Place::deleteAll();
        return $app['twig']->render('delete_places.php');
    });

    return $app;

?>
