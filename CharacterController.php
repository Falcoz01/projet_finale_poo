<?php
include('Character.php');


// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Vérification du bouton submit
    if (isset($_POST['action']) && isset($_POST['id'])) {

        switch ($_POST['action']) {
            case 1  : forwardAction($_POST['id']);
                break;
            case 2 : backwardAction($_POST['id']);
                break;
            case 3 : leftAction($_POST['id']);
                break;
            case 4 : rightAction($_POST['id']);
                break;
            default
        }

    }
}

// function attackAction($Warrior1, $Warrior2, $team2, $id){ 
    
//     include('characterManager.php');
//     $character = readAction($id);
//     if ($character !== null) {
//         $Warrior1->attack($Warrior2);
//         updateAction($character, $id);
//     } else {
//         echo "Personnage non trouvé pour l'ID $id";
//     }
  
   
//     header('Location: main.php');

// }
function forwardAction(int $id)
{   
    include('characterManager.php');
    $character = readAction($id);
    
   
    if ($character !== null) {
        $character->forward();
        updateAction($character, $id);
    } else {
        echo "Personnage non trouvé pour l'ID $id";
    }
  
   
    header('Location: main.php');
    
}

function backwardAction(int $id)
{
    include('characterManager.php');

    $character = readAction($id);

    $character->backward();

    updateAction($character, $id);

    header('Location: main.php');
}

function leftAction(int $id)
{
    include('characterManager.php');

    $character = readAction($id);

    $character->left();

    updateAction($character, $id);

    header('Location: main.php');
}

function rightAction(int $id)
{
    include('characterManager.php');

    $character = readAction($id);

    $character->right();

    updateAction($character, $id);

    header('Location: main.php');
}