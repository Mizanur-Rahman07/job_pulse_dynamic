<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\CompanyCircular;
use Illuminate\Http\Request;
use DB;

class CompanyCircularController extends Controller
{
    public function addCompanyCircular(){
        return view('admin.companyCircular.add_company_circular',[
            'companies' => Companies::where('status',1)->orderBy('id','desc')->get(),
        ]);
    }

    public function saveCompanyCircular(Request $request)
    {
        // return $request;
        $circular = new CompanyCircular();
        $circular->company_id = $request->company_id; 
        $circular->vacancy = $request->vacancy;
        $circular->job_location = $request->job_location;
        $circular->salary = $request->salary;
        $circular->experience = $request->experience;
        $circular->published_date = $request->published_date;
        $circular->application_deadline = $request->application_deadline;
        $circular->education_requirments = $request->education_requirments;
        $circular->responsibilities_context = $request->responsibilities_context;
        $circular->compensation_other_benefits = $request->compensation_other_benefits;
        $circular->workplace = $request->workplace;
        $circular->employment_status = $request->employment_status;
        $circular->slug = $this->makeSlug($request);
        $circular->save();
        return redirect('/manage-company-circular')->with('message', 'Company Circular Add Successfully');
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->company_id;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function companyCircularStatus($id)
    {
        $circular = CompanyCircular::find($id);
        if ($circular->status == 1) {
            $circular->status = 0;
            $circular->save();
            return back();
        } else {
            $circular->status = 1;
            $circular->save();
            return back();
        }
    }

    public function manageCompanyCircular() {
        $circular_tbl = DB::table('company_circulars')
        ->join('companies', 'company_circulars.company_id', 'companies.id')
        ->select('company_circulars.*', 'companies.company_name')
        ->get();
        return view('admin.companyCircular.manage_company_circular',[
            'circulars' => $circular_tbl
        ]);
    }

    public function editCompanyCircular($id) {
        return view('admin.companyCircular.edit_company_circular',[
            'companies' => Companies::where('status',1)->orderBy('id','desc')->get(),
            'companys' => CompanyCircular::find($id)
        ]);
    }  


    public function updateCompanyCircular(Request $request) {
        $circular = CompanyCircular::find($request->circular_id);
        $circular->company_id = $request->company_id;
        $circular->vacancy = $request->vacancy;
        $circular->job_location = $request->job_location;
        $circular->salary = $request->salary;
        $circular->experience = $request->experience;
        $circular->published_date = $request->published_date;
        $circular->application_deadline = $request->application_deadline;
        $circular->education_requirments = $request->education_requirments;
        $circular->responsibilities_context = $request->responsibilities_context;
        $circular->compensation_other_benefits = $request->compensation_other_benefits;
        $circular->workplace = $request->workplace;
        $circular->employment_status = $request->employment_status;
        $circular->slug = $this->makeSlug($request);
        $circular->save();
        return redirect('/manage-company')->with('message', 'Company Circular Update Successfully');
    }
    
    
    public function deleteCompanyCircular(Request $request)
    {
        $circular = CompanyCircular::find($request->circular_id);
        $circular->delete();
        return back()->with('message', 'Delete success');
    }
}
