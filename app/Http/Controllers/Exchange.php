<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Account as AccountManager;

class Exchange extends Controller
{
	public function showKamas()
	{
		return view('exchange.kamas');
	}

	public function showOgrines()
	{
		return view('exchange.ogrines');
	}
}