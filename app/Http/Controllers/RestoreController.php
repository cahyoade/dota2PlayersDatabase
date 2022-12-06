<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestoreController extends Controller
{
    public function index(){
        $players = DB::select('select * from player where isDeleted = 1');
        $teams = DB::select('select * from team where isDeleted = 1');
        $countries = DB::select('select * from country where isDeleted = 1');

        return view('restore')->with('playersData', $players)->with('teamsData', $teams)->with('countriesData', $countries);
    }

    public function restorePlayer($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update player set isDeleted = 0 WHERE id = :id', ['id' => $id]);


        return redirect()->route('restore')->with('success', 'player with id: '. $id . ' deleted');
    }

    public function restoreTeam($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update team set isDeleted = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('restore')->with('success', 'team with id: '. $id . ' deleted');
    }

    public function restoreCountry($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('update country set isDeleted = 0 WHERE id = :id', ['id' => $id]);

        return redirect()->route('restore')->with('success', 'country with id: '. $id . ' deleted');
    }

    public function deletePermanentPlayer($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('DELETE FROM player WHERE id = :id', ['id' => $id]);

        return redirect()->route('restore')->with('success', 'player with id: '. $id . ' deleted');
    }

    public function deletePermananentTeam($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('DELETE FROM team WHERE id = :id', ['id' => $id]);

        return redirect()->route('restore')->with('success', 'team with id: '. $id . ' deleted');
    }

    public function deletePermanentCountry($id) {
        // Menggunakan Query Builder Laravel dan Named Bindings untuk valuesnya
        DB::delete('DELETE FROM country WHERE id = :id', ['id' => $id]);

        return redirect()->route('restore')->with('success', 'country with id: '. $id . ' deleted');
    }
}
