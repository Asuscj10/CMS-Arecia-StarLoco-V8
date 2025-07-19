<?php

namespace App\Http\Controllers;

use Cache;

use App\Models\Staff as StaffManager;
use App\Models\Update as UpdateManager;
use App\Models\Screenshot as ScreenshotManager;

class Misc extends Controller
{
	/**
	 * Show dropwiever page
	 * Get
	 *
	 * @return Response
	 */
	 
	public function showDropwiever()
	{
		return view('misc.dropwiever');
	}
	
		/**
	 * Show join page
	 * Get
	 *
	 * @return Response
	 */
	public function showJoin()
	{
		return view('misc.join');
	}

	/**
	 * Show lasts updates
	 * Get
	 *
	 * @return Response
	 */
	public function showUpdates()
	{
		$updates = Cache::remember('updates', 60, function () {
			return UpdateManager::orderBy('version', 'desc')->take(4)->get();
		});

		return view('misc.updates', compact('updates'));
	}

	/**
	 * Show servor's staff
	 * Get
	 *
	 * @return Response
	 */
	public function showStaff()
	{
		$members = Cache::remember('all_staffs', 60, function () {
			return StaffManager::all();
		});

		$staffs = array();

		foreach ($members as $member)
		{
			$staffs[$member->category][] = $member;
		}

		return view('misc.staff', compact('staffs'));
	}

	/**
	 * Show all screenshots
	 * Get
	 *
	 * @return Response
	 */
	public function showScreenshots()
	{
		$screenshots = ScreenshotManager::paginate(12);

		return view('misc.screenshots', compact('screenshots'));
	}

	/**
	 * Show servor's status
	 * Get
	 *
	 * @return Response
	 */
	public function showStatus()
	{
		return view('misc.status');
	}

	/**
	 * Show rules
	 * Get
	 *
	 * @return Response
	 */
	public function showRules()
	{
		return view('misc.rules');
	}

	/**
	 * Show world map
	 * Get
	 *
	 * @return Response
	 */
	public function showMap()
	{
		return view('misc.map');
	}
}