<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;

class CandidatesController extends Controller
{
    public function addPersonalInfo(){
        return view('admin.candidates.add_personal_info');
    }





}



