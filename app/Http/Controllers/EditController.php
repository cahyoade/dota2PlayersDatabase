<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    public function player($id){
        $player = DB::select("select * from player where id = :id", ['id' => $id]);
        return view('editPlayer')->with('player', $player);
    }

    public function team($id){
        $team = DB::select("select * from team where id = :id", ['id' => $id]);
        return view('editTeam')->with('team', $team);
    }

    public function country($id){
        $country = DB::select("select * from country where id = :id", ['id' => $id]);
        return view('editCountry')->with('country', $country);
    }

    public function updatePlayer($id, Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'nationality' => 'required',
            'role' => 'required',
            'team' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('UPDATE player SET id = :id, name = :name, nationality = :nationality, role = :role, team = :team WHERE id = :reqID',
        [
            'id' => $request->id,
            'name' => $request->name,
            'nationality' => $request->nationality,
            'role' => $request->role,
            'team' => $request->team,
            'reqID' => $id
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Player '. $request->id .' edited');
    }

    public function updateTeam($id, Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'location' => 'required',
            'earnings' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('update team set id = :id, name = :name, location = :location, earnings = :earnings where id = :reqID',
        [
            'id' => $request->id,
            'name' => $request->name,
            'location' => $request->location,
            'earnings' => $request->earnings,
            'reqID' => $id
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Team '. $request->id .' edited');
    }

    public function updateCountry($id, Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'flag' => 'required',
        ]);

        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::update('update country set id = :id, name = :name, flag = :flag where id = :reqID',
        [
            'id' => $request->id,
            'name' => $request->name,
            'flag' => $request->flag,
            'reqID' => $id
        ]
        );

        return redirect()->route('dashboard')->with('success', 'Country '. $request->name .' edited');
    }

}
