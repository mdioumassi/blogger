<?php

require '../app/init.php';

$home = new Aston\View\Template('home.phtml');
$home->prenom = "Mohamed";


$layout = new Aston\View\Template('layout.phtml');
$layout->content = $home->render();

echo $layout->render();

