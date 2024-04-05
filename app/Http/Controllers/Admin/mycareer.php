<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Stream;
use App\Models\Mode;
use App\Models\Future;
use App\Models\Ability;
use App\Models\Interest;
use App\Models\Knowledge;
use App\Models\skill;
use App\Models\Workactivity;
use App\Models\Workcontext;
use App\Models\Worktypes;
use App\Models\Workvalue;
class mycareer extends Controller
{
    //
    public function addnew(){
        $educations = Education::all();
        $streams = Stream::all();
        $futures = Future::all();
        $modes = Mode::all();
        $abilities = Ability::all();
        return view ('admin\add-new',[
            'educations' => $educations,
            'streams' => $streams,
            'futures' => $futures,
            'modes' => $modes,
            'abilities' => $abilities,
        ]);
    }


    public function education(){
        $educations = Education::all();
        return view('admin\educational-level',compact('educations'));
        // return view('admin\educational-level');
    }
    public function insert_edu(Request $request){
        $savedata = new Education();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\educational-level')->with('statusupdate', "Educational Level Added successfully");


    }
    public function stream(){
        $streams = Stream::all();
        return view('admin\stream',compact('streams'));
        // return view('admin\stream');
    }
    public function insert_stream(Request $request){
        $savedata = new Stream();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\stream')->with('statusupdate', "Stream Added successfully");

    }

    public function modeeducation(){
        $modes = Mode::all();
        return view('admin\mode-of-education',compact('modes'));
    }
    public function insert_mode(Request $request){
        $savedata = new Mode();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\mode-of-education')->with('statusupdate', "Mode of education added successfully");
    }


    public function future(){
        $futures = Future::all();
        return view('admin\future-trend',compact('futures'));
    }
    public function insert_future(Request $request){
        $savedata = new Future();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\future-trend')->with('statusupdate', "Future trend added successfully");
    }


    public function abilities(){
        $abilities = Ability::all();
        return view('admin\abilities',compact('abilities'));
    }
    public function insert_abilitues(Request $request){
        $savedata = new Ability();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\abilities')->with('statusupdate', "Ability added successfully");
    }

    public function interest(){
        $interests = Interest::all();
        return view('admin\interest',compact('interests'));

    }
    public function insert_interest(Request $request){
        $savedata = new Interest();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\interest')->with('statusupdate', "Interest added successfully");
    }


    public function knowledge(){
        $knowledges = Knowledge::all();
        return view('admin\knowledge',compact('knowledges'));

    }
    public function insert_knowledge(Request $request){
        $savedata = new Knowledge();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\knowledge')->with('statusupdate', "Knowledge added successfully");

    }


    public function skills(){
        $skills = skill::all();
        return view('admin\skills',compact('skills'));
    }
    public function insert_skills(Request $request){
        $savedata = new skill();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\skills')->with('statusupdate', "skills added successfully");

    }

    public function workactivities(){
        $workactivities = Workactivity::all();
        return view('admin\work-activities',compact('workactivities'));
    }
    public function insert_workactivity(Request $request){
        $savedata = new Workactivity();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\work-activities')->with('statusupdate', "Workactivity added successfully");

    }

    public function workcontext(){
        $workcontexts = Workcontext::all();
        return view('admin\work-context',compact('workcontexts'));
    }
   public function insert_workcontext(Request $request){
        $savedata = new Workcontext();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\work-context')->with('statusupdate', "Workactivity added successfully");

   }

    public function worktypes(){
        $worktypes = Worktypes::all();
        return view('admin\work-types',compact('worktypes'));
    }
    public function insert_worktypes(Request $request){
        $savedata = new Worktypes();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\work-types')->with('statusupdate', "Worktypes added successfully");

    }

    public function workvalue(){
        $workvalues = Workvalue::all();
        return view('admin\workvalue',compact('workvalues'));
    }
    public function insert_workvalue(Request $request){
        $savedata = new Workvalue();
        $savedata->name = $request->name;
        $savedata->slug = Str::slug($request->slug);
        $savedata->description = $request->description;
        $savedata->save();

        return redirect('admin\workvalue')->with('statusupdate', "Workvalue added successfully");

    }


}
