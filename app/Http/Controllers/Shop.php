<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Account as AccountManager;
use App\Models\Item as ItemManager;
use App\Model\Player as PlayerManager;

class Shop extends Controller
{
	/**
	 * Show all shop objects
	 * GET
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function showAll(Request $request)
	{
		$shopCategories = $this->_getShopCategories();
		$categories = ($request->has('cat') && $request->cat != 'all') ? [$request->cat] : $shopCategories ;

		$items = ItemManager::where('shop', 1)->whereIn('type', $categories)->orderBy('level')->paginate(16);
		$items->appends($request->only('cat'));

		return view('shop.all', compact('items', 'shopCategories'));
	}

	/**
	 * Show shop object detail
	 * GET
	 *
	 * @param int $id
	 * @param string $name
	 * @return Response
	 */
	public function showObject($id, $name)
	{
		$item = ItemManager::where('id', $id)->where('shop', 1)->firstOrFail();
		$players = Auth::user()->players;

		return view('shop.object', compact('item', 'players'));
	}

	/**
	 * Buy an object
	 * POST
	 *
	 * @param Request $request
	 * @param int $id
	 * @param string $name
	 * @return Response
	 */
	public function buyObject()
	{
	return redirect()->back()->with(['error' => 'Cette fonctionnalité n\'est pas encore développé.']);
	}

	private function _getShopCategories()
	{
		$items = ItemManager::select('type')->where('shop', 1)->get();
		$categories = [];

		foreach ($items as $item)
		{
			if (!in_array($item->type, $categories))
			{
				array_push($categories, $item->type);
			}
		}

		return $categories;
	}
}