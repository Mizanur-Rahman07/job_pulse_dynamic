<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function addPersonalInfo(){
        return view('admin.candidates.add_personal_info');
    }





    public function addCandidateEducation() {
        return view('admin.candidates.candidate_education');
    }
}



