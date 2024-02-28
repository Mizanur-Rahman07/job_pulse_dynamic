<?php

namespace App\Http\Controllers;

use App\Models\CandidateEducation;
use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use App\Models\Candidates;

class CandidatesController extends Controller
{
    public function addPersonalInfo()
    {
        return view('admin.candidates.add_personal_info');
    }
    public function savePersonalInfo(Request $request)
    {
        // return $request;
        $candidate = new PersonalInformation();
        $candidate->candidate_first_name = $request->candidate_first_name;
        $candidate->candidate_last_name = $request->candidate_last_name;
        $candidate->father_name = $request->father_name;
        $candidate->mother_name = $request->mother_name;
        $candidate->date_of_birth = $request->date_of_birth;
        $candidate->gender = $request->gender;
        $candidate->religion = $request->religion;
        $candidate->marital_status = $request->marital_status;
        $candidate->national_id = $request->national_id;
        $candidate->height = $request->height;
        $candidate->weight = $request->weight;
        $candidate->blood_group = $request->blood_group;
        $candidate->phone_no = $request->phone_no;
        $candidate->alternative_phone_no = $request->alternative_phone_no;
        $candidate->email_address = $request->email_address;
        $candidate->alternative_email = $request->alternative_email;
        $candidate->career_objective = $request->career_objective;
        $candidate->career_summary = $request->career_summary;
        $candidate->special_qualification = $request->special_qualification;
        $candidate->present_address = $request->present_address;
        $candidate->permanent_address = $request->permanent_address;
        $candidate->job_category = $request->job_category;
        $candidate->image = $this->savePersonalImage($request);
        $candidate->slug = $this->makeSlug($request);
        $candidate->save();
        return redirect('/manage-personal-info')->with('message', 'candidate Add Successfully');
    }

    private function savePersonalImage($request)
    {
        $image = $request->file('image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/PersonalInfo/';
        $imgUrl = $directory . $imageName;
        $image->move($directory, $imageName);
        return $imgUrl;
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->candidate_first_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function personalInfoStatus($id)
    {
        $candidate = PersonalInformation::find($id);
        if ($candidate->status == 1) {
            $candidate->status = 0;
            $candidate->save();
            return back();
        } else {
            $candidate->status = 1;
            $candidate->save();
            return back();
        }
    }

    public function managePersonalInfo()
    {
        return view('admin.candidates.manage_personal_info', [
            'candidates' => PersonalInformation::all()
        ]);
    }

    public function editPersonalInfo($id)
    {
        return view('admin.candidates.edit_personal_info', [
            'candidates' => PersonalInformation::find($id)
        ]);
    }


    public function updatePersonalInfo(Request $request)
    {
        $candidate = PersonalInformation::find($request->candidate_id);
        $candidate->candidate_first_name = $request->candidate_first_name;
        $candidate->candidate_last_name = $request->candidate_last_name;
        $candidate->father_name = $request->father_name;
        $candidate->mother_name = $request->mother_name;
        $candidate->date_of_birth = $request->date_of_birth;
        $candidate->gender = $request->gender;
        $candidate->religion = $request->religion;
        $candidate->marital_status = $request->marital_status;
        $candidate->national_id = $request->national_id;
        $candidate->height = $request->height;
        $candidate->weight = $request->weight;
        $candidate->blood_group = $request->blood_group;
        $candidate->phone_no = $request->phone_no;
        $candidate->alternative_phone_no = $request->alternative_phone_no;
        $candidate->email_address = $request->email_address;
        $candidate->alternative_email = $request->alternative_email;
        $candidate->career_objective = $request->career_objective;
        $candidate->career_summary = $request->career_summary;
        $candidate->special_qualification = $request->special_qualification;
        $candidate->present_address = $request->present_address;
        $candidate->permanent_address = $request->permanent_address;
        $candidate->job_category = $request->job_category;
        if ($request->file('image')) {
            if ($candidate->image) {
                unlink($candidate->image);
            }
            $candidate->image = $this->savePersonalImage($request);
        }
        $candidate->slug = $this->makeSlug($request);
        $candidate->save();
        return redirect('/manage-personal-info')->with('message', 'candidate Update Successfully');
    }


    public function deletePersonalInfo(Request $request)
    {
        $candidate = PersonalInformation::find($request->candidate_id);
        $candidate->delete();
        return back()->with('message', 'Delete success');
    }

    // -------------------------------- Candidate Education-------------------------------

    public function addCandidateEducation()
    {
        return view('admin.candidates.candidate_education');
    }


    public function saveCandidateEducation(Request $request)
    {
        // return $request;
        $education = new CandidateEducation();
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
        $education->slug = $this->makeEducationSlug($request);
        $education->save();
        return redirect('/manage-candidate-education')->with('message', 'Add Education Successfully');
    }

    private function makeEducationSlug($request)
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
        $education = CandidateEducation::find($id);
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

    public function manageCandidateEducation()
    {
        return view('admin.candidates.manage_candidate_education', [
            'educations' => CandidateEducation::all()
        ]);
    }

    public function editCandidateEducation($id)
    {
        return view('admin.educationManagement.edit_candidate_education', [
            'educations' => CandidateEducation::find($id)
        ]);
    }


    public function updateCandidateEducation(Request $request)
    {
        $education = CandidateEducation::find($request->education_id);
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


    public function deleteCandidateEducation(Request $request)
    {
        $education = CandidateEducation::find($request->education_id);
        $education->delete();
        return back()->with('message', 'Delete success');
    }


}