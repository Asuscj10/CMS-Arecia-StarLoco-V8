@extends('master')

@section('title', 'Armurerie')

<link rel="stylesheet" href="{{ asset('style/css/libs.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/dark-pumpkin.css') }}">
<link rel="stylesheet" href="{{ asset('style/css/ankama.css') }}">
@section('style')

@section('content')
<div class="panel_title">
    <div>
		<h4>Equipo</h4>
	</div>
</div>
	<!-- saved from url=(0061)https://www.dofusbook.net/fr/equipement/173031-stuff-1/objets -->
								<div class="widget">
									<div class="tb_widget_search">
										<form>
											<input type="text" placeholder="Escribe el nombre de un personaje">
											<input type="submit" value="Buscar">
										</form>
									</div>
								</div>
								<div class="CmpWidget">
									<div class="CmpWidget-content">
										<div class="row">
											<div class="col-sm-13">
												<div class="CmpItems">
													<div class="CmpItems-column">
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/1234.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/82063.png') }}" class="CmpItems-img"></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/9272.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/10311.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/11276.png') }}" class=""></div>
													</div> 
													<div class="CmpItems-column CmpItems-column--main hidden-xs">
														<div class="u-position-relative u-block-center">
															<div id="flashAvatar">
															<img src="{{ asset('style/img/persos/race/characters/2-0.png') }}" height="325" width="325">
																<!--<object type="application/x-shockwave-flash" id="flash" data="./style/swf/DofusPersos.swf" width="350" height="350">
																	<param name="allowscriptaccess" value="sameDomain"> 
																	<param name="flashvars" value="look={1|20,2028,3348,3139|1=#f3bc5e,2=#ffffce,3=#49ccdd,4=#2b2313,5=#ffc430|130}&amp;render=direct&amp;export=true&amp;orientation=3"> 
																	<param name="wmode" value="transparent"> 
																	<param name="enablejs" value="true"> 
																	<p><img src="./style/img/characters/2-0.png" height="325" width="325"></p>
																</object>-->
															</div> 
															<form id="customizeCharacter"></form>
														</div>
													</div> 
													<div class="CmpItems-column">
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/16439.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/5087.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/9283.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/17362.png') }}" class=""></div>
														<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/121013.png') }}" class=""></div>
													</div>
												</div>
												<div class="CmpItems-column">
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151183.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151225.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23005.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/151254.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23018.png') }}" class=""></div>
													<div class="CmpItem"><img width="70" height="70" src="{{ asset('style/img/items/23003.png') }}" class=""></div>
												</div>
											</div> 
											<div class="col-sm-7">
												<div class="u-clear-min"></div> 
												<div class="CmpStat"><span class="CmpStat-number">5065</span><span class="sprite-caracs  carac-pv"></span><span class="CmpStat-label">Vida (PV)</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">11</span><span class="sprite-caracs carac-pa"></span><span class="CmpStat-label">Acción (PA)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">6</span><span class="sprite-caracs carac-pm"></span><span class="CmpStat-label">Movimiento (PM)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">4</span> <span class="sprite-caracs carac-po"></span> <span class="CmpStat-label">Alcance (PO)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">223</span> <span class="sprite-caracs carac-pp"></span> <span class="CmpStat-label">Prospección (PP)</span></div>
												<div class="CmpStat"><span class="CmpStat-number">3190</span> <span class="sprite-caracs carac-ii"></span> <span class="CmpStat-label">Iniciativa</span></div>
												<div class="CmpStat"><span class="CmpStat-number">31</span> <span class="sprite-caracs carac-cc"></span> <span class="CmpStat-label">Critico</span></div>
												<div class="CmpStat"><span class="CmpStat-number">4</span> <span class="sprite-caracs carac-ic"></span> <span class="CmpStat-label">Invocación</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">12</span> <span class="sprite-caracs carac-so"></span> <span class="CmpStat-label">Curas</span> </div> 
												<hr class="CmpStat-hr"> 
												<div class="CmpStat"><span class="CmpStat-number">4015</span> <span class="sprite-caracs carac-vi"></span> <span class="CmpStat-label">Vitalidad</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">320</span> <span class="sprite-caracs carac-sa"></span> <span class="CmpStat-label">Sabiduria</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">690</span> <span class="sprite-caracs carac-fo"></span> <span class="CmpStat-label">Fuerza</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">680</span> <span class="sprite-caracs carac-in"></span> <span class="CmpStat-label">Inteligencia</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">230</span> <span class="sprite-caracs carac-ch"></span> <span class="CmpStat-label">Suerte</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">690</span> <span class="sprite-caracs carac-ag"></span> <span class="CmpStat-label">Agilidad</span> </div>
												<hr class="CmpStat-hr">
												<div class="CmpStat"><span class="CmpStat-number">8%</span> <span class="sprite-caracs carac-rn"></span> <span class="CmpStat-label">Resistencia Neutral</span></div>
												<div class="CmpStat"><span class="CmpStat-number">20%</span> <span class="sprite-caracs carac-rt"></span> <span class="CmpStat-label">Resistencia Tierra</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">19%</span> <span class="sprite-caracs carac-rf"></span> <span class="CmpStat-label">Resistencia Fuego</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">38%</span> <span class="sprite-caracs carac-re"></span> <span class="CmpStat-label">Resistencia Agua</span> </div>
												<div class="CmpStat"><span class="CmpStat-number">20%</span> <span class="sprite-caracs carac-ra"></span> <span class="CmpStat-label">Resistencia Aire</span> </div>																	
											</div>
										</div>
									</div>
								</div>
								<div class="woocommerce-tabs">
                                <div class="tab_content">
                                    <ul class="clearfix">
                                        <li><h4><a href="#tabs_1">Descripción</a></h4></li>
                                        <li><h4><a href="#tabs_2">Características</a></h4></li>
										<li><h4><a href="#tabs_3">Receta</a></h4></li>
										<li><h4><a href="#tabs_4">Set</a></h4></li>
                                    </ul>
                                    <div id="tabs_1">
                                        <p>En definitiva, la industria de la joyería no ha cambiado mucho en los últimos cien años.</p>
                                    </div>
                                    <div id="tabs_2">
										<table class="ak-list-carac">
											<tbody>
												<tr>
													<td class="carac carac_vit"><span></span>200 a 300 de Vitalidad</td>
												</tr>
												<tr>
													<td class="carac carac_sag"><span></span>35 a 50 Sabiduria</td>
												</tr>
												<tr>
													<td class="carac carac_int"><span></span>75 a 100 Inteligencia</td>
												</tr>
												<tr>
													<td class="carac carac_for"><span></span>75 a 100 Fuerza</td>
												</tr>
												<tr>
													<td class="carac carac_dom"><span></span>5 a 10 Daño</td>
												</tr>
												<tr>
													<td class="carac carac_pp"><span></span>20 a 30 Prospección</td>
												</tr>
												<tr>
													<td class="carac carac_neu"><span></span>5 a 8 % Resistencia Neutral</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div id="tabs_3">
										<div class="alert_message grey" jquery="">
											<p><b>Oficio</b> : Sastre</p>
										</div>
                                        <table>
											<tbody>
												<tr>
													<th>Nombre</th>
													<th>Imágen</th>
													<th>Recurso</th>
													<th>Categoría</th>
													<th>Nivel</th>
												</tr>
												<tr>
													<td>8</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/53362.png') }}"></td>
													<td>Pluma de Maestro Cuerbok</td>
													<td>Pluma</td>
													<td>110</td>
												 </tr>
												<tr>
													<td>19</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/55005.png') }}"></td>
													<td>Tela de Fantasma Pandulo</td>
													<td>Tela</td>
													<td>100</td>
												 </tr>
												 <tr>
													<td>8</td>
													<td><img width="60" height="60" src="{{ asset('style/img/items/53362.png') }}"></td>
													<td>Pluma de Maestro Cuerbok</td>
													<td>Pluma</td>
													<td>110</td>
												 </tr>
											</tbody>
										</table>
									</div>
									<div id="tabs_4">
										<div class="alert_message grey" jquery="">
											<p><b>Panoplie</b> : Séculaire</p>
										</div>
										<table>
											<tbody>
												<tr>
													<th>Image</th>
													<th>Nom</th>
													<th>Catégorie</th>
													<th>Niveau</th>
												</tr>
												<tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/16363.png') }}"></td>
													<td>Sombrero Secular</td>
													<td>Sombrero</td>
													<td>200</td>
												 </tr>
												<tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/1230.png') }}"></td>
													<td>Amuleto Secular</td>
                                                    <td>Amuleto</td>
													<td>200</td>
												 </tr>
												 <tr>
													<td><img width="60" height="60" src="{{ asset('style/img/items/10243') }}.png"></td>
													<td>Cinturón Secular</td>
                                                    <td>Cinturón</td>
													<td>200</td>
												 </tr>
											</tbody>
										</table>
									</div>
                                </div>
                            </div>
@endsection