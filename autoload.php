<?php

spl_autoload_register(function($className) {
    // Convertir les backslashes en slashes et ajouter l'extension .php
    $className = str_replace('\\', '/', $className) . '.php';

    // Vérifier si le fichier de classe existe, puis le charger
    if (file_exists($className)) {
        require_once $className;
    }
});