<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function addCompanies(){
        return view('admin.companies.add_company');
    }

    public function saveCompanies(Request $request)
    {
        // return $request;
        $company = new Companies();
        $company->company_name = $request->company_name;
        $company->company_business = $request->company_business;
        $company->company_emp_list = $request->company_emp_list;
        $company->company_address = $request->company_address;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        $company->company_logo = $this->saveLogoImage($request);
        $company->company_web_address = $request->company_web_address;
        $company->slug = $this->makeSlug($request);
        $company->save();
        return redirect('/manage-company')->with('message', 'Company Add Successfully');
    }

    private function saveLogoImage($request){
        $image = $request->file('company_logo');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'adminAsset/images/dynamicImage/CompanyLogo/';
        $imgUrl = $directory . $imageName;
        $image->move($directory,$imageName);
        return $imgUrl;
    }

    private function makeSlug($request)
    {
        if ($request->slug) {
            $str = $request->slug;
            return preg_replace('/\s+/u', '-', trim($str));
        }
        $str = $request->company_name;
        return preg_replace('/\s+/u', '-', trim($str));
    }

    public function companiesStatus($id)
    {
        $company = Companies::find($id);
        if ($company->status == 1) {
            $company->status = 0;
            $company->save();
            return back();
        } else {
            $company->status = 1;
            $company->save();
            return back();
        }
    }

    public function manageCompanies() {
        return view('admin.companies.manage_company',[
            'companys' =>Companies::all()
        ]);
    }

    public function editCompanies($id) {
        return view('admin.companies.edit_company',[
            'companys' => Companies::find($id)
        ]);
    }  


    public function updateCompanies(Request $request) {
        $company = Companies::find($request->company_id);
        $company->company_name = $request->company_name;
        $company->company_business = $request->company_business;
        $company->company_emp_list = $request->company_emp_list;
        $company->company_address = $request->company_address;
        $company->company_phone = $request->company_phone;
        $company->company_email = $request->company_email;
        if ($request->file('company_logo')) {
            if ($company->company_logo) {
                unlink($company->company_logo);
            }
            $company->company_logo = $this->saveLogoImage($request);
        }
        $company->company_web_address = $request->company_web_address;
        $company->slug = $this->makeSlug($request);
        $company->save();
        return redirect('/manage-company')->with('message', 'Company Update Successfully');
    }
    
    
    public function deleteCompanies(Request $request)
    {
        $company = Companies::find($request->company_id);
        $company->delete();
        return back()->with('message', 'Delete success');
    }
}
