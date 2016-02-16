<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Class.php';

	session_start();
	    if (empty($_SESSION['list_of_anagrams'])) {
	        $_SESSION['list_of_anagrams'] = array();
	    }

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app) {
		return $app['twig']->render('form.html.twig');
	});

	$app->post("/anagram_confirm", function() use ($app) {
		$new_Anagram = new Anagram;
		$confirmed_anagrams = $new_Anagram->wordArray($_POST['word'], $_POST['possibleAnagrams']);
        return $app['twig']->render('anagram_results.html.twig', array('newAnagram' => implode(" ", $confirmed_anagrams)));
	});

	return $app;

?>
