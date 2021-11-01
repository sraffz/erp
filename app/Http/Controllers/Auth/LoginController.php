<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Auth;
use Session;

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

    public function login(Request $request)
    {
        //validate the form data
        // $this-> validate($request, [
        //     // 'ic' => 'required|Ic',
        //     // 'password' => 'required|min:6'
        // ]);

        // attempt to log the user in
        if(Auth::guard('web')->attempt(['kad_pengenalan' => $request->ic,'password' => $request->password], $request->remember)){
            // if success, then redirect to their intended location
            return redirect()->intended(route('home'));
        }
        //if unsuccessful, the reidirect back to the login with the form data
        Session::flash('message', 'No KP atau kata laluan salah.');
        return redirect()->back()->withInput($request->only('ic', 'remember'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
