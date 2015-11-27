<?php

require '../app/init.php';

/*$home = new Aston\View\Template('home.phtml');
$home->prenom = "Mohamed";


$layout = new Aston\View\Template('layout.phtml');
$layout->content = $home->render();

echo $layout->render();*/

$user = new User\Model\User();

$user->setEmail('mdioumassi@yahoo.fr')
        ->setFirsname('Mohamed')
        ->setLastname('Dioumassi')
        ->setPassword('123456')
        ->setIsActive(false)
        ->setBirthdate(new DateTime());

$userDb = new User\Model\Db\Mysql\User($db);
$userDb->insert($user);