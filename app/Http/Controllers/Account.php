<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Account as AccountManager;

class Account extends Controller
{
    /**
     * Login an user
     * Post
     *
     * @param Request $request
     * @return Response
     */
    public function loginAccount(Request $request)
    {
        $this->validate($request, [
            'login'    => 'required|alpha_num|exists:accounts,account',
            'password' => 'required|alpha_num',
        ]);

        $user = AccountManager::where('account', $request->login)
            ->where('pass', $request->password)
            ->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('account.manage');
        }

        return redirect()->back()->with(['error' => 'Nom de compte ou mot de passe incorrect.']);
    }

    /**
     * Show register form
     * Get
     *
     * @return Response
     */
    public function showRegister()
    {
        return view('account.register');
    }

    /**
     * Create a new user
     * Post
     *
     * @param Request $request
     * @return Response
     */
    public function createAccount(Request $request)
    {
        $this->validate($request, [
            'login'                => 'required|alpha_num|min:4|unique:accounts,account',
            'password'             => 'required|alpha_num|min:4',
            'pseudo'               => 'required|alpha_num|min:4|unique:accounts,pseudo',
            'email'                => 'required|email',
            'secret_question'      => 'required|string',
            'secret_answer'        => 'required|string',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        $account = new AccountManager;
        $account->account   = $request->login;
        $account->pass      = $request->password;
        $account->pseudo    = $request->pseudo;
        $account->email     = $request->email;
        $account->question  = $request->secret_question;
        $account->reponse   = $request->secret_answer;
        $account->code      = $this->_generateCode(12);
        $account->lastConnectionDate = '';
        $account->lastIP    = '';
        $account->friends   = '';
        $account->enemy     = '';
        $account->heurevote = 0;
        $account->lastConnectDay = '';
        $account->save();

        Auth::login($account);
        return redirect()->route('account.manage');
    }

    /**
     * Logout an user
     * Get
     *
     * @return Response
     */
    public function logoutAccount()
    {
        Auth::logout();
        return redirect()->route('homepage');
    }

    /**
     * Show user's basic informations
     * Get
     *
     * @return Response
     */
    public function showManage()
    {
        $players = Auth::user()->players()->orderBy('xp', 'desc')->get();
        return view('account.manage', compact('players'));
    }

    /**
     * Change user's password
     * Post
     *
     * @param Request $request
     * @return Response
     */
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password'  => 'required|alpha_num|check_password:' . Auth::user()->pass,
            'secret_answer' => 'required|string|exists:accounts,reponse,guid,' . Auth::user()->guid,
            'new_password'  => 'required|alpha_num|min:4',
            'conf_password' => 'required|alpha_num|min:4|same:new_password',
        ]);

        $account = AccountManager::find(Auth::user()->guid);
        $account->pass = $request->new_password;
        $account->save();

        return redirect()->route('account.manage')->with(['success' => 'Votre mot de passe a été modifié.']);
    }

    public function showVote()
    {
        return view('account.vote');
    }

    public function vote()
    {
        $account = AccountManager::find(Auth::user()->guid);
        $delay = (time() - $account->heurevote) / 60;

        if ($delay < 180) {
            return redirect()->back()->with(['error' => 'Vous devez encore attendre ' . round(180 - $delay) . ' minutes avant de pouvoir voter.']);
        }

        $account->votes += 1;
        $account->points += config('config.points.vote');
        $account->heurevote = time();
        $account->save();

        return redirect()->route('account.manage')->with(['success' => 'Votre vote a bien été pris en compte.']);
    }

    /**
     * Generate unique random user's code
     *
     * @param int $length
     * @return string
     */
    private function _generateCode($length = 12)
    {
        $code = str_random($length);

        while (AccountManager::where('code', $code)->count() > 0) {
            $code = str_random($length);
        }

        return $code;
    }
}
