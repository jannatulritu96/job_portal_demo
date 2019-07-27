<?php

namespace App\Http\Controllers;
use App\Applicant;
use App\Post;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $data['posts'] = Post::get();
        return view('frontend.home',$data);

    }

    public function details($id){
        $data['posts'] = Post::where('id',$id)->get();
        return view('frontend.details',$data);
    }

//     public function show($id)
//     {
//         if(auth()->applicant()){
//             $data['title'] = 'User Profile';
//             $data['applicants']= Applicant::where('id',$id)->first();
// //        dd($data);
//             return view( 'frontend.show',$data);
//         }elseif(auth()->id()==$id){
//             $data['title'] = 'User Profile';
//             $data['applicants']= Applicant::where('id',$id)->first();
//             //        dd($data);
//             return view( 'frontend.show',$data);
//         }
//         return redirect()->back();
//     }

    public function registration(){
        return view('frontend.registration');
    }
    public function register(Request $request){
    //    dd($request->all());
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email' => 'required',
            'contact_number'=>'required',
            'skills'=>'required',
            'password'=>'required|min:6',
            'image'=>'required|mimes:png,jpg,jpeg',
            
        ]);


        $applicant = new Applicant();
        $applicant->first_name = $request->first_name;
        $applicant->last_name = $request->last_name;
        $applicant->email= $request->email;
        $applicant->contact_number= $request->contact_number;
        $applicant->skills= $request->skills;
        $applicant->password= bcrypt($request->password);

        if($request->hasFile('image'))
        {
        $image=$request->file('image');
        $image ->move('post/images',$image->getClientOriginalName());
        $applicant->image='post/images/'.$image->getClientOriginalName();
        $applicant->save();
        }
        // if($request->hasFile('resume'))
        // {
        // $resume=$request->file('resume');
        // $resume ->move('post/resume',$resume->getClientOriginalName());
        // $applicant->resume='post/resume/'.$resume->getClientOriginalName();
        // $applicant->save();
        // }
        
        $applicant->save();
        session()->flash('success','Successfully registered');
        return redirect()->route('home');

    }
    public function log()
    {
        return view('frontend.login');
    }
    public function userlog(Request $request)
    {
       // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
//        if(Auth::check())
        if(Auth::attempt(['email' => $request->email,'password'=>$request->password]))
        {
            return redirect()->route('login.store');
        }else{
            session()->flash('error','Email or Password invalid');
        }
//        return redirect('login.store');
        return redirect()->intended('/');
    }
    
    public function application(){
        $data['applicants'] = Applicant::get();
        return view('frontend.application',$data);
    }
    public function apply_form(Request $request){
        //    dd($request->all());
            $request->validate([
                
                'resume'=>'required|mimes:pdf,doc,docx',
                
            ]);
    
    
            $applicant = new Applicant();
           
            if($request->hasFile('resume'))
            {
            $resume=$request->file('resume');
            $resume ->move('post/resume',$resume->getClientOriginalName());
            $applicant->resume='post/resume/'.$resume->getClientOriginalName();
            // $applicant->save();
            }
            
            session()->flash('success','Successfully registered');
            return redirect()->route('home');
    
        }
}
