<?php

namespace App\Http\Controllers;
use App\Applicant;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = 'Applicants data';
        $applicants= new Applicant();
        $render=[];
        $applicants= $applicants->paginate(10);
        $applicants= $applicants->appends($render);
        $data['applicants'] = $applicants;
        return view('applicant.index',$data);
    }
    public function show($id)
    {
       
    }

}
