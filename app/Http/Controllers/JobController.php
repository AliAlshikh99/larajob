<?php

namespace App\Http\Controllers;

use App\Models\cv;
use Carbon\Carbon;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jobs=Job::latest()->filter(request(['tag','search']))
        ->paginate(4);
       
     
        return view('jobs')->with('jobs',$jobs);
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('create-job');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $job=new Job();
        $job->user_id=Auth::id();
        $job->title=$request->title;
        $job->company=$request->company;
        $job->location=$request->location;
        $job->website=$request->website;
        $job->experience=$request->experience;
        $job->tags=$request->tags;
        $job->description=$request->description;
        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $logo_name=$logo->getClientOriginalName();
            $full_name=date('Y-m-d').".".$logo_name;
            $job->logo=$request->file('logo')->storeAS('logos',$full_name);
        }


        
        $job->save();
        Alert::success('Done', 'Creating Job Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $joby=Job::findOrFail($id); 
        
    
       
        return view('job',compact([
            'joby',
           
           
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    $job=Job::find($id);
        return view('edit-job',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
         $job=Job::find($id);
         $job->user_id=Auth::id();
         $job->title=$request->title;
         $job->company=$request->company;
        $job->location=$request->location;
        $job->tags=$request->tags;
        $job->website=$request->website;
        $job->experience=$request->experience;
        $job->description=$request->description;
        if($request->hasFile('logo')){

            $job->logo=$request->file('logo')->store('logos','public');
        }
        $job->save();
       
       
        Alert::success('Done', 'updating Job Successfully');
        return view('dashboard');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $job=Job::destroy($id);
        Alert::success('Done', 'Deleting Job Successfully');
        
        return view('dashboard');
    }
    public function jobs()
    {
        $jobs=Job::where('user_id',Auth::id())->get();
        $user=Auth::user();
        return view('jobs-table')->with('jobs',$jobs);
    }
}
