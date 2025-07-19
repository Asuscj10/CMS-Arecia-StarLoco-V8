<?php
/* POST */
Route::get('/', 'Post@showHomepage')->name('homepage');
Route::get('{id}-{title}', 'Post@showPost')->where(['id' => '[0-9]+', 'title' => '[A-Za-z0-9_-]+'])->name('post');
/* MISC */
Route::get('join', 'Misc@showJoin')->name('join');
Route::get('rules', 'Misc@showRules')->name('rules');
Route::get('staff', 'Misc@showStaff')->name('staff');
Route::get('screenshots', 'Misc@showScreenshots')->name('screenshots');
Route::get('status', 'Misc@showStatus')->name('status');
Route::get('updates', 'Misc@showUpdates')->name('updates');
Route::get('map', 'Misc@showMap')->name('map');
Route::get('dropwiever', 'Misc@showdropwiever')->name('dropwiever');
/* LADDER */
Route::group(['prefix' => 'ladder', 'as' => 'ladder.'], function () {
	Route::get('experience', 'Ladder@showExperience')->name('exp');
	Route::get('honor', 'Ladder@showHonor')->name('honor');
	Route::get('guilds', 'Ladder@showGuilds')->name('guilds');
	Route::get('vote', 'Ladder@showVote')->name('vote');
	Route::get('jobs', 'Ladder@showJobs')->name('jobs');
});
/* PLAYER */
Route::group(['prefix' => 'player', 'as' => 'player.'], function () {
	Route::get('armurerie', 'Player@showArmurerie')->name('armurerie');
});
/* ENCYCLOPEDIE */
Route::group(['prefix' => 'encyclopedie', 'as' => 'encyclopedie.'], function () {
	Route::get('/encyclopedie/search', [App\Http\Controllers\Encyclopedie::class, 'Search'])->name('encyclopedie.search');
	Route::get('equipments', 'Encyclopedie@showEquipments')->name('equipments');
	Route::get('weapons', 'Encyclopedie@showWeapons')->name('weapons');
	Route::get('ressources', 'Encyclopedie@showRessources')->name('ressources');
	Route::get('{id}-{name}', 'Encyclopedie@showObject')->where(['id' => '[0-9]+', 'name' => '[A-Za-z0-9_-]+'])->name('object');
	Route::get('search', 'Encyclopedie@Search')->name('search');
});
/* NOT LOGGED */
Route::group(['middleware' => 'guest'], function () {
	/* ACCOUNT */
	Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
		Route::post('login', 'Account@loginAccount')->name('login');
		Route::get('register', 'Account@showRegister')->name('register');
		Route::post('register', 'Account@createAccount');
	});
	/* PASSWORD */
	Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
		Route::get('forget', 'Password@showForget')->name('forget');
		Route::post('forget', 'Password@forgetPassword');
		Route::get('change/{code}', 'Password@showChange')->where(['code' => '[0-9A-Za-z]+'])->name('change');
		Route::post('change/{code}', 'Password@changePassword')->where(['code' => '[0-9A-Za-z]+']);
	});

});
/* LOGGED */
Route::group(['middleware' => 'auth'], function () {
	/* ACCOUNT */
	Route::group(['prefix' => 'account', 'as' => 'account.'], function () {
		Route::get('logout', 'Account@logoutAccount')->name('logout');
		Route::get('/', 'Account@showManage')->name('manage');
		Route::post('/', 'Account@changePassword');
		Route::get('vote', 'Account@showVote')->name('vote');
		Route::post('vote', 'Account@vote');
	});
	/* POST */
	Route::post('{id}-{title}', 'Post@postComment')->where(['id' => '[0-9]+', 'title' => '[A-Za-z0-9_-]+']);
	/* SHOP */
	Route::group(['prefix' => 'shop', 'as' => 'shop.'], function () {
		Route::get('/', 'Shop@showAll')->name('all');
		Route::get('{id}-{name}', 'Shop@showObject')->where(['id' => '[0-9]+', 'name' => '[A-Za-z0-9_-]+'])->name('object');
		Route::post('{id}-{name}', 'Shop@buyObject')->where(['id' => '[0-9]+', 'name' => '[A-Za-z0-9_-]+']);
	});
	/* EXCHANGE */
	Route::group(['prefix' => 'exchange', 'as' => 'exchange.'], function () {
		Route::get('kamas', 'Exchange@showKamas')->name('kamas');
		Route::get('ogrines', 'Exchange@showOgrines')->name('ogrines');
	});
	
});