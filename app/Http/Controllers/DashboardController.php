<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//'select p.id as id, p.name as name, c.name as nationality, p.role as role, t.name as team, c.flag from player as p inner join country as c on p.nationality = c.id inner join team as t on p.team = t.id'

class DashboardController extends Controller
{
    public function index(){
        $players = DB::select('select * from player where isDeleted = 0');
        $teams = DB::select('select * from team where isDeleted = 0');
        $countries = DB::select('select * from country where isDeleted = 0');

        return view('dashboard')->with('playersData', $players)->with('teamsData', $teams)->with('countriesData', $countries);
    }

    public function players(){
        $players = DB::select('select p.id as id, p.name as name, c.name as nationality, p.role as role, t.name as team, c.flag from player as p inner join country as c on p.nationality = c.id inner join team as t on p.team = t.id where p.isDeleted = 0');

        return view('players')->with('playersData', $players);
    }

    public function deletePlayer($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update player set isDeleted = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('dashboard')->with('success', 'player with id: '. $id . ' deleted');
    }

    public function deleteTeam($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update team set isDeleted = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('dashboard')->with('success', 'team with id: '. $id . ' deleted');
    }

    public function deleteCountry($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update country set isDeleted = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('dashboard')->with('success', 'country with id: '. $id . ' deleted');
    }
}
