<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Account as AccountManager;

class Password extends Controller
{
	public function showForget()
	{
		return view('password.forget');
	}

	public function forgetPassword(Request $request)
	{
		$this->validate($request, [
			'login' 				=> 'required|alpha_num|exists:accounts,account',
			'g-recaptcha-response' 	=> 'required|recaptcha',
		]);

		$account = AccountManager::where('account', $request->login)->firstOrFail();

		if (!$account->code || empty($account->code))
		{
			$account->code = $this->_generateCode(12);
			$account->save();
		}

		return redirect()->route('password.change', [$account->code]);
	}

	public function showChange($code)
	{
		$account = AccountManager::where('code', $code)->firstOrFail();

		return view('password.change', compact('account'));
	}

	public function changePassword(Request $request, $code)
	{
		$account = AccountManager::where('code', $code)->firstOrFail();

		$this->validate($request, [
			'secret_answer' => 'required|string|exists:accounts,reponse,guid,'.$account->guid,
			'new_password' 	=> 'required|alpha_num|min:4',
			'conf_password' => 'required|alpha_num|min:4|same:new_password',
		]);

		$account->pass = $request->new_password;
		$account->save();

		return redirect()->route('homepage')->with(['success' => 'La Contraseña ha Sido Cambiada']);
	}

	/**
	 * Generate unique random user's code
	 *
	 * @param int $length
	 * @return string
	 */
	private function _generateCode($length=12)
	{
		$code = str_random($length);

		while (AccountManager::where('code', $code)->count() > 0)
		{
			$code = str_random($length);
		}

		return $code;
	}
}