<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "front";
$route['equipements/amulettes'] = "front/amulettes";
$route['equipements/anneaux'] = "front/anneaux";
$route['equipements/bottes'] = "front/bottes";
$route['equipements/bouclier'] = "front/bouclier";
$route['equipements/capes'] = "front/capes";
$route['equipements/ceintures'] = "front/ceintures";
$route['equipements/chapeaux'] = "front/chapeaux";
$route['equipements/clefs'] = "front/clefs";
$route['equipements/outil'] = "front/outil";
$route['equipements/sac'] = "front/sac";
$route['equipements/brico'] = "front/brico";
$route['equipements/brico/abreuvoir'] = "front/abreuvoir";
$route['equipements/brico/baffeur'] = "front/baffeur";
$route['equipements/brico/caresseur'] = "front/caresseur";
$route['equipements/brico/dragofesse'] = "front/dragofesse";
$route['equipements/brico/foudroyeur'] = "front/foudroyeur";
$route['armes/arc'] = "front/arc";
$route['armes/baguette'] = "front/baguette";
$route['armes/baton'] = "front/baton";
$route['armes/dague'] = "front/dague";
$route['armes/epee'] = "front/epee";
$route['armes/hache'] = "front/hache";
$route['armes/marteaux'] = "front/marteaux";
$route['armes/pelle'] = "front/pelle";
$route['divers/dofus'] = "front/dofus";
$route['divers/emote'] = "front/emote";
$route['divers/familier'] = "front/familier";
$route['divers/parcho'] = "front/parcho";
$route['divers/perso'] = "front/perso";
$route['dossiers/CC'] = "front/CC";
$route['dossiers/craftsecu'] = "front/craftsecu";
$route['dossiers/dinde'] = "front/dinde";
$route['dossiers/cheminoto'] = "front/cheminoto";
$route['dossiers/otomai'] = "front/otomai";
$route['dossiers/obvi'] = "front/obvi";
$route['dossiers/pevetons'] = "front/pevetons";
$route['dossiers/artifice'] = "front/artifice";
$route['accpano'] = "front/accpano";
$route['panos/boune'] = "front/boune";
$route['panos/aventurier'] = "front/aventurier";
$route['panos/arakne'] = "front/arakne";
$route['panos/champchamp'] = "front/champchamp";
$route['panos/champetre'] = "front/champetre";
$route['panos/bandit'] = "front/bandit";
$route['panos/bouftou'] = "front/bouftou";
$route['panos/ours'] = "front/ours";
$route['panos/paysanne'] = "front/paysanne";
$route['panos/moskito'] = "front/moskito";
$route['panos/sanglier'] = "front/sanglier";
$route['panos/tofup'] = "front/tofup";
$route['panos/wa'] = "front/wa";
$route['panos/toady'] = "front/toady";
$route['panos/fourbasse'] = "front/fourbasse";
$route['panos/prespic'] = "front/prespic";
$route['panos/larvesque'] = "front/larvesque";
$route['panos/kwakterre'] = "front/kwakterre";
$route['panos/kwakvent'] = "front/kwakvent";
$route['panos/kwakfeu'] = "front/kwakfeu";
$route['panos/kwakglace'] = "front/kwakglace";
$route['panos/akwadala'] = "front/akwadala";
$route['panos/corbac'] = "front/corbac";
$route['panos/abraknyde'] = "front/abraknyde";
$route['panos/scarableu'] = "front/scarableu";
$route['panos/scarablanc'] = "front/scarablanc";
$route['panos/scararouge'] = "front/scararouge";
$route['panos/scaravert'] = "front/scaravert";
$route['panos/mega'] = "front/mega";
$route['panos/viouti'] = "front/viouti";
$route['panos/craqueleur'] = "front/craqueleur";
$route['panos/dindo'] = "front/dindo";
$route['panos/blopcoco'] = "front/blopcoco";
$route['panos/blopreinette'] = "front/blopreinette";
$route['panos/blopgriotte'] = "front/blopgriotte";
$route['panos/blopindigo'] = "front/blopindigo";
$route['panos/scaranoire'] = "front/scaranoire";
$route['panos/boufcool'] = "front/boufcool";
$route['panos/vegetatif'] = "front/vegetatif";
$route['panos/scaradoree'] = "front/scaradoree";
$route['panos/gelax'] = "front/gelax";
$route['panos/wabbit'] = "front/wabbit";
$route['panos/tortue'] = "front/tortue";
$route['panos/koalak'] = "front/koalak";
$route['panos/kitsou'] = "front/kitsou";
$route['panos/mulou'] = "front/mulou";
$route['panos/croco'] = "front/croco";
$route['panos/br'] = "front/br";
$route['panos/aerdala'] = "front/aerdala";
$route['panos/oboule'] = "front/oboule";
$route['panos/farle'] = "front/farle";
$route['panos/shika'] = "front/shika";
$route['panos/bloproyalreinette'] = "front/bloproyalreinette";
$route['panos/bloproyalcoco'] = "front/bloproyalcoco";
$route['panos/bloproyalgriotte'] = "front/bloproyalgriotte";
$route['panos/bloproyalindigo'] = "front/bloproyalindigo";
$route['panos/koulosse'] = "front/koulosse";
$route['panos/terrdala'] = "front/terrdala";
$route['panos/craqlegende'] = "front/craqlegende";
$route['panos/bloproyalmulti'] = "front/bloproyalmulti";
$route['panos/sombre'] = "front/sombre";
$route['panos/feudala'] = "front/feudala";
$route['panos/bwork'] = "front/bwork";
$route['panos/vassale'] = "front/vassale";
$route['panos/dc'] = "front/dc";
$route['panos/ratnoir'] = "front/ratnoir";
$route['panos/ratblanc'] = "front/ratblanc";
$route['panos/minotoror'] = "front/minotoror";
$route['panos/ancestral'] = "front/ancestral";
$route['panos/dragoeufp'] = "front/dragoeufp";
$route['panos/baveuse'] = "front/baveuse";
$route['panos/zotheur'] = "front/zotheur";
$route['panos/ceremonial'] = "front/ceremonial";
$route['panos/elya'] = "front/elya";
$route['panos/claire'] = "front/claire";
$route['panos/zothicien'] = "front/zothicien";
$route['panos/meulou'] = "front/meulou";
$route['panos/chenemou'] = "front/chenemou";
$route['panos/zoth'] = "front/zoth";
$route['panos/minotot'] = "front/minotot";
$route['panos/souveraine'] = "front/souveraine";
$route['panos/bois'] = "front/bois";
$route['panos/celyium'] = "front/celyium";
$route['panos/berserker'] = "front/berserker";
$route['panos/ougah'] = "front/ougah";
$route['panos/plignon'] = "front/plignon";
$route['panos/gladiateur'] = "front/gladiateur";
$route['panos/mouche'] = "front/mouche";
$route['panos/ventouse'] = "front/ventouse";
$route['panos/xelor'] = "front/xelor";
$route['panos/iop'] = "front/iop";
$route['panos/sacri'] = "front/sacri";
$route['panos/eni'] = "front/eni";
$route['panos/sram'] = "front/sram";
$route['panos/sadi'] = "front/sadi";
$route['panos/feca'] = "front/feca";
$route['panos/enu'] = "front/enu";
$route['panos/osa'] = "front/osa";
$route['panos/cra'] = "front/cra";
$route['panos/eca'] = "front/eca";
$route['panos/panda'] = "front/panda";
$route['panos/ananas'] = "front/ananas";
$route['panos/citronoplie'] = "front/citronoplie";
$route['panos/pompa'] = "front/pompa";
$route['panos/bzz'] = "front/bzz";
$route['panos/empire'] = "front/empire";
$route['panos/peg'] = "front/peg";
$route['panos/est'] = "front/est";
$route['accdonjon'] = "front/accdonjon";
$route['donjons/incarnam'] = "front/incarnam";
$route['donjons/bob'] = "front/bob";
$route['donjons/bouftoud'] = "front/bouftoud";
$route['donjons/champs'] = "front/champs";
$route['donjons/squel'] = "front/squel";
$route['donjons/forgeron'] = "front/forgeron";
$route['donjons/scara'] = "front/scara";
$route['donjons/tofu'] = "front/tofu";
$route['donjons/tofuroyal'] = "front/tofuroyal";
$route['donjons/larves'] = "front/larves";
$route['donjons/craq'] = "front/craq";
$route['donjons/bworke'] = "front/bworke";
$route['donjons/gelee'] = "front/gelee";
$route['donjons/noel'] = "front/noel";
$route['donjons/noel2'] = "front/noel2";
$route['donjons/noel3'] = "front/noel3";
$route['donjons/blop'] = "front/blop";
$route['donjons/blop2'] = "front/blop2";
$route['donjons/moon'] = "front/moon";
$route['donjons/chouq'] = "front/chouq";
$route['donjons/cheminwa'] = "front/cheminwa";
$route['donjons/chateauwa'] = "front/chateauwa";
$route['donjons/cawotte'] = "front/cawotte";
$route['donjons/blanc'] = "front/blanc";
$route['donjons/noir'] = "front/noir";
$route['donjons/sphincter'] = "front/sphincter";
$route['donjons/bulbe'] = "front/bulbe";
$route['donjons/kiki'] = "front/kiki";
$route['donjons/pandikaze'] = "front/pandikaze";
$route['donjons/firefoux'] = "front/firefoux";
$route['donjons/abra'] = "front/abra";
$route['donjons/cm'] = "front/cm";
$route['donjons/mc'] = "front/mc";
$route['donjons/hesque'] = "front/hesque";
$route['donjons/arche'] = "front/arche";
$route['donjons/rasboul'] = "front/rasboul";
$route['donjons/tynril'] = "front/tynril";
$route['donjons/kimbo'] = "front/kimbo";
$route['donjons/krala'] = "front/krala";
$route['donjons/familierd'] = "front/familierd";
$route['donjons/koulossed'] = "front/koulossed";
$route['donjons/skeunk'] = "front/skeunk";
$route['donjons/dragoncochon'] = "front/dragoncochon";
$route['donjons/dragoeuf'] = "front/dragoeuf";
$route['donjons/canide'] = "front/canide";
$route['donjons/bworker'] = "front/bworker";
$route['donjons/fungus'] = "front/fungus";
$route['donjons/mino'] = "front/mino";
$route['donjons/tot'] = "front/tot";
$route['donjons/dv'] = "front/dv";
$route['accquete'] = "front/accquete";
$route['quetes/cawottesort'] = "front/cawottesort";
$route['quetes/nomoon'] = "front/nomoon";
$route['quetes/fwabbit'] = "front/fwabbit";
$route['quetes/coffreb'] = "front/coffreb";
$route['quetes/coffrem'] = "front/coffrem";
$route['quetes/kanni'] = "front/kanni";
$route['quetes/ara'] = "front/ara";
$route['quetes/ange1'] = "front/ange1";
$route['quetes/ange2'] = "front/ange2";
$route['quetes/demon'] = "front/demon";
$route['quetes/demon2'] = "front/demon2";
$route['quetes/demon3'] = "front/demon3";
$route['quetes/oto'] = "front/oto";
$route['quetes/moisson'] = "front/moisson";
$route['quetes/pont'] = "front/pont";
$route['quetes/kito'] = "front/kito";
$route['quetes/flip'] = "front/flip";
$route['quetes/peggy'] = "front/peggy";
$route['quetes/spit'] = "front/spit";
$route['quetes/docteur'] = "front/docteur";
$route['quetes/bulbique'] = "front/bulbique";
$route['quetes/paulette'] = "front/paulette";
$route['quetes/polka'] = "front/polka";
$route['quetes/morose'] = "front/morose";
$route['quetes/crocod'] = "front/crocod";
$route['quetes/frugal'] = "front/frugal";
$route['quetes/roublard'] = "front/roublard";
$route['quetes/honnie'] = "front/honnie";
$route['quetes/traitre'] = "front/traitre";
$route['quetes/san'] = "front/san";
$route['quetes/prince'] = "front/prince";
$route['quetes/suite'] = "front/suite";
$route['quetes/mariage'] = "front/mariage";
$route['quetes/peau'] = "front/peau";
$route['quetes/information'] = "front/information";
$route['quetes/identite'] = "front/identite";
$route['quetes/avis'] = "front/avis";
$route['quetes/acid'] = "front/acid";
$route['quetes/visite'] = "front/visite";
$route['quetes/cheveux'] = "front/cheveux";
$route['quetes/menalt'] = "front/menalt";
$route['quetes/nageant'] = "front/nageant";
$route['quetes/aiguille'] = "front/aiguille";
$route['quetes/nowa'] = "front/nowa";
$route['quetes/recherch'] = "front/recherch";
$route['quetes/tourdumonde'] = "front/tourdumonde";
$route['quetes/pandrista'] = "front/pandrista";
$route['quetes/deesse'] = "front/deesse";
$route['quetes/village'] = "front/village";
$route['quetes/pur'] = "front/pur";
$route['quetes/bienvenue'] = "front/bienvenue";
$route['quetes/bains'] = "front/bains";
$route['quetes/arme'] = "front/arme";
$route['quetes/papotage'] = "front/papotage";
$route['quetes/zaap'] = "front/zaap";
$route['quetes/aouaire'] = "front/aouaire";
$route['quetes/couper'] = "front/couper";
$route['quetes/deces'] = "front/deces";
$route['quetes/resto'] = "front/resto";
$route['quetes/art'] = "front/art";
$route['quetes/turbin'] = "front/turbin";
$route['quetes/piou'] = "front/piou";
$route['quetes/ami'] = "front/ami";
$route['quetes/instinct'] = "front/instinct";
$route['quetes/osad'] = "front/osad";
$route['quetes/monts'] = "front/monts";
$route['quetes/milice'] = "front/milice";
$route['quetes/speleo'] = "front/speleo";
$route['quetes/marche'] = "front/marche";
$route['xpmetier'] = "front/xpmetier";
$route['metiers/mineur'] = "front/mineur";
$route['metiers/paysan'] = "front/paysan";
$route['404_override'] = '';



/*
*/

/* End of file routes.php */
/* Location: ./application/config/routes.php */