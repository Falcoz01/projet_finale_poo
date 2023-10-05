<?php 

include ('CharacterSpecifique.php');
include ('CharacterManager.php');




$warrior = new Warrior('guerrier', 10, 'combattre', 100, 0, 0, 0, 10, 10);
var_dump($warrior);

echo "<br>";
echo "<br>";

$healer = new Healer('healer', 10, 'soigner', 100 , 0, 0, 0, 10, 10);
var_dump($healer);

echo "<br>";
echo "<br>";

for($i = 0; $i < 2; $i++){
   $nom_Healer = "Healer$i";
   createHealer($nom_Healer, 10, 'soigner', 100 , 0, 0, 0, 10, 10);
 }

echo "<br>";
echo "<br>";

for($i = 1; $i <= 2; $i++){
    $nom_Warrior = "Warrior$i";
    createWarior($nom_Warrior, 10, 'combattre', 100, 0, 0, 0, 10, 10);
}
echo "<br>";
echo "<br>";


//------------EQUIPE 1-------------------------------
$Warrior1 = new Warrior('guerrier1', 10, 'combattre', 100, 0, 0, 0, 30, 10);
$Healer1 = new Healer('soigneur1', 12, 'guérir', 80, 0, 0, 0, 50, 15);
$team1 = new Team($Warrior1, $Healer1);




//------------EQUIPE 2-------------------------------
$Warrior2 = new Warrior('guerrier2', 10, 'combattre', 100, 0, 0, 0, 30, 10);
$Healer2 = new Healer('soigneur2', 12, 'guérir', 80, 0, 0, 0, 50, 15);
$team2 = new Team($Warrior2, $Healer2);

$Warrior1->attack($Warrior2);

echo "PV : " . $team2->getWarrior()->getPV() . "<br>";

echo '<html>
    <head>
        <title>Combat</title>
    </head>
    <body>
    <div style="border: 1px solid black; padding: 10px; width: 500px;">
    <h1>Equipe 1</h1>
    <div style="border: 1px solid black;padding: 10px; width: 400px;">
        <h1> Le nom de votre personnage est : '.$team1->getWarrior()->getName() .' </h1>
        <p>PV : '. $team1->getWarrior()->getPv(). '</p>
        <p>Coordonnées X: ' . $team1->getWarrior()->getX() . ', Y: ' . $team1->getWarrior()->getY() . '</p>
        <form action="characterController.php?action=1&id=2" method="POST" >
        <button type="submit">Avancer</button>
        </form>
        <form action="characterController.php?action=2&id=2" method="POST" >
        <button type="submit">Reculer</button>
        </form>
        <form action="characterController.php?action=3&id=2" method="POST" >
        <button type="submit">Gauche</button>
        </form>
        <form action="characterController.php?action=4&id=2" method="POST" >
        <button type="submit">Droite</button>
        </form>
        <form action="characterController.php?action=5&id=2" method="POST" >
        <button type="submit">Attaquer</button>
        </form>
        </div>
        <div style="border: 1px solid black;padding: 10px; width: 400px;">
        <h1> Le nom de votre soigneur est : ' . $team1->getHealer()->getName() . ' </h1>
        <p>PV : ' . $team1->getHealer()->getPV() . '</p>
        <p>Coordonnées X: ' . $team1->getHealer()->getX() . ', Y: ' . $team1->getHealer()->getY() . '</p>
        <form action="characterController.php?action=6&id=2" method="POST" >
        <button type="submit">Avancer</button>
        </form>
        <form action="characterController.php?action=7&id=2" method="POST" >
        <button type="submit">Reculer</button>
        </form>
        <form action="characterController.php?action=8&id=2" method="POST" >
        <button type="submit">Gauche</button>
        </form>
        <form action="characterController.php?action=9&id=2" method="POST" >
        <button type="submit">Droite</button>
        </form>
        <form action="characterController.php?action=10&id=2" method="POST" >
        <button type="submit">Attaquer</button>
        </form>
    </div>
    </div>

    <div style="border: 1px solid black; padding: 10px; width: 500px;">
    <h1> Equipe 2</h1>
    <div style="border: 1px solid black; padding: 10px; width: 400px; margin-bottom: 20px;">
    <h1> Le nom de votre guerrier est : ' . $team2->getWarrior()->getName() . ' </h1>
    <p>PV : ' . $team2->getWarrior()->getPV() . '</p>
    <p>Coordonnées X: ' . $team2->getWarrior()->getX() . ', Y: ' . $team2->getWarrior()->getY() . '</p>
    <form action="characterController.php?action=11&id=2" method="POST" >
    <button type="submit">Avancer</button>
    </form>
    <form action="characterController.php?action=12&id=2" method="POST" >
    <button type="submit">Reculer</button>
    </form>
    <form action="characterController.php?action=13&id=2" method="POST" >
    <button type="submit">Gauche</button>
    </form>
    <form action="characterController.php?action=14&id=2" method="POST" >
    <button type="submit">Droite</button>
    </form>
    <form action="characterController.php?action=15&id=2" method="POST" >
    <button type="submit">Attaquer</button>
    </form>
</div>

<div style="border: 1px solid black; padding: 10px; width: 400px;">
    <h1> Le nom de votre soigneur est : ' . $team2->getHealer()->getName() . ' </h1>
    <p>PV : ' . $team2->getHealer()->getPV() . '</p>
    <p>Coordonnées X: ' . $team2->getHealer()->getX() . ', Y: ' . $team2->getHealer()->getY() . '</p>
    <form action="characterController.php?action=16&id=2" method="POST" >
        <button type="submit">Avancer</button>
        </form>
        <form action="characterController.php?action=17&id=2" method="POST" >
        <button type="submit">Reculer</button>
        </form>
        <form action="characterController.php?action=18&id=2" method="POST" >
        <button type="submit">Gauche</button>
        </form>
        <form action="characterController.php?action=19&id=2" method="POST" >
        <button type="submit">Droite</button>
        </form>
        <form action="characterController.php?action=20&id=2" method="POST" >
        <button type="submit">Attaquer</button>
        </form>
    </div>
    </div>
    </body>
    </html>';

    
    
   