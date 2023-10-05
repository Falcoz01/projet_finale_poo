<?php
include ('CharacterSpecifique.php');
include ('CharacterManager.php');


$character1 = readAction(9);

$character2 = readAction(10);

$character3 = readAction(11);

$character4 = readAction(12);



echo "<h1>{$character1->getName()}</h1>";
echo "<p>Age : {$character1->getAge()}</p>";
echo "<p>Travaille : {$character1->getWork()}</p>";
echo "<p>Score : {$character1->getScore()}</p>";
echo "<p>X: {$character1->getX()}</p>";
echo "<p>Y: {$character1->getY()}</p>";
echo "<p>PV: {$character1->getPV()}</p>";

echo "<h1>{$character2->getName()}</h1>";
echo "<p>Age : {$character2->getAge()}</p>";
echo "<p>Travaille : {$character2->getWork()}</p>";
echo "<p>Score : {$character2->getScore()}</p>";
echo "<p>X: {$character2->getX()}</p>";
echo "<p>Y: {$character2->getY()}</p>";
echo "<p>PV: {$character2->getPV()}</p>";

echo "<h1>{$character3->getName()}</h1>";
echo "<p>Age : {$character3->getAge()}</p>";
echo "<p>Travaille : {$character3->getWork()}</p>";
echo "<p>Score : {$character3->getScore()}</p>";
echo "<p>X: {$character3->getX()}</p>";
echo "<p>Y: {$character3->getY()}</p>";
echo "<p>PV: {$character3->getPV()}</p>";

echo "<h1>{$character4->getName()}</h1>";
echo "<p>Age : {$character4->getAge()}</p>";
echo "<p>Travaille : {$character4->getWork()}</p>";
echo "<p>Score : {$character4->getScore()}</p>";
echo "<p>X: {$character4->getX()}</p>";
echo "<p>Y: {$character4->getY()}</p>";
echo "<p>PV: {$character4->getPV()}</p>";