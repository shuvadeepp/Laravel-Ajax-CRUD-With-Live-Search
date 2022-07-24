<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\stuDetailsModel;
use DB;

class AjaxController extends appController
{
    public function studentData () {
       
        $requestData = request()->all();
        $key = $requestData['key'];
        // echo '<pre>';print_r($key);exit;  

        /* VIEW QUERY AND LIVE SEARCH */
        $query = DB::table("project_lvl_ajaxcrud.student_details")
            ->where(["deletedflag" => 0])
            ->where("vch_firstname", "like", '%'.$key.'%')
            ->orWhere("vch_addrs", "like",'%'.$key.'%')
            ->get();

        // echo '<pre>';print_r($query);exit;
        return json_encode(array('status' => '200', 'message' => $query));
    }
}
