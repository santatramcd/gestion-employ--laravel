<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployerController extends Controller
{
    //
    public function index(){
        $employers = Employe::paginate(10);
        return view
('employers.index', compact('employers'));

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
