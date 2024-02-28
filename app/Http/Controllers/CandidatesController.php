<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidates;

class CandidatesController extends Controller
{
    public function addPersonalInfo(){
        return view('admin.candidates.add_personal_info');
    }





    public function addCandidateEducation() {
        return view('admin.candidates.candidate_education');
    }


    public function saveCandidateEducation(Request $request)
    {
        // return $request;
        $education = new Candidates();
        $education->level_of_education = $request->level_of_education;
        $education->degree_title = $request->degree_title;
        $education->group = $request->group;
        $education->institute_name = $request->institute_name;
        $education->result = $request->result;
        $education->cgpa = $request->cgpa;
        $education->scale = $request->scale;
        $education->year_of_passing = $request->year_of_passing;
        $education->duration_year = $request->duration_year;
        $education->board = $request->board;
        $education->slug = $this->makeSlug($request);
        $education->save();
        return redirect('/manage-candidate-education')->with('message', 'Add Education Successfully');
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->degree_title;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function educationStatus($id)
    {
        $education = Candidates::find($id);
        if ($education->status == 1) {
            $education->status = 0;
            $education->save();
            return back();
        } else {
            $education->status = 1;
            $education->save();
            return back();
        }
    }

    public function manageCandidateEducation() {
        return view('admin.candidates.manage_candidate_education',[
            'educations' =>Candidates::all()
        ]);
    }

    public function editCandidateEducation($id) {
        return view('admin.educationManagement.edit_candidate_education',[
            'educations' => Candidates::find($id)
        ]);
    }  


    public function updateCandidateEducation(Request $request) {
        $education = Candidates::find($request->education_id);
        $education->level_of_education = $request->level_of_education;
        $education->degree_title = $request->degree_title;
        $education->group = $request->group;
        $education->institute_name = $request->institute_name;
        $education->result = $request->result;
        $education->cgpa = $request->cgpa;
        $education->scale = $request->scale;
        $education->year_of_passing = $request->year_of_passing;
        $education->duration_year = $request->duration_year;
        $education->board = $request->board;
        $education->slug = $this->makeSlug($request);
        $education->save();
        return redirect('/manage-candidate-education')->with('message', 'Education Update Successfully');
    }
    
    
    public function deleteeducation(Request $request)
    {
        $education = Candidates::find($request->education_id);
        $education->delete();
        return back()->with('message', 'Delete success');
    }
}



