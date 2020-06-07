<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Project;
use App\Proposal;
use App\Donate;
use App\Plan;
class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $proposals = Proposal::all();
        $plans = Plan::all();
        return view('dashboard', compact('proposals', 'plans'));
    }

     public function project(Request $request)
    {
        $project = Project::all();
        return view('admin.projects', compact('project'));
    }

    public function new_proj(Request $request)
    {
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'PuzzlePiece2.jpg';
        }
        $project = new Project;
        $project->name = $request->name;
        $project->status = $request->status;
        $project->image = $fileNameToStore;
        $project->desc = $request->desc;
        $project->save();

        session()->flash('success', 'project added successful');
        return redirect()->back();
    }

    public function edit(Request $request){
        $edit = Project::where('id', $request->id)->first();

        return response()->json(['edit'=>$edit]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->id;
        // dd($id);
        $update = Project::find($id);
        // dd($update);
        if ($request->hasFile('image')) {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }
        $update->name = $request->editname;
        $update->status = $request->editstatus;
        if ($request->hasFile('image')) {
            $update->image = $fileNameToStore;
        }

        $update->save();

        session()->flash("success", "project updated successful");
        return redirect()->back();
    }

    public function delete(Request $request, $id)
    {
        $cat = Project::find($id);
        $cat->delete($id);
        return response()->json(['status'=>1]);
    }


    public function proposal(Request $request)
    {
        $proposal = new Proposal();
        $proposal->name = $request->name;
        $proposal->org = $request->name_org;
        $proposal->adress = $request->p_adress;
        $proposal->telephone = $request->t_no;
        $proposal->mobile = $request->m_no;
        $proposal->city = $request->town;
        $proposal->country = $request->country;
        $proposal->email = $request->email;
        $proposal->message = $request->message;
        $proposal->save();
        session()->flash("success", "dear ".$request->name." we have received your proposal, we will get back as soon as possible");
        return redirect()->back();
    }

    public function plans(Request $request)
    {
        $plans = Donate::all();
        return view('admin.plans', compact('plans'));
    }
    public function new_plan(Request $request)
    {
        $plan = new Donate();
        $plan->title = $request->name;
        $plan->amount = $request->amount;
        $plan->save();
        session()->flash("success", "plan created successfully");
        return redirect()->back();
    }

    public function edit_plan(Request $request)
    {
        $edit = Donate::where('id', $request->id)->first();

        return response()->json(['edit'=>$edit]);
    }

    public function update_plan(Request $request){

        $id = (int)$request->id;

        $update = Donate::where('id', $id)->update([
            'title'=>$request->editname,
            'amount'=>$request->editamount
        ]);

        session()->flash("success", "plans updated successfully");
        return redirect()->back();
    }
    public function delete_plan(Request $request, $id)
    {
        $cat = Donate::find($id);
        $cat->delete($id);
        return response()->json(['status'=>1]);
    }
}
