<?php

namespace App\Library;

use App\Library\Effect as effectLib;

class Item
{
	public function getCategory($id)
	{
		switch ($id)
		{
			case 1: return 'Amulette'; break;
			case 2: return 'Arc'; break;
			case 3: return 'Baguette'; break;
			case 4: return 'Bâton'; break;
			case 5: return 'Dague'; break;
			case 6: return 'Epée'; break;
			case 7: return 'Marteau'; break;
			case 8: return 'Pelle'; break;
			case 9: return 'Anneau'; break;
			case 10: return 'Ceinture'; break;
			case 11: return 'Bottes'; break;
			case 12: return 'Potion'; break;
			case 13: return 'Parchemin d\'expérience'; break;
			case 14: return 'Objet de dons'; break;
			case 15: return 'Ressource divers'; break;
			case 16: return 'Chapeau'; break;
			case 17: return 'Cape'; break;
			case 18: return 'Familier'; break;
			case 19: return 'Hache'; break;
			case 20: return 'Outil'; break;
			case 21: return 'Pioche'; break;
			case 22: return 'Faux'; break;
			case 23: return 'Dofus'; break;
			case 24: return 'Objet de Quête'; break;
			case 25: return 'Document'; break;
			case 26: return 'Potion de forgemagie'; break;
			case 27: return 'Objet de Mutation'; break;
			case 28: return 'Nourriture boost'; break;
			case 29: return 'Bénédiction'; break;
			case 30: return 'Malédiction'; break;
			case 31: return 'Roleplay Buff'; break;
			case 32: return 'Personnage suiveur'; break;
			case 33: return 'Pain'; break;
			case 34: return 'Céréale'; break;
			case 35: return 'Fleur'; break;
			case 36: return 'Plante'; break;
			case 37: return 'Bière'; break;
			case 38: return 'Bois'; break;
			case 39: return 'Minerai'; break;
			case 40: return 'Alliage'; break;
			case 41: return 'Poisson'; break;
			case 42: return 'Friandise'; break;
			case 43: return 'Potion d\'oubli de sort'; break;
			case 44: return 'Potion d\'oubli de métier'; break;
			case 45: return 'Potion d\'oubli de maîtrise'; break;
			case 46: return 'Fruit'; break;
			case 47: return 'Os'; break;
			case 48: return 'Poudre'; break;
			case 49: return 'Poisson comestible'; break;
			case 50: return 'Pierre préciseuse'; break;
			case 51: return 'Pierre brute'; break;
			case 52: return 'Farine'; break;
			case 53: return 'Plume'; break;
			case 54: return 'Poil'; break;
			case 55: return 'Etoffe'; break;
			case 56: return 'Cuir'; break;
			case 57: return 'Laine'; break;
			case 58: return 'Graine'; break;
			case 59: return 'Peau'; break;
			case 60: return 'Huile'; break;
			case 61: return 'Peluche'; break;
			case 62: return 'Poisson vidé'; break;
			case 63: return 'Viande'; break;
			case 64: return 'Viande conservé'; break;
			case 65: return 'Queue'; break;
			case 66: return 'Metaria'; break;
			case 68: return 'Légume'; break;
			case 69: return 'Viande comestible'; break;
			case 70: return 'Teinture'; break;
			case 71: return 'Matériel d\'alchimie'; break;
			case 72: return 'Oeuf de familier'; break;
			case 73: return 'Maîtrise'; break;
			case 74: return 'Fée d\'artifice'; break;
			case 75: return 'Parchemin de sort'; break;
			case 76: return 'Parchemin de caractéristique'; break;
			case 77: return 'Certificat de mise en chanil'; break;
			case 78: return 'Rune de forgemagie'; break;
			case 79: return 'Boisson'; break;
			case 80: return 'Objet de misson'; break;
			case 81: return 'Sac à dos'; break;
			case 82: return 'Bouclier'; break;
			case 83: return 'Pierre d\'âme'; break;
			case 84: return 'Clefs'; break;
			case 85: return 'Pierre d\'âme pleine'; break;
			case 86: return 'Potion d\'oubli percepteur'; break;
			case 87: return 'Parchemin de recherche'; break;
			case 88: return 'Pierre magique'; break;
			case 89: return 'Cadeaux'; break;
			case 90: return 'Fantôme de familier'; break;
			case 91: return 'Dragodinde'; break;
			case 92: return 'Bouftou'; break;
			case 93: return 'Objet d\'élevage'; break;
			case 94: return 'Objet utilisable'; break;
			case 95: return 'Planche'; break;
			case 96: return 'Ecorce'; break;
			case 97: return 'Certificat de monture'; break;
			case 98: return 'Racine'; break;
			case 99: return 'Filet de capture'; break;
			case 100: return 'Sac de ressources'; break;
			case 102: return 'Arbalète'; break;
			case 103: return 'Patte'; break;
			case 104: return 'Aile'; break;
			case 105: return 'Oeuf'; break;
			case 106: return 'Oreille'; break;
			case 107: return 'Carapace'; break;
			case 108: return 'Bourgeon'; break;
			case 109: return 'Oeil'; break;
			case 110: return 'Gelée'; break;
			case 111: return 'Coquille'; break;
			case 112: return 'Prisme'; break;
			case 113: return 'Objet vivant'; break;
			case 114: return 'Arme magique'; break;
			case 115: return 'Fragment d\'âme de Shushu'; break;
			case 116: return 'Potion de familier'; break;
			default: return 'TypeId '.$type; break;
		}
	}

	public function getTemplate($statsTemplate)
	{
		$effectLib = new effectLib();
		$html = '';

		if (!empty($statsTemplate))
		{
			foreach (explode(',', $statsTemplate) as $bonus)
			{
				if (!empty($bonus))
				{
					$i = explode('#', $bonus);

					if (count($i) > 1) {
						$effectId = hexdec($i[0]);
						$min = hexdec($i[1]);
						$max = hexdec($i[2]);

						if (in_array($effectId, $effectLib->availableEffects))
						{
							$html .= '<tr><td class="carac '.$effectLib->getIcon($effectId).'"><span></span>'.$effectLib->getEffect($effectId, $min, $max).'</td></tr>';
						}
					}
				}
			}
		}

		return $html;
	}
		public function conditions($conditions)
	{
		$html = $conditions;

		$html = str_replace('CV', 'Vitalité', $html);
		$html = str_replace('Cv', 'Vitalité', $html);
		$html = str_replace('CW', 'Sagesse', $html);
		$html = str_replace('Cw', 'Sagesse', $html);
		$html = str_replace('CI', 'Intelligence', $html);
		$html = str_replace('Ci', 'Intelligence', $html);
		$html = str_replace('CS', 'Force', $html);
		$html = str_replace('Cs', 'Force', $html);
		$html = str_replace('CA', 'Agilité', $html);
		$html = str_replace('Ca', 'Agilité', $html);
		$html = str_replace('CC', 'Chance', $html);
		$html = str_replace('Cc', 'Chance', $html);
		$html = str_replace('PG', 'Classe', $html);
		$html = str_replace('Pg', 'Classe', $html);
		$html = str_replace('PP', 'Grade', $html);
		$html = str_replace('Pp', 'Grade', $html);
		$html = str_replace('PX', 'Rang', $html);
		$html = str_replace('Px', 'Rang', $html);
		$html = str_replace('PK', 'Kamas', $html);
		$html = str_replace('Pk', 'Kamas', $html);
		$html = str_replace('CM', 'PM', $html);
		$html = str_replace('Cm', 'PM', $html);
		$html = str_replace('PZ=1', 'Etre abonné', $html);
		$html = str_replace('Pz=1', 'Etre abonné', $html);
		$html = str_replace('>', ' > ', $html);
		$html = str_replace('<', ' < ', $html);
		$html = str_replace('&', '<br>', $html);
		$html = str_replace('|', ' Ou ', $html);

		return '<tr><td class="carac">'.$html.'</td></tr>';
	}

	public function weaponCarac($armesInfos)
	{
		$value = explode(';', $armesInfos);

		$range = ($value[1] == $value[2]) ? $value[2] : $value[1].' à '.$value[2] ;

		return '<ul><li class="list0">PA : '.$value[0].'</li><li class="list1">Portée : '.$range.'</li><li class="list0">CC : 1/'.$value[3].'</li><li class="list1">EC : 1/'.$value[4].'</li></ul>';
	}
}