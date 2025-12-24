<?php

require_once 'classes/Athlete.php';
require_once 'classes/Event.php';
require_once 'classes/Result.php';
require_once 'classes/OlympicRepository.php';
require_once 'classes/OlympicOutputResult.php';

$repository = new OlympicRepository();

$bolt = new Athlete('Usain Bolt', 'Jamaica');
$phelps = new Athlete('Michael Phelps', 'USA');

$sprint = new Event('100m Sprint', '2024-08-01');
$swimming = new Event('Swimming', '2024-08-02');

$repository->addAthlete($bolt);
$repository->addAthlete($phelps);

$repository->addEvent($sprint);
$repository->addEvent($swimming);

$repository->addResult(new Result($bolt, $sprint, 'Gold'));
$repository->addResult(new Result($phelps, $swimming, 'Gold'));

$outputR = new OlympicOutputResult();
$outputR->outputResults($repository);

?>
