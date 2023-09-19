<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Site;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create()
    {
        //verifier si la personne est connecter si non? elle est rediriger vers login
        if (!Auth::check()) {
            return redirect()->intended('login')->with('message','veuillez tout d\'abord vous connecter avant de reserver');
        }
        $users = User::all();
        $sites = Site::all();
        return view('reservation',compact('users','sites'));
    }

    public function store(Request $request)
    {
       $request->validate([
            'site_id' => 'required',
            'date' => 'required|date',
            'heure' => 'required',
            'nombre_personnes' => 'required|integer',
        ]);

        Reservation::create([
            'site_id' => $request->site_id,
            'date' => $request->date,
            'heure' => $request->heure,
            'nombre_personnes' => $request->nombre_personnes,
            'user_id' =>Auth::id(),
           
        ]);

        return redirect()->route('index')->with('success', 'Reservation created successfully.');
    }
}
