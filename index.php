<?php

session_start();

require __DIR__.'/configs/Database.php';
require __DIR__.'/class/AuthClass.php';
require __DIR__.'/class/ContactClass.php';

require __DIR__.'/_layout/header.php'; 


$database = new database();
$bdd = $database->connect();

$auth = new AuthClass($bdd);
$contact = new ContactClass($bdd);

$page = $_GET['page'] ? $_GET['page'] : '';

switch ($page) {
	case 'accueil':
		require __DIR__.'/pages/accueil.php';
		break;
	case 'evenements':
		require __DIR__.'/pages/evenements.php';
		break;
	case 'contact':
		require __DIR__.'/pages/contact.php';
		break; 
	case 'register':
		require __DIR__.'/pages/register.php';
		break; 
	case '':
		require __DIR__.'/pages/accueil.php';
		break; 
	default:
		require __DIR__.'/pages/accueil.php';
		break;
}

 
require __DIR__.'/_layout/footer.php'; 

