<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddController extends Controller
{
    public function index(){
        return view('add');
    }
    
    public function storePlayer(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'nationality' => 'required',
            'role' => 'required',
            'team' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO player VALUES (:id, :name, :nationality, :role, :team, 0)',
        [
            'id' => $request->id,
            'name' => $request->name,
            'nationality' => $request->nationality,
            'role' => $request->role,
            'team' => $request->team,
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Player'. $request->id .'added to database');
    }

    public function storeTeam(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'earnings' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO team VALUES (:id, :name, :location, :earnings, 0)',
        [
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
            'earnings' => $request->earnings,
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Team'. $request->id .'added to database');
    }

    public function storeCountry(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'flag' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::insert('INSERT INTO country VALUES (:id, :name, :flag, 0)',
        [
            'id' => $request->id,
            'name' => $request->name,
            'flag' => $request->flag,
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Country'. $request->name .'added to database');
    }
}
