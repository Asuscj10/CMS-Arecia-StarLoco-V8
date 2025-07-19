<?php

/*
* Private Website
* Do Not Copy
* Built with Laravel 5.4
*/

return [
	// Nom du serveur
	'name' => 'Nyeera',
	// Slogan du serveur
	'title' => 'Servidor Dofus Retro',
	// ID Rpg Paradize
	'rpg' => 114262,
	// Role minimum pour accéder à l'administration
	'admin' => 4,
 	// Configuration de la base de donnée
	'database' => [
		'host' => '127.0.0.1',
		'port' => '3307',
		'user' => 'root',
		'pass' => '',
		'auth' => 'login',
		'game' => 'game',
	],
	// Configuration des serveurs
	'servers' => [
		601 => [
			'name' 	=> 'Nyeera',
			'type' 	=> 'Custom',
			'on' 	=> true,
		],		
		1 => [
			'name' 	=> 'Jiva',
			'type' 	=> 'Anka-Like',
			'on' 	=> true,
		],
		13 => [
			'name' 	=> 'Silouate',
			'type' 	=> 'Semi-Like',
			'on' 	=> false,
		],
		22 => [
			'name' 	=> 'Oto Mustam',
			'type' 	=> 'Héroique',
			'on' 	=> false,
		],
	],
	// Configuration des points
	'points' => [
		// Points gagnés en votant
		'vote' => 10,
		// Taux d'échange kamas vers ogrines
		'taux' => 1000,
	],
	// Configuration des liens
	'link' => [
		// Liens pour télécharger le client de Dofus
		'client' => [
			'Windows' => '#',
			'Mac' => '#',
			'Linux' => '#',
		],
		// Liens pour télécharger l'uplauncher'
		'uplauncher' => [
			'Windows' => '#',
			'Mac' => '#',
			'Linux' => '#',
		],
		// Lien vers le forum
		'forum' => './forum/',
		// Lien vers le barbok
		'barbok' => './barbok/',
		// Lien vers le serveur Teamspeak
		'teamspeak' => '',
	],
	// Configuration des réseaux sociaux
	'social' => [
		'facebook' => 'http://www.facebook.com/',
		'youtube'  => 'http://www.youtube.com/',
	],
	// Configuration du module Google Recaptcha
	'recaptcha' => [
		'public'  => '6Ld-sIYrAAAAAC2VD5JcP_Yn1d03QeH8ecaKATP3',
		'private' => '6Ld-sIYrAAAAAKi36D0VI9vRymiNyDT_Ua4BUbaQ',
	],
];