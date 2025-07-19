<?php

namespace App\Library;

class Staff
{
	public $cats = [1 => 'L\'équipe d\'Administrateur', 2 => 'L\'équipe de Modérateur', 3 => 'L\'équipe d\'Animateur'];

	public function getCategory($id)
	{
		try
		{
			return $this->cats[$id];
		}
		catch (Exception $e)
		{
			return 'null';
		}
	}
}