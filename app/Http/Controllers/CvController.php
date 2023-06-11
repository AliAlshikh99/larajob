<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'email'=>'required|email',
            'phone'=>'required|max:10',
            'linkedin_profile'=>'required|url',
            'github_url'=>'required|url',
            'cv'=>'required|file|max:2048',
        ]);
    $cv=$request->file('cv');
    $cv_name=$cv->getClientOriginalName();
    $f_name=date('Y-m-d').".".$cv_name;
    $path=$cv->storeAs('cvs',$f_name);
        $cv=cv::create([
           'job_id'=>$request->job_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'linkedin_profile'=>$request->linkedin_profile,
            'github_url'=>$request->github_url,
            'cv'=>$path,
        
            
        ]);
       Alert::success('Good Luck', 'We will be in touch within a week');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cv $cv)
    {
        //
    }
}
