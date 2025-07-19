<?php

namespace App\Http\Controllers;

use Cache;

class Player extends Controller
{
	/**
	 * Show armurerie page
	 * Get
	 *
	 * @return Response
	 */
	public function showArmurerie()
	{
		return view('player.armurerie');
	}
}
