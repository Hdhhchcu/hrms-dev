<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Models\BackgroundCompany;
use App\Models\BackgroundEducation;
use App\Models\BackgroundReference;
use App\Models\BackgroundVerification as ModelBackgroundVerifcation;

class BackgroundVerification extends Controller
{

    ///for list page of background Verification
    public function index()
    {
        return view("backgroundverfication.backgroundverifcationform")->with("page", "BackgroundVerification Form");
    }


    // public function view(ModelsEmpoyee $id){
    //     return view("employee.employee-details")->with("page","Employee Details")->with("emp",$id);
    // }


    // ///for list-grid page of employee
    // public function grid(){
    //     return view("employee.employees-grid")->with("page","Employee List Grid");
    // }



    ///for add background verification data on server and 
    public function add(Request $request): RedirectResponse
    {
        // dd($request->agency_address);

        $path = $request->sign->store('images/sign/');

        $document = new ModelBackgroundVerifcation;

        $document->name = $request->name;
        $document->surname = $request->surname;
        $document->father_name = $request->father_name;
        $document->present_address = $request->present_address;
        $document->residance_status = $request->residence_status;
        $document->landline = $request->landline_phone;
        $document->mobile = $request->mobile_number;
        $document->city = $request->city;
        $document->state = $request->state;
        $document->landmark = $request->landmark;
        $document->postcode = $request->postcode;
        $document->police_station_name = $request->police_station;
        $document->stay_from = $request->stay_from;
        $document->stay_to = $request->stay_to;
        $document->dob = $request->dob;
        $document->aadhar = $request->aadhar;


        $document->sign_name = $request->candidate_name;
        $document->sign_image = $path ?? "sign.png";
        $document->save();

        ////create linking ID 
        $linkId = $document->id;



        //////////For Education 

        //////////looping

        $education = new BackgroundEducation;
        $education->link_id = $linkId;
        $education->name = $request->college_name;
        $education->address = $request->college_address;
        $education->stay_from = $request->date_of_entering;
        $education->stay_to = $request->date_of_leaving;
        $education->status = "pass";

        $education->save();

        ////////for Company 

        /////////////Looping

        if (count($request->company_name) > 0) {
            $j = 0;
            foreach ($request->company_name as $r) {
                $company = new BackgroundCompany;

                $company->link_id = $linkId;
                $company->employee_company = $request->company_name[$j];
                $company->employee_id = $request->emp_id[$j];
                $company->employee_from = $request->emp_from[$j];
                $company->employee_to = $request->emp_to[$j];
                $company->employee_address = $request->company_address[$j];
                $company->employee_landline = $request->employer_number[$j];
                $company->employee_city = $request->company_city[$j];
                $company->employee_state = $request->company_state[$j];
                $company->employee_country = $request->company_country[$j];
                $company->employee_postal_code = $request->company_postal_code[$j];
                $company->employee_designation = $request->job_designation[$j];
                $company->reason_for_leave = $request->leaving_reason[$j];
                $company->employee_status = $request->employment_status[$j];
                $company->outsourcing_name = $request->agency_name[$j];
                $company->outsourcing_address = $request->agency_address[$j];
                $company->outsource_landline = $request->agency_number[$j];
                $company->supervisor_name = $request->sup_name[$j];
                $company->supervisor_designation = $request->sup_desgignation[$j];
                $company->supervisor_landline = $request->sup_number[$j];
                $company->supervisor_email = $request->sup_email[$j];
                $company->hr_name = $request->hr_name[$j];
                $company->hr_designation = $request->hr_desgignation[$j];
                $company->hr_landline = $request->hr_number[$j];
                $company->hr_email = $request->hr_email[$j];

                $company->save();

                $j++;
            }
        }


        //////////For Reference 

        ///////////looping

        if (count($request->ref_name) > 0) {
            $i = 0;
            foreach ($request->ref_name as $r) {
                $reference = new BackgroundReference;

                $reference->link_id = $linkId;
                $reference->name = $request->ref_name[$i];
                $reference->mobile = $request->ref_phone_no[$i];
                $reference->reference_company = $request->ref_details[$i];
                $reference->relation = $request->ref_relation[$i];
                $reference->save();

                $i++;
            }
        }

        return redirect("https://codleo.com");
        // dd($request);
        // return redirect()->back();
    }


    ///for update page of employee
    public function update(Request $request, ModelTeam $id): RedirectResponse
    {
        $document = $id;

        $document->team_name = $request->name;
        $document->team_leader = $request->leader;
        $document->team_manager = $request->manager;
        $document->team_member = ($request->members);
        $document->save();

        return redirect()->back();
    }


    public function list(){
        $backgroundData=ModelBackgroundVerifcation::all();
        return view("backgroundverfication.list")->with("page", "BackgroundVerification Listing")->with("allbackground",$backgroundData);
    }


    public function edit(String $id){
        $backgroundData=ModelBackgroundVerifcation::with(['company'])->get();
        return view("backgroundverfication.background-details")->with("page", "BackgroundVerification Data")->with("backgrounddata",$backgroundData);
    }

    //////delete employee
    public function delete(ModelTeam $id): RedirectResponse
    {
        $id->delete();
        return redirect()->back();
    }
}
