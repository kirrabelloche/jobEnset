<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Envoyez la réponse après l'authentification de l'utilisateur.
     *
     * @param  Request  $request
     * @return Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);
        if($request->ajax()){
            // If request from AJAX
            return [
                'success' => true,
                'redirect' => $this->redirectPath() ?: route('home'),
            ];
        } else {
            // Normal POST do redirect
            return $this->authenticated($request, $this->guard()->user())
                ?: redirect()->intended($this->redirectPath());
        }
    }


    /**
     * Gérer une demande de connexion à l'application
     * @param Request $request
     * @return RedirectResponse|Response
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        //Si la classe utilise le trait ThrottlesLogins, nous pouvons automatiquement limiter
        //les tentatives de connexion pour cette application.
        //Nous allons saisir ceci par le nom d'utilisateur et l'adresse IP du client effectuant ces requêtes dans cette application.

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }


        $user = User::where('email', '=', $request->email)
            ->get();

        if ($user->isEmpty()) {
            // L'utilisateur n'existe pas
            if($request->ajax()){
                // If request from AJAX
                return [
                    'success' => false,
                    'message' => trans('Your account does not exist'),
                ];
            } else {
                // Normal POST do redirect
            return redirect("/login")
                ->withInput($request->only('email', 'remember'))
                ->withWarning(trans('Your account does not exist'));
            }
        }

        $user = User::where('email', '=', $request->email)
            ->where('active', '=', 1)
            ->get();

        if ($user->isEmpty()) {
            //  L'utilisateur existe mais son compte est innactif
            if($request->ajax()){
                // If request from AJAX
                return [
                    'success' => false,
                    'message' => trans('Your account has been deactivated'),
                ];
            } else {
                // Normal POST do redirect
                return redirect("/login")
                    ->withInput($request->only('email', 'remember'))
                    ->withWarning(trans('Your account has been deactivated'));
            }
        }

        //Essaie de se connecter avec le mot de passe
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // Si la tentative de connexion a échoué, nous augmenterons le nombre de tentatives
        // pour vous connecter et rediriger l'utilisateur vers le formulaire de connexion. Bien sûr, quand cela
        // l'utilisateur dépasse son nombre maximum de tentatives, il sera bloqué
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }



}
