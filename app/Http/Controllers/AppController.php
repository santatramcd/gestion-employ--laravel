<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depatement;
use App\Models\Employe;
use App\Models\User;

class AppController extends Controller
{
    //
    public function index(){
        $totaldepartements = Depatement::all()->count();
        $totalEmployers = Employe::all()->count();
        $totalAdministrateurs = User::all()->count();
        return view('dashboard', compact('totaldepartements','totalEmployers','totalAdministrateurs'));
    }
}
