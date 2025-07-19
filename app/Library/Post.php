<?php

namespace App\Library;

class Post
{
	public function getCategory($id)
	{
		switch ($id)
		{
			case 1: return 'News'; break;
			case 2: return 'Développement'; break;
			case 3: return 'Communauté'; break;
			default: return 'News';
		}
	}
}