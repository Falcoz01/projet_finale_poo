<?php

require_once 'autoload.php';
function createHealer (string $name, int $age, string $work, int $PV, 
                        int $score, int $x,int $y, int $PM, int $agilite)
{
    //On se connecte à la base de données
    include('connexion.php');

    //On instantie un nouveau personnage
    $healer = new Healer($name, $age, $work, $PV, $score, $x, $y, $PM, $agilite);

    //On serialise le personnage pour l'enregistrement sous forme de chaîne de caractères
    $serializedObject = serialize($healer);

    //On prepare notre requete SQL
    $stmt = $pdo->prepare("INSERT INTO objects (personnage) VALUES (?)");

    //On execute notre requete SQL en passant la chaîne de caractères en paramètre
    $stmt->execute(array(
        $serializedObject
    ));
}

function createWarior(string $name, int $age, string $work, int $PV, int $score, 
                    int $y, int $x, int $force, int $defense)
{
    //On se connecte à la base de données
    include('connexion.php');

    //On instantie un nouveau personnage
    $warrior = new Warrior($name, $age, $work, $PV, $score, $x, $y, $force, $defense);

    //On serialise le personnage pour l'enregistrement sous forme de chaîne de caractères
    $serializedObject = serialize($warrior);

    //On prepare notre requete SQL
    $stmt = $pdo->prepare("INSERT INTO objects (personnage) VALUES (?)");

    //On execute notre requete SQL en passant la chaîne de caractères en paramètre
    $stmt->execute(array(
        $serializedObject
    ));
}
function readAction(int $id): ?Character
{
    // On se connecte à la base de données
    include('connexion.php');

    // On prépare notre requête SQL
    $stmt = $pdo->prepare("SELECT * FROM objects WHERE id = ?");

    // On exécute notre requête SQL en passant l'identifiant du personnage en paramètre
    $stmt->execute(array($id));

    // On récupère le résultat de notre requête SQL
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si la requête ne renvoie rien, on retourne null
    if (!$row) {
        return null;
    }

    // On désérialise notre résultat pour récupérer notre objet Personnage
    $person = unserialize($row['personnage']);

    // On vérifie si $person est une instance de Character
    if ($person instanceof Character) {
        // On retourne notre objet Personnage
        return $person;
    } else {
        // Si ce n'est pas une instance de Character, on retourne null
        return null;
    }
}

function updateAction($Warrior, int $id)
{
   
    //On se connecte à la base de données
    include('connexion.php');

    //On serialise notre objet Personnage pour l'enregistrement sous forme de chaî
    $serializedObject = serialize($Warrior);

    //On prepare notre requete SQL
    $stmt = $pdo->prepare("UPDATE objects SET personnage = ? WHERE id = ?");

    //On execute notre requete SQL en passant les chaînes de caractères et l'identifiant du personnage en paramètre
    $stmt->execute(array(
        $serializedObject, $id
    ));
}