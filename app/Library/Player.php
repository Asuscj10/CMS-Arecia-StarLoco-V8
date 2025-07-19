<?php

namespace App\Library;

class Player
{
	public $breeds = [
		1 => 'Féca', 
		2 => 'Osamodas', 
		3 => 'Enutrof', 
		4 => 'Sram', 
		5 => 'Xélor', 
		6 => 'Ecaflip', 
		7 => 'Eniripsa', 
		8 => 'Iop', 
		9 => 'Crâ', 
		10 => 'Sadida', 
		11 => 'Sacrieur', 
		12 => 'Pandawa',
	];
	public $aligns = [
		0 => 'Neutre', 
		1 => 'Bontarien', 
		2 => 'Brakmarien', 
		3 => 'Mercenaire',
	];
	public $jobs = [
		2 => 'Bûcheron',
		11 => 'Forgeur d\'Epées',
		13 => 'Sculpteur d\'Arcs',
		14 => 'Forgeur de Marteaux',
		15 => 'Cordonnier',
		16 => 'Bijoutier',
		17 => 'Forgeur de Dagues',
		18 => 'Sculpteur de Bâtons',
		19 => 'Sculpteur de Baguettes',
		20 => 'Forgeur de Pelles',
		24 => 'Mineur',
		25 => 'Boulanger',
		26 => 'Alchimiste',
		27 => 'Tailleur',
		28 => 'Paysan',
		31 => 'Forgeur de Haches',
		36 => 'Pêcheur',
		41 => 'Chasseur',
		43 => 'Forgemage de Dagues',
		44 => 'Forgemage d\'Epées',
		45 => 'Forgemage de Marteaux',
		46 => 'Forgemage de Pelles',
		47 => 'Forgemage de Haches',
		48 => 'Sculptemage d\'Arcs',
		49 => 'Sculptemage de Baguettes',
		50 => 'Sculptemage de Bâtons',
		56 => 'Boucher',
		58 => 'Poissonier',
		60 => 'Forgeur de Boucliers',
		62 => 'Cordomage',
		63 => 'Joaillomage',
		64 => 'Costumage',
		65 => 'Bricoleur',
	];

	public function getBreed($id)
	{
		try
		{
			return $this->breeds[$id];
		}
		catch (Exception $e)
		{
			return 'null';
		}
	}

	public function getJob($id)
	{
		try
		{
			return $this->jobs[$id];
		}
		catch (Exception $e)
		{
			return 'null';
		}
	}
}