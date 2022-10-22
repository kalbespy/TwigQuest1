<?php

require_once __DIR__ . '/../vendor/autoload.php';

// tu indiques ici à Twig où aller chercher tes fichiers de vues
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());