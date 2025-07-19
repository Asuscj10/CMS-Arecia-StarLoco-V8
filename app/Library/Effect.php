<?php

namespace App\Library;

class Effect
{
	public $availableEffects = [91,92,93,94,95,96,97,98,99,100,101,111,112,115,116,117,118,119,121,122,123,124,125,126,127,128,138,152,153,154,155,156,157,158,159,160,161,162,163,168,169,171,174,175,176,177,178,179,182,210,211,212,213,214,215,216,217,218,219,220,225,226,240,241,242,243,244,245,246,247,248,249,250,251,252,253,254,255,256,257,258,259,260,261,263,264];

	public function getEffect($effectId, $min, $max)
	{
		$string = ($max == 0 || $max <= $min) ? $min : $min.' à '.$max ;

		switch($effectId)
		{
			case 91: return $string.' (vol Eau)'; break;
			case 92: return $string.' (vol Terre)'; break;
			case 93: return $string.' (vol Air)'; break;
			case 94: return $string.' (vol Feu)'; break;
			case 95: return $string.' (vol Neutre)'; break;
			case 96: return $string.' (dommages Eau)'; break;
			case 97: return $string.' (dommages Terre)'; break;
			case 98: return $string.' (dommages Air)'; break;
			case 99: return $string.' (dommages Feu)'; break;
			case 100: return $string.' (dommages Neutre)'; break;
			case 101: return '-'.$string.' PA (cible)'; break;
			case 111: return $string.' PA'; break;
			case 112: return $string.' Dommages'; break;
			case 115: return $string.' Coups Critiques'; break;
			case 116: return '-'.$string.' Portée'; break;
			case 117: return $string.' Portée'; break;
			case 118: return $string.' Force'; break;
			case 119: return $string.' Agilité'; break;
			case 121: return $string.' Dommages'; break;
			case 122: return $string.' Echec Critiques'; break;
			case 123: return $string.' Chance'; break;
			case 124: return $string.' Sagesse'; break;
			case 125: return $string.' Vitalité'; break;
			case 126: return $string.' Intelligence'; break;
			case 128: return $string.' PM'; break;
			case 138: return $string.' Puissance'; break;
			case 152: return '-'.$string.' Chance'; break;
			case 153: return '-'.$string.' Vitalité'; break;
			case 154: return '-'.$string.' Agilité'; break;
			case 155: return '-'.$string.' Intelligence'; break;
			case 156: return '-'.$string.' Sagesse'; break;
			case 157: return '-'.$string.' Force'; break;
			case 158: return $string.' Pods'; break;
			case 159: return '-'.$string.' Pods'; break;
			case 160: return $string.' Esquive PA'; break;
			case 161: return $string.' Esquive PM'; break;
			case 162: return '-'.$string.' Esquive PA'; break;
			case 163: return '-'.$string.' Esquive PM'; break;
			case 168: return '-'.$string.' PA'; break;
			case 169: return '-'.$string.' PM'; break;
			case 171: return '-'.$string.' Coups Critiques'; break;
			case 174: return $string.' Initiative'; break;
			case 175: return '-'.$string.' Initiative'; break;
			case 176: return $string.' Prospection'; break;
			case 177: return '-'.$string.' Prospection'; break;
			case 178: return $string.' Soins'; break;
			case 179: return '-'.$string.' Soins'; break;
			case 182: return $string.' Invocations'; break;
			case 210: return $string.'% Résistance Terre'; break;
			case 211: return $string.'% Résistance Eau'; break;
			case 212: return $string.'% Résistance Air'; break;
			case 213: return $string.'% Résistance Feu'; break;
			case 214: return $string.'% Résistance Neutre'; break;
			case 215: return '-'.$string.'% Résistance Terre'; break;
			case 216: return '-'.$string.'% Résistance Eau'; break;
			case 217: return '-'.$string.'% Résistance Air'; break;
			case 218: return '-'.$string.'% Résistance Feu'; break;
			case 219: return '-'.$string.'% Résistance Neutre'; break;
			case 220: return 'Renvoie '.$string.' dommages'; break;
			case 225: return $string.' Dommages Pièges'; break;
			case 226: return $string.'% Dommages Pièges'; break;
			case 240: return $string.' Résistance Terre'; break;
			case 241: return $string.' Résistance Eau'; break;
			case 242: return $string.' Résistance Air'; break;
			case 243: return $string.' Résistance Feu'; break;
			case 244: return $string.' Résistance Neutre'; break;
			case 245: return '-'.$string.' Résistance Terre'; break;
			case 246: return '-'.$string.' Résistance Eau'; break;
			case 247: return '-'.$string.' Résistance Air'; break;
			case 248: return '-'.$string.' Résistance Feu'; break;
			case 249: return '-'.$string.' Résistance Neutre'; break;
			case 250: return $string.'% Résistance Terre JCJ'; break;
			case 251: return $string.'% Résistance Eau JCJ'; break;
			case 252: return $string.'% Résistance Air JCJ'; break;
			case 253: return $string.'% Résistance Feu JCJ'; break;
			case 254: return $string.'% Résistance Neutre JCJ'; break;
			case 255: return '-'.$string.'% Résistance Terre JCJ'; break;
			case 256: return '-'.$string.'% Résistance Eau JCJ'; break;
			case 257: return '-'.$string.'% Résistance Air JCJ'; break;
			case 258: return '-'.$string.'% Résistance Feu JCJ'; break;
			case 259: return '-'.$string.'% Résistance Neutre JCJ'; break;
			case 260: return $string.' Résistance Terre JCJ'; break;
			case 261: return $string.' Résistance Eau JCJ'; break;
			case 262: return $string.' Résistance Air JCJ'; break;
			case 263: return $string.' Résistance Feu JCJ'; break;
			case 264: return $string.' Résistance Neutre JCJ'; break;
			default: return ''; break;
		}
	}

	public function getIcon($effectId)
	{
		switch ($effectId)
		{
			case 91: return 'carac_cha'; break;
			case 92: return 'carac_for'; break;
			case 93: return 'carac_agi'; break;
			case 94: return 'carac_int'; break;
			case 95: return 'carac_neu'; break;
			case 96: return 'carac_cha'; break;
			case 97: return 'carac_for'; break;
			case 98: return 'carac_agi'; break;
			case 99: return 'carac_int'; break;
			case 100: return 'carac_neu'; break;
			case 101: return 'carac_-_pa'; break;
			case 111: return 'carac_pa'; break;
			case 112: return 'carac_dom'; break;
			case 115: return 'carac_cc'; break;
			case 116: return 'carac_po'; break;
			case 117: return 'carac_po'; break;
			case 118: return 'carac_for'; break;
			case 119: return 'carac_agi'; break;
			case 121: return 'carac_dom'; break;
			case 123: return 'carac_cha'; break;
			case 124: return 'carac_sag'; break;
			case 125: return 'carac_vit'; break;
			case 126: return 'carac_int'; break;
			case 128: return 'carac_pm'; break;
			case 138: return 'carac_dom_%'; break;
			case 152: return 'carac_cha'; break;
			case 153: return 'carac_vit'; break;
			case 154: return 'carac_agi'; break;
			case 155: return 'carac_int'; break;
			case 156: return 'carac_sag'; break;
			case 157: return 'carac_for'; break;
			case 160: return 'carac_esquive_pa_+'; break;
			case 161: return 'carac_esquive_pm_+'; break;
			case 162: return 'carac_esquive_pa_-'; break;
			case 163: return 'carac_esquive_pm_-'; break;
			case 168: return 'carac_pa'; break;
			case 169: return 'carac_pm'; break;
			case 171: return 'carac_cc'; break;
			case 174: return 'carac_ini'; break;
			case 175: return 'carac_ini'; break;
			case 176: return 'carac_pp'; break;
			case 177: return 'carac_pp'; break;
			case 178: return 'carac_soins'; break;
			case 179: return 'carac_soins'; break;
			case 182: return 'carac_invo'; break;
			case 210: return 'carac_r_t'; break;
			case 211: return 'carac_r_e'; break;
			case 212: return 'carac_r_a'; break;
			case 213: return 'carac_r_f'; break;
			case 214: return 'carac_r_n'; break;
			case 225: return 'carac_dom_pg'; break;
			case 226: return 'carac_dom_pg'; break;
			case 240: return 'carac_r_t'; break;
			case 241: return 'carac_r_e'; break;
			case 242: return 'carac_r_a'; break;
			case 243: return 'carac_r_f'; break;
			case 244: return 'carac_r_n'; break;
			case 245: return 'carac_r_t'; break;
			case 246: return 'carac_r_e'; break;
			case 247: return 'carac_r_a'; break;
			case 248: return 'carac_r_f'; break;
			case 249: return 'carac_r_n'; break;
			case 250: return 'carac_r_t'; break;
			case 251: return 'carac_r_e'; break;
			case 252: return 'carac_r_a'; break;
			case 253: return 'carac_r_f'; break;
			case 254: return 'carac_r_n'; break;
			case 255: return 'carac_r_t'; break;
			case 256: return 'carac_r_e'; break;
			case 257: return 'carac_r_a'; break;
			case 258: return 'carac_r_f'; break;
			case 259: return 'carac_r_n'; break;
			case 260: return 'carac_r_t'; break;
			case 261: return 'carac_r_e'; break;
			case 262: return 'carac_r_a'; break;
			case 263: return 'carac_r_f'; break;
			case 264: return 'carac_r_n'; break;
			default: return ''; break;
		}
	}
}