<?php

namespace App\Http\Controllers;

use \DB;
use App\Models\Stage;

class DashboardController extends Controller
{
    public function index(){
        
        $division = Stage::select('Division', DB::raw('COUNT(*) as count'))
        ->groupBy('Division')
        ->pluck('count', 'Division');
      
        return view('pages.index',compact('division'));
    }
    public function show($code)
    {
        $stagiaires = Stage::query()
        ->join('stagiaires', 'stages.Cin', '=', 'stagiaires.Cin')
        ->select('stages.Division', 'stagiaires.*')
        ->where('Division',$code)
        ->get();
        return view('pages.stagiaires.index', compact('stagiaires'));
    }
}
