<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Project;

class adminControl extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id) //delete user
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function project()
    {
        $proj=project::all();
        return view("admin.projects",compact("proj"));
    }
    public function showAllproject()
    {
        $x=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view ("admin.projects",['x'=>$x]);
    }

    public function shownewForm()
    {
        $x=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view ("admin.formaddproject",['x'=>$x]);
    }

   
    function addproject(Request $req)
    {
        $data = new Project;

        $data->projectName = $req->projectName;
        $data->projectCategory = $req->projectCategory;
        $data->leaderId = $req->leaderId;
        $data->save();
        return redirect('projects');
    }

    function showData($id)
    {
        $data=Project::find($id);
        $x=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view('admin.updateproject',['disp'=>$data]);

    }

    function update(Request $req)
    {
        //$proj=Project::find($req->projectId);
        $proj = Project::table('projects')->where('projectId', $id)->first();

        $proj->projectName=$req->projectName;
        $proj->projectCategory=$req->projectCategory;
        $proj->projectLeader=$req->projectLeader;

        $proj->save();

        return redirect('projects');
    }


    function deleteproject($projectId)
    {
        $proj=project::find($projectId);

        $proj->delete();

        return redirect('projects');
    }
}
