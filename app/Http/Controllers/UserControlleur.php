<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use App\Mail\ReservationValidated;
use Illuminate\Support\Facades\Mail;

class UserControlleur extends Controller

{
    public function authentification(Request $request){
        //verifier les informations de validation
    $credentials =   $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

       
        if (Auth::attempt($credentials) && Auth::user()->role_id === 1) {
            $request->session()->regenerate();
            return redirect()->intended('dashbord');
        }
        elseif (Auth::attempt($credentials) &&  Auth::user()->role_id === 2) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }
    return back()->with('message','identifiant incorrect');
    }
    
    public function form_register()
    {

        return view('register');
    
    }
    public function enregistrement(Request $request){
        $u=new User();
        $u->nom=$request->input('nom');
        $u->prenom=$request->input('prenom');
        $u->email=$request->input('email');
        $u->password=  hash::make($request->password);
        $u->role_id=2;
        $u->save();
                return view('login');
            }
            public function afficheLogin(Request $request)
            {
                if ($request->session()->get('user')) {
                    return view('deconnection');
                }    
               return view('login');
            }
            public function admin()
    {
        $reservations = Reservation::all();

        return view('dashbord',compact('reservations'));
    
    }
       
    public function liste()
    {
        $reservations = Reservation::all();
        return view('liste',compact('reservations'));
        }
    
    // }
    // public function logout(Request $request ){
    //     $request->session()->destroy('user');
    //     return redirect('/login')->with('status','vous venez de vous deconecter');
    // }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

    /**
     * Summary of validerReserv
     * @param mixed $id
     * @return string
     */
    public function validerReserv($id)
    {
        $resrv= Reservation::find($id);
        $resrv->etat_reservation ='Validé';
        $resrv->update();
        
    // Récupérez l'utilisateur associé à la réservation
    $user = $resrv->user;

    // Envoyez l'e-mail à l'utilisateur
    Mail::to($user->email)->send(new ReservationValidated($resrv));

    return back();
        
        }
   
}
