<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DB;
use Socialite;
use App\User;
use App\UserSocialAccount;
use App\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    public function logout ( Request $request ) {
        auth()->logout();   //  cerramos la sesión
        session()->flush(); //  forzamos el borrado de la sesión
        return redirect('login');
    }

    public function redirectToProvider ( string $driver ) {
        return Socialite::driver($driver)->redirect();
    }

    public function handleProviderCallback ( string $driver ) {

        if ( !request()->has('code') ) {

            session()->flash('message', [
                'class' =>  'danger',
                'message', __('Inicio de sesión cancelado')
            ]);

            return redirect('login');
        }


        $socialUser = Socialite::driver($driver)->user();
        // dd( $socialUser );
        //  inicializamos el usuario como null
        $user = null;
        $success = true;
        $email = $socialUser->email;
        $check = User::whereEmail($email)->first(); //  comprobamos el usuario que tiene el email

        // dd( $check );

        //  verificamos 
        if ( $check ) {
            $user = $check; //  inicializamos user con el registro usuario que conseguimos por el email
            // dd('todo correcto');
        } else {

            DB::beginTransaction();

            try {
                //  creamos el usuario
                $user = User::create([
                    'name'  =>  $socialUser->name,
                    'email' =>  $email
                ]);

                //  creamos el usuario con redes sociales
                UserSocialAccount::create([
                    'user_id'       =>  $user->id,
                    'provider'      =>  $driver,
                    'provider_uid'  =>  $socialUser->id
                ]);

                //  registramos el consumidor
                Customer::create([
                    'user_id'   =>  $user->id
                ]);


            } catch (\Exception $ex) {
                $success = $ex->getMessage();
                DB::rollback();
            }

            
        }

        //  verificamos si todo ha ido bien
        if ( $success === true ) {
            DB::commit();   //  realizamos la transaccion en base de datos
            auth()->loginUsingId($user->id);
            return redirect( route('home') );
        }

        session()->flash('message', [
            'class'     =>  'danger',
            'message'   =>  $success  
        ]);

        return redirect('login');
    }
}
