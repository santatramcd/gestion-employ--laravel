<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployerController extends Controller
{
    //
    public function index(){
        return view
('employers.index');    
}

    public function create(){
        return view
('employers.create');   
}
public function edit(Employe $employer){
    return view
('employers.edit' ,compact('employer'));    
}
}
