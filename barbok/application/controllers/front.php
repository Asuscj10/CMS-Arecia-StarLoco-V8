<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front extends CI_Controller
{
	/**
	 * @author Sin
	 * @version 1.0.0
	 * 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent:: __construct();
		$this->load->library('session'); // Chargement des sessions
	}
	
	public function index()
	{
		$this->layout->view('pages/accueil');
	}
	public function amulettes()
	{
		$this->layout->view('pages/equipements/amulettes');
	}
	public function anneaux()
	{
		$this->layout->view('pages/equipements/anneaux');
	}
	public function bottes()
	{
		$this->layout->view('pages/equipements/bottes');
	}
	public function bouclier()
	{
		$this->layout->view('pages/equipements/bouclier');
	}
	public function capes()
	{
		$this->layout->view('pages/equipements/capes');
	}
	public function ceintures()
	{
		$this->layout->view('pages/equipements/ceintures');
	}
	public function chapeaux()
	{
		$this->layout->view('pages/equipements/chapeaux');
	}
	public function brico()
	{
		$this->layout->view('pages/equipements/brico');
	}
	public function abreuvoir()
	{
		$this->layout->view('pages/equipements/brico/abreuvoir');
	}
	public function baffeur()
	{
		$this->layout->view('pages/equipements/brico/baffeur');
	}
	public function caresseur()
	{
		$this->layout->view('pages/equipements/brico/caresseur');
	}
	public function dragofesse()
	{
		$this->layout->view('pages/equipements/brico/dragofesse');
	}
	public function foudroyeur()
	{
		$this->layout->view('pages/equipements/brico/foudroyeur');
	}
	public function clefs()
	{
		$this->layout->view('pages/equipements/clefs');
	}
	public function outil()
	{
		$this->layout->view('pages/equipements/outil');
	}
	public function sac()
	{
		$this->layout->view('pages/equipements/sac');
	}
	public function arc()
	{
		$this->layout->view('pages/armes/arc');
	}
	public function baguette()
	{
		$this->layout->view('pages/armes/baguette');
	}
	public function baton()
	{
		$this->layout->view('pages/armes/baton');
	}
	public function dague()
	{
		$this->layout->view('pages/armes/dague');
	}
	public function epee()
	{
		$this->layout->view('pages/armes/epee');
	}
	public function hache()
	{
		$this->layout->view('pages/armes/hache');
	}
	public function marteaux()
	{
		$this->layout->view('pages/armes/marteaux');
	}
	public function pelle()
	{
		$this->layout->view('pages/armes/pelle');
	}
	public function accdonjon()
	{
		$this->layout->view('pages/accdonjon');
	}
	public function xpmetier()
	{
		$this->layout->view('pages/xpmetier');
	}
	public function accquete()
	{
		$this->layout->view('pages/accquete');
	}
	public function accpano()
	{
		$this->layout->view('pages/accpano');
	}
	public function dofus()
	{
		$this->layout->view('pages/divers/dofus');
	}
	public function emote()
	{
		$this->layout->view('pages/divers/emote');
	}
	public function familier()
	{
		$this->layout->view('pages/divers/familier');
	}
	public function parcho()
	{
		$this->layout->view('pages/divers/parcho');
	}
	public function perso()
	{
		$this->layout->view('pages/divers/perso');
	}
	public function CC()
	{
		$this->layout->view('pages/dossiers/CC');
	}
	public function craftsecu()
	{
		$this->layout->view('pages/dossiers/craftsecu');
	}
	public function dinde()
	{
		$this->layout->view('pages/dossiers/dinde');
	}
	public function cheminoto()
	{
		$this->layout->view('pages/dossiers/cheminoto');
	}
	public function otomai()
	{
		$this->layout->view('pages/dossiers/otomai');
	}
	public function obvi()
	{
		$this->layout->view('pages/dossiers/obvi');
	}
	public function pevetons()
	{
		$this->layout->view('pages/dossiers/pevetons');
	}
	public function artifice()
	{
		$this->layout->view('pages/dossiers/artifice');
	}
	public function est()
	{
		$this->layout->view('pages/panos/est');
	}
	public function peg()
	{
		$this->layout->view('pages/panos/peg');
	}
	public function empire()
	{
		$this->layout->view('pages/panos/empire');
	}
	public function bzz()
	{
		$this->layout->view('pages/panos/bzz');
	}
	public function pompa()
	{
		$this->layout->view('pages/panos/pompa');
	}
	public function citronoplie()
	{
		$this->layout->view('pages/panos/citronoplie');
	}
	public function ananas()
	{
		$this->layout->view('pages/panos/ananas');
	}
	public function panda()
	{
		$this->layout->view('pages/panos/panda');
	}
	public function eca()
	{
		$this->layout->view('pages/panos/eca');
	}
	public function cra()
	{
		$this->layout->view('pages/panos/cra');
	}
	public function osa()
	{
		$this->layout->view('pages/panos/osa');
	}
	public function enu()
	{
		$this->layout->view('pages/panos/enu');
	}
	public function feca()
	{
		$this->layout->view('pages/panos/feca');
	}
	public function sadi()
	{
		$this->layout->view('pages/panos/sadi');
	}
	public function sram()
	{
		$this->layout->view('pages/panos/sram');
	}
	public function eni()
	{
		$this->layout->view('pages/panos/eni');
	}
	public function sacri()
	{
		$this->layout->view('pages/panos/sacri');
	}
	public function iop()
	{
		$this->layout->view('pages/panos/iop');
	}
	public function xelor()
	{
		$this->layout->view('pages/panos/xelor');
	}
	public function ventouse()
	{
		$this->layout->view('pages/panos/ventouse');
	}
	public function mouche()
	{
		$this->layout->view('pages/panos/mouche');
	}
	public function gladiateur()
	{
		$this->layout->view('pages/panos/gladiateur');
	}
	public function plignon()
	{
		$this->layout->view('pages/panos/plignon');
	}
	public function ougah()
	{
		$this->layout->view('pages/panos/ougah');
	}
	public function berserker()
	{
		$this->layout->view('pages/panos/berserker');
	}
	public function celyium()
	{
		$this->layout->view('pages/panos/celyium');
	}
	public function bois()
	{
		$this->layout->view('pages/panos/bois');
	}
	public function souveraine()
	{
		$this->layout->view('pages/panos/souveraine');
	}
	public function minotot()
	{
		$this->layout->view('pages/panos/minotot');
	}
	public function zoth()
	{
		$this->layout->view('pages/panos/zoth');
	}
	public function chenemou()
	{
		$this->layout->view('pages/panos/chenemou');
	}
	public function meulou()
	{
		$this->layout->view('pages/panos/meulou');
	}
	public function zothicien()
	{
		$this->layout->view('pages/panos/zothicien');
	}
	public function claire()
	{
		$this->layout->view('pages/panos/claire');
	}
	public function elya()
	{
		$this->layout->view('pages/panos/elya');
	}
	public function ceremonial()
	{
		$this->layout->view('pages/panos/ceremonial');
	}
	public function zotheur()
	{
		$this->layout->view('pages/panos/zotheur');
	}
	public function baveuse()
	{
		$this->layout->view('pages/panos/baveuse');
	}
	public function dragoeufp()
	{
		$this->layout->view('pages/panos/dragoeufp');
	}
	public function ancestral()
	{
		$this->layout->view('pages/panos/ancestral');
	}
	public function minotoror()
	{
		$this->layout->view('pages/panos/minotoror');
	}
	public function ratblanc()
	{
		$this->layout->view('pages/panos/ratblanc');
	}
	public function ratnoir()
	{
		$this->layout->view('pages/panos/ratnoir');
	}
	public function dc()
	{
		$this->layout->view('pages/panos/dc');
	}
	public function vassale()
	{
		$this->layout->view('pages/panos/vassale');
	}
	public function bwork()
	{
		$this->layout->view('pages/panos/bwork');
	}
	public function feudala()
	{
		$this->layout->view('pages/panos/feudala');
	}
	public function sombre()
	{
		$this->layout->view('pages/panos/sombre');
	}
	public function bloproyalmulti()
	{
		$this->layout->view('pages/panos/bloproyalmulti');
	}
	public function craqlegende()
	{
		$this->layout->view('pages/panos/craqlegende');
	}
	public function terrdala()
	{
		$this->layout->view('pages/panos/terrdala');
	}
	public function koulosse()
	{
		$this->layout->view('pages/panos/koulosse');
	}
	public function bloproyalindigo()
	{
		$this->layout->view('pages/panos/bloproyalindigo');
	}
	public function bloproyalgriotte()
	{
		$this->layout->view('pages/panos/bloproyalgriotte');
	}
	public function bloproyalcoco()
	{
		$this->layout->view('pages/panos/bloproyalcoco');
	}
	public function bloproyalreinette()
	{
		$this->layout->view('pages/panos/bloproyalreinette');
	}
	public function shika()
	{
		$this->layout->view('pages/panos/shika');
	}
	public function farle()
	{
		$this->layout->view('pages/panos/farle');
	}
	public function oboule()
	{
		$this->layout->view('pages/panos/oboule');
	}
	public function aerdala()
	{
		$this->layout->view('pages/panos/aerdala');
	}
	public function br()
	{
		$this->layout->view('pages/panos/br');
	}
	public function croco()
	{
		$this->layout->view('pages/panos/croco');
	}
	public function mulou()
	{
		$this->layout->view('pages/panos/mulou');
	}
	public function kitsou()
	{
		$this->layout->view('pages/panos/kitsou');
	}
	public function koalak()
	{
		$this->layout->view('pages/panos/koalak');
	}
	public function tortue()
	{
		$this->layout->view('pages/panos/tortue');
	}
	public function wabbit()
	{
		$this->layout->view('pages/panos/wabbit');
	}
	public function gelax()
	{
		$this->layout->view('pages/panos/gelax');
	}
	public function scaradoree()
	{
		$this->layout->view('pages/panos/scaradoree');
	}
	public function vegetatif()
	{
		$this->layout->view('pages/panos/vegetatif');
	}
	public function boufcool()
	{
		$this->layout->view('pages/panos/boufcool');
	}
	public function scaranoire()
	{
		$this->layout->view('pages/panos/scaranoire');
	}
	public function blopindigo()
	{
		$this->layout->view('pages/panos/blopindigo');
	}
	public function blopgriotte()
	{
		$this->layout->view('pages/panos/blopgriotte');
	}
	public function blopreinette()
	{
		$this->layout->view('pages/panos/blopreinette');
	}
	public function blopcoco()
	{
		$this->layout->view('pages/panos/blopcoco');
	}
	public function dindo()
	{
		$this->layout->view('pages/panos/dindo');
	}
	public function craqueleur()
	{
		$this->layout->view('pages/panos/craqueleur');
	}
	public function viouti()
	{
		$this->layout->view('pages/panos/viouti');
	}
	public function mega()
	{
		$this->layout->view('pages/panos/mega');
	}
	public function scaravert()
	{
		$this->layout->view('pages/panos/scaravert');
	}
	public function scararouge()
	{
		$this->layout->view('pages/panos/scararouge');
	}
	public function scarablanc()
	{
		$this->layout->view('pages/panos/scarablanc');
	}
	public function scarableu()
	{
		$this->layout->view('pages/panos/scarableu');
	}
	public function abraknyde()
	{
		$this->layout->view('pages/panos/abraknyde');
	}
	public function corbac()
	{
		$this->layout->view('pages/panos/corbac');
	}
	public function akwadala()
	{
		$this->layout->view('pages/panos/akwadala');
	}
	public function kwakglace()
	{
		$this->layout->view('pages/panos/kwakglace');
	}
	public function kwakfeu()
	{
		$this->layout->view('pages/panos/kwakfeu');
	}
	public function kwakvent()
	{
		$this->layout->view('pages/panos/kwakvent');
	}
	public function kwakterre()
	{
		$this->layout->view('pages/panos/kwakterre');
	}
	public function larvesque()
	{
		$this->layout->view('pages/panos/larvesque');
	}
	public function prespic()
	{
		$this->layout->view('pages/panos/prespic');
	}
	public function fourbasse()
	{
		$this->layout->view('pages/panos/fourbasse');
	}
	public function toady()
	{
		$this->layout->view('pages/panos/toady');
	}
	public function wa()
	{
		$this->layout->view('pages/panos/wa');
	}
	public function tofup()
	{
		$this->layout->view('pages/panos/tofup');
	}
	public function sanglier()
	{
		$this->layout->view('pages/panos/sanglier');
	}
	public function moskito()
	{
		$this->layout->view('pages/panos/moskito');
	}
	public function paysanne()
	{
		$this->layout->view('pages/panos/paysanne');
	}
	public function ours()
	{
		$this->layout->view('pages/panos/ours');
	}
	public function bouftou()
	{
		$this->layout->view('pages/panos/bouftou');
	}
	public function bandit()
	{
		$this->layout->view('pages/panos/bandit');
	}
	public function champetre()
	{
		$this->layout->view('pages/panos/champetre');
	}
	public function champchamp()
	{
		$this->layout->view('pages/panos/champchamp');
	}
	public function arakne()
	{
		$this->layout->view('pages/panos/arakne');
	}
	public function aventurier()
	{
		$this->layout->view('pages/panos/aventurier');
	}
	public function boune()
	{
		$this->layout->view('pages/panos/boune');
	}
	public function dv()
	{
		$this->layout->view('pages/donjons/dv');
	}
	public function tot()
	{
		$this->layout->view('pages/donjons/tot');
	}
	public function mino()
	{
		$this->layout->view('pages/donjons/mino');
	}
	public function fungus()
	{
		$this->layout->view('pages/donjons/fungus');
	}
	public function bworker()
	{
		$this->layout->view('pages/donjons/bworker');
	}
	public function canide()
	{
		$this->layout->view('pages/donjons/canide');
	}
	public function dragoeuf()
	{
		$this->layout->view('pages/donjons/dragoeuf');
	}
	public function dragoncochon()
	{
		$this->layout->view('pages/donjons/dragoncochon');
	}
	public function skeunk()
	{
		$this->layout->view('pages/donjons/skeunk');
	}
	public function koulossed()
	{
		$this->layout->view('pages/donjons/koulossed');
	}
	public function familierd()
	{
		$this->layout->view('pages/donjons/familierd');
	}
	public function krala()
	{
		$this->layout->view('pages/donjons/krala');
	}
	public function kimbo()
	{
		$this->layout->view('pages/donjons/kimbo');
	}
	public function tynril()
	{
		$this->layout->view('pages/donjons/tynril');
	}
	public function rasboul()
	{
		$this->layout->view('pages/donjons/rasboul');
	}
	public function arche()
	{
		$this->layout->view('pages/donjons/arche');
	}
	public function hesque()
	{
		$this->layout->view('pages/donjons/hesque');
	}
	public function mc()
	{
		$this->layout->view('pages/donjons/mc');
	}
	public function cm()
	{
		$this->layout->view('pages/donjons/cm');
	}
	public function abra()
	{
		$this->layout->view('pages/donjons/abra');
	}
	public function firefoux()
	{
		$this->layout->view('pages/donjons/firefoux');
	}
	public function pandikaze()
	{
		$this->layout->view('pages/donjons/pandikaze');
	}
	public function kiki()
	{
		$this->layout->view('pages/donjons/kiki');
	}
	public function bulbe()
	{
		$this->layout->view('pages/donjons/bulbe');
	}
	public function sphincter()
	{
		$this->layout->view('pages/donjons/sphincter');
	}
	public function noir()
	{
		$this->layout->view('pages/donjons/noir');
	}
	public function blanc()
	{
		$this->layout->view('pages/donjons/blanc');
	}
	public function cawotte()
	{
		$this->layout->view('pages/donjons/cawotte');
	}
	public function chateauwa()
	{
		$this->layout->view('pages/donjons/chateauwa');
	}
	public function cheminwa()
	{
		$this->layout->view('pages/donjons/cheminwa');
	}
	public function chouq()
	{
		$this->layout->view('pages/donjons/chouq');
	}
	public function moon()
	{
		$this->layout->view('pages/donjons/moon');
	}
	public function blop2()
	{
		$this->layout->view('pages/donjons/blop2');
	}
	public function blop()
	{
		$this->layout->view('pages/donjons/blop');
	}
	public function noel3()
	{
		$this->layout->view('pages/donjons/noel3');
	}
	public function noel2()
	{
		$this->layout->view('pages/donjons/noel2');
	}
	public function noel()
	{
		$this->layout->view('pages/donjons/noel');
	}
	public function gelee()
	{
		$this->layout->view('pages/donjons/gelee');
	}
	public function bworke()
	{
		$this->layout->view('pages/donjons/bworke');
	}
	public function craq()
	{
		$this->layout->view('pages/donjons/craq');
	}
	public function larves()
	{
		$this->layout->view('pages/donjons/larves');
	}
	public function tofuroyal()
	{
		$this->layout->view('pages/donjons/tofuroyal');
	}
	public function tofu()
	{
		$this->layout->view('pages/donjons/tofu');
	}
	public function scara()
	{
		$this->layout->view('pages/donjons/scara');
	}
	public function forgeron()
	{
		$this->layout->view('pages/donjons/forgeron');
	}
	public function squel()
	{
		$this->layout->view('pages/donjons/squel');
	}
	public function champs()
	{
		$this->layout->view('pages/donjons/champs');
	}
	public function bouftoud()
	{
		$this->layout->view('pages/donjons/bouftoud');
	}
	public function bob()
	{
		$this->layout->view('pages/donjons/bob');
	}
	public function incarnam()
	{
		$this->layout->view('pages/donjons/incarnam');
	}
	public function marche()
	{
		$this->layout->view('pages/quetes/marche');
	}
	public function speleo()
	{
		$this->layout->view('pages/quetes/speleo');
	}
	public function milice()
	{
		$this->layout->view('pages/quetes/milice');
	}
	public function monts()
	{
		$this->layout->view('pages/quetes/monts');
	}
	public function osad()
	{
		$this->layout->view('pages/quetes/osad');
	}
	public function instinct()
	{
		$this->layout->view('pages/quetes/instinct');
	}
	public function ami()
	{
		$this->layout->view('pages/quetes/ami');
	}
	public function piou()
	{
		$this->layout->view('pages/quetes/piou');
	}
	public function turbin()
	{
		$this->layout->view('pages/quetes/turbin');
	}
	public function art()
	{
		$this->layout->view('pages/quetes/art');
	}
	public function resto()
	{
		$this->layout->view('pages/quetes/resto');
	}
	public function deces()
	{
		$this->layout->view('pages/quetes/deces');
	}
	public function couper()
	{
		$this->layout->view('pages/quetes/couper');
	}
	public function aouaire()
	{
		$this->layout->view('pages/quetes/aouaire');
	}
	public function zaap()
	{
		$this->layout->view('pages/quetes/zaap');
	}
	public function papotage()
	{
		$this->layout->view('pages/quetes/papotage');
	}
	public function arme()
	{
		$this->layout->view('pages/quetes/arme');
	}
	public function bains()
	{
		$this->layout->view('pages/quetes/bains');
	}
	public function bienvenue()
	{
		$this->layout->view('pages/quetes/bienvenue');
	}
	public function pur()
	{
		$this->layout->view('pages/quetes/pur');
	}
	public function village()
	{
		$this->layout->view('pages/quetes/village');
	}
	public function deesse()
	{
		$this->layout->view('pages/quetes/deesse');
	}
	public function pandrista()
	{
		$this->layout->view('pages/quetes/pandrista');
	}
	public function tourdumonde()
	{
		$this->layout->view('pages/quetes/tourdumonde');
	}
	public function recherch()
	{
		$this->layout->view('pages/quetes/recherch');
	}
	public function nowa()
	{
		$this->layout->view('pages/quetes/nowa');
	}
	public function aiguille()
	{
		$this->layout->view('pages/quetes/aiguille');
	}
	public function nageant()
	{
		$this->layout->view('pages/quetes/nageant');
	}
	public function menalt()
	{
		$this->layout->view('pages/quetes/menalt');
	}
	public function cheveux()
	{
		$this->layout->view('pages/quetes/cheveux');
	}
	public function visite()
	{
		$this->layout->view('pages/quetes/visite');
	}
	public function acid()
	{
		$this->layout->view('pages/quetes/acid');
	}
	public function avis()
	{
		$this->layout->view('pages/quetes/avis');
	}
	public function identite()
	{
		$this->layout->view('pages/quetes/identite');
	}
	public function information()
	{
		$this->layout->view('pages/quetes/information');
	}
	public function peau()
	{
		$this->layout->view('pages/quetes/peau');
	}
	public function mariage()
	{
		$this->layout->view('pages/quetes/mariage');
	}
	public function suite()
	{
		$this->layout->view('pages/quetes/suite');
	}
	public function prince()
	{
		$this->layout->view('pages/quetes/prince');
	}
	public function san()
	{
		$this->layout->view('pages/quetes/san');
	}
	public function traitre()
	{
		$this->layout->view('pages/quetes/traitre');
	}
	public function honnie()
	{
		$this->layout->view('pages/quetes/honnie');
	}
	public function roublard()
	{
		$this->layout->view('pages/quetes/roublard');
	}
	public function frugal()
	{
		$this->layout->view('pages/quetes/frugal');
	}
	public function crocod()
	{
		$this->layout->view('pages/quetes/crocod');
	}
	public function morose()
	{
		$this->layout->view('pages/quetes/morose');
	}
	public function polka()
	{
		$this->layout->view('pages/quetes/polka');
	}
	public function paulette()
	{
		$this->layout->view('pages/quetes/paulette');
	}
	public function bulbique()
	{
		$this->layout->view('pages/quetes/bulbique');
	}
	public function docteur()
	{
		$this->layout->view('pages/quetes/docteur');
	}
	public function spit()
	{
		$this->layout->view('pages/quetes/spit');
	}
	public function peggy()
	{
		$this->layout->view('pages/quetes/peggy');
	}
	public function flip()
	{
		$this->layout->view('pages/quetes/flip');
	}
	public function kito()
	{
		$this->layout->view('pages/quetes/kito');
	}
	public function pont()
	{
		$this->layout->view('pages/quetes/pont');
	}
	public function moisson()
	{
		$this->layout->view('pages/quetes/moisson');
	}
	public function oto()
	{
		$this->layout->view('pages/quetes/oto');
	}
	public function demon3()
	{
		$this->layout->view('pages/quetes/demon3');
	}
	public function demon2()
	{
		$this->layout->view('pages/quetes/demon2');
	}
	public function demon()
	{
		$this->layout->view('pages/quetes/demon');
	}
	public function ange2()
	{
		$this->layout->view('pages/quetes/ange2');
	}
	public function ange1()
	{
		$this->layout->view('pages/quetes/ange1');
	}
	public function ara()
	{
		$this->layout->view('pages/quetes/ara');
	}
	public function kanni()
	{
		$this->layout->view('pages/quetes/kanni');
	}
	public function coffrem()
	{
		$this->layout->view('pages/quetes/coffrem');
	}
	public function coffreb()
	{
		$this->layout->view('pages/quetes/coffreb');
	}
	public function fwabbit()
	{
		$this->layout->view('pages/quetes/fwabbit');
	}
	public function nomoon()
	{
		$this->layout->view('pages/quetes/nomoon');
	}
	public function cawottesort()
	{
		$this->layout->view('pages/quetes/cawottesort');
	}
	public function mineur()
	{
		$this->layout->view('pages/metiers/mineur');
	}
	public function paysan()
	{
		$this->layout->view('pages/metiers/paysan');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */