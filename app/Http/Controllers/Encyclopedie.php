<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Cache;

use App\Models\Item as ItemManager;

class Encyclopedie extends Controller
{
	public function showEquipments(Request $request)
	{
		$equipmentCategories = $this->_getEquipmentCategories();
		$itemscategories = ($request->has('cat') && $request->cat != 'all') ? [$request->cat] : $equipmentCategories ;

		$items = ItemManager::where('type', $itemscategories)->orderBy('level')->paginate(25);
		$items->appends($request->only('cat'));
		
		return view('encyclopedie.equipments', compact('items', 'equipmentCategories'));
	}

	private function _getEquipmentCategories()
	{
		$items = ItemManager::select('type')->whereIn('type', [1, 23, 9, 10, 11, 16, 17, 81, 82])->get();
		$itemscategories = [];

		foreach ($items as $item)
		{
			if (!in_array($item->type, $itemscategories))
			{
				array_push($itemscategories, $item->type);
			}
		}
		return $itemscategories;
	}

	public function showWeapons(Request $request)
	{
		$weaponsCategories = $this->_getWeaponsCategories();
		$itemscategories = ($request->has('cat') && $request->cat != 'all') ? [$request->cat] : $weaponsCategories ;

		$items = ItemManager::where('type', $itemscategories)->orderBy('level')->paginate(25);
		$items->appends($request->only('cat'));
		
		return view('encyclopedie.weapons', compact('items', 'weaponsCategories'));
	}

	private function _getWeaponsCategories()
	{
		$items = ItemManager::select('type')->whereIn('type', [2, 3, 4, 5, 6, 7, 8, 19, 20, 21, 22])->get();
		$itemscategories = [];

		foreach ($items as $item)
		{
			if (!in_array($item->type, $itemscategories))
			{
				array_push($itemscategories, $item->type);
			}
		}
		return $itemscategories;
	}

	public function showRessources(Request $request)
	{
		$ressourcesCategories = $this->_getRessourcesCategories();
		$itemscategories = ($request->has('cat') && $request->cat != 'all') ? [$request->cat] : $ressourcesCategories ;

		$items = ItemManager::where('type', $itemscategories)->orderBy('level')->paginate(25);
		$items->appends($request->only('cat'));
		
		return view('encyclopedie.ressources', compact('items', 'ressourcesCategories'));
	}

	private function _getRessourcesCategories()
	{
		$items = ItemManager::select('type')->whereIn('type', [15, 26, 34, 35, 36, 38, 39, 40, 41, 46, 47, 48, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 68, 71, 78, 84, 90, 95, 96, 98, 103, 104, 105, 106, 107, 108, 109, 110, 111])->get();
		$itemscategories = [];

		foreach ($items as $item)
		{
			if (!in_array($item->type, $itemscategories))
			{
				array_push($itemscategories, $item->type);
			}
		}
		return $itemscategories;
	}
	public function showObject($id, $name)
	{
		$item = ItemManager::where('id', $id)->firstOrFail();

		return view('encyclopedie.object', compact('item'));
	}

	public function Search()
	{
    $q = request()->input('q');
    $category = request()->input('category');
    $level = request()->input('level');

    $query = ItemManager::query();

    if ($q) {
        $query->where(function($subQuery) use ($q) {
            $subQuery->where('name', 'LIKE', '%' . $q . '%')
                     ->orWhere('description', 'LIKE', '%' . $q . '%');
        });
    }
    if ($level) {
        $query->where('level', $level);
    }

    $items = $query->orderBy('name')->paginate(25);

    // 💡 Asignar categoría personalizada basada en `type`
    $items->getCollection()->transform(function ($item) {
        $item->category = $this->mapTypeToCategory($item->type);
        return $item;
    });

    return view('encyclopedie.search', compact('items', 'q', 'category', 'level'));
	}
	private function mapTypeToCategory($type)
	{
    return match(true) {
        $type === 1 => 'Amuleto',
        $type === 9 => 'Anillo',
        $type === 10 => 'Cinturón',
        $type === 11 => 'Bota',
        $type === 16 => 'Sombrero',
        $type === 17 => 'Capa',
        $type === 23 => 'Dofus',
        $type === 18 => 'Mascota',
        in_array($type, [2, 3, 4, 5, 6, 7, 8]) => 'Armas',
        $type === 82 => 'Escudo',
        default => 'Otros',
    };
	}

}
