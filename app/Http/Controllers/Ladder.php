<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cache;

use App\Models\Player as PlayerManager;
use App\Models\Guild as GuildManager;
use App\Models\Account as AccountManager;

class Ladder extends Controller
{
	/**
	 * Show best PvM players
	 * Get
	 *
	 * @return Response
	 */
	public function showExperience(Request $request)
	{
		$breeds = ($request->has('breed') && $request->breed != 'all') ? [$request->breed] : [1,2,3,4,5,6,7,8,9,10,11,12] ;
		$servers = ($request->has('serveur') && $request->serveur != 'all') ? [$request->serveur] : [1,13,22] ;

		$players = PlayerManager::orderBy('xp', 'desc')->whereIn('class', $breeds)->whereIn('server', $servers)->take(50)->get();

		return view('ladder.experience', compact('players'));
	}

	/**
	 * Show best PvP players
	 * Get
	 *
	 * @return Response
	 */
	public function showHonor(Request $request)
	{
		$breeds = ($request->has('breed') && $request->breed != 'all') ? [$request->breed] : [1,2,3,4,5,6,7,8,9,10,11,12] ;
		$servers = ($request->has('serveur') && $request->serveur != 'all') ? [$request->serveur] : [1,13,22] ;
		$aligns = ($request->has('align') && $request->align != 'all') ? [$request->align] : [0,1,2,3] ;

		$players = PlayerManager::orderBy('honor', 'desc')->whereIn('class', $breeds)->whereIn('server', $servers)->whereIn('alignement', $aligns)->take(50)->get();

		return view('ladder.honor', compact('players'));
	}

	/**
	 * Show best guilds
	 * Get
	 *
	 * @return Response
	 */
	public function showGuilds(Request $request)
	{
		$servers = ($request->has('serveur') && $request->serveur != 'all') ? [$request->serveur] : [1,13,22] ;

		$guilds = GuildManager::orderBy('xp', 'desc')->whereIn('server', $servers)->take(50)->get();

		return view('ladder.guilds', compact('guilds'));
	}

	public function showVote()
	{
		$accounts = Cache::remember('ladder_vote', 60, function () {
			return AccountManager::orderBy('votes', 'desc')->take(50)->get();
		});

		return view('ladder.vote', compact('accounts'));
	}

	public function showJobs()
	{
		$all_players = Cache::remember('ladder_jobs', 60, function () {
			return PlayerManager::all();
		});

		$players = [];

		foreach ($all_players as $player)
		{
			if (!empty($player->jobs))
			{
				$jobs = explode(';', $player->jobs);

				foreach ($jobs as $job)
				{
					$i = explode(',', $job);

					$players[] = [
						'job' 		 => $i[0],
						'experience' => $i[1],
						'name' 		 => $player->name,
						'server'	 => $player->server,
						'class' 	 => $player->class,
						'sexe' 		 => $player->sexe,
					];
				}
			}
		}

		usort($players, [$this, '_cmp']);

		return view('ladder.jobs', compact('players'));
	}

	private function _cmp($a, $b)
	{
		if ($a['experience'] == $b['experience'])
		{
			return 0;
		}

		return ($a['experience'] < $b['experience']) ? 1 : -1 ;
	}
}