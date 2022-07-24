<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\stuDetailsModel;
use DB;

class StuDetailsController extends appController
{

    public function stuData () {
        // echo 111;  
        // return view('application.studenFrm');
        
            if(!empty(request()->all()) && request()->isMethod('post')) {
                $requestData = request()->all();
                // echo '<pre>';print_r($requestData);exit;
                $validator   = \Validator::make($requestData, 
                [
                    'stuFirstName'      => 'bail|required',
                    'stuLastName'       => 'bail|required',
                    'mob'               => 'bail|required',
                    'address'           => 'bail|required'
                ],
                [
                    'stuFirstName'      => 'Please enter first name',
                    'stuLastName'       => 'Please enter last name',
                    'mob'               => 'Please enter mobile number',
                    'address'           => 'Please enter address',
                ]);
            
            if($validator->fails()) {
                // return redirect('studentFrm')->withErrors($validator)->withInput();
            } else {
                $stuFrm = new stuDetailsModel;
                
                $stuFrm -> vch_FirstName        = $requestData['stuFirstName'];
                $stuFrm -> vch_LastName         = $requestData['stuLastName'];
                $stuFrm -> vch_Mob              = $requestData['mob'];
                $stuFrm -> vch_addrs            = $requestData['address'];
                $stuFrm -> dtmCreatedOn         = date("Y-m-d H:i:s");

                $stuFrm -> save();
            }
        }
        // return view('application.studentFrm');

        /* $query = DB::table("project_lvl_ajaxcrud.student_details")->get();
        $this->viewVars['arrTakeActionData'] = $query; */
        // echo '<pre>';print_r($this->viewVars['arrTakeActionData']);exit;
        return view('application.studentFrm');
    }

    public function takeActionData () {
        
    }
}
