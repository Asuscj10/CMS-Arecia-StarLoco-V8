<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function active($name, $number)
{
	$ci = get_instance();

	if($name == 'accueil' && $ci->uri->segment(2) == "" && $number == 1)
	{
		return "class='active'";
	}
	elseif($name=="connect" && $ci->uri->segment(1) == "connect" && $number == 14)
	{
		return "class='active'";
	}
	elseif($name=="crafts" && $ci->uri->segment(1) == "crafts" && $number == 2)
	{
		return "class='active'";
	}
	elseif($name=="echanges" && $ci->uri->segment(1) == "echanges" && $number == 3)
	{
		return "class='active'";
	}
	elseif($name=="paquets" && $ci->uri->segment(1) == "paquets" && $number == 4)
	{
		return "class='active'";
	}
	elseif($name=="message_defauts" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_defauts" && $number == 5)
	{
		return "class='active'";
	}
	elseif($name=="message_prives" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_prives" && $number == 6)
	{
		return "class='active'";
	}
	elseif($name=="message_groupes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_groupes" && $number == 7)
	{
		return "class='active'";
	}
	elseif($name=="message_equipes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_equipes" && $number == 8)
	{
		return "class='active'";
	}
	elseif($name=="message_guildes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_guildes" && $number == 9)
	{
		return "class='active'";
	}
	elseif($name=="message_recrutements" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_recrutements" && $number == 10)
	{
		return "class='active'";
	}
	elseif($name=="message_commerces" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_commerces" && $number == 11)
	{
		return "class='active'";
	}
	elseif($name=="messages" && $ci->uri->segment(1) == "administrateurs" && $ci->uri->segment(2) == "messages" && $number == 12)
	{
		return "class='active'";
	}
	elseif($name=="commandes" && $ci->uri->segment(1) == "administrateurs" && $ci->uri->segment(2) == "commandes" && $number == 13)
	{
		return "class='active'";
	}
}

function active_menu($name, $number)
{
	$ci = get_instance();
	
	if($name=="message_defauts" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_defauts" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_prives" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_prives" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_groupes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_groupes" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_equipes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_equipes" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_guildes" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_guildes" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_recrutements" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_recrutements" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="message_commerces" && $ci->uri->segment(1) == "messages" && $ci->uri->segment(2) == "message_commerces" && $number == 1)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="messages" && $ci->uri->segment(1) == "administrateurs" && $ci->uri->segment(2) == "messages" && $number == 2)
	{
		return "class='dark-nav active'";
	}
	elseif($name=="commandes" && $ci->uri->segment(1) == "administrateurs" && $ci->uri->segment(2) == "commandes" && $number == 2)
	{
		return "class='dark-nav active'";
	}
	else
	{
		return "class='dark-nav '";
	}
}