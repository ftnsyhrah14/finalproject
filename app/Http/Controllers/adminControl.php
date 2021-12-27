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

    public function project() //display project
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

    function showDetail($id)
    {
        $x=user::all();
        //$x=DB::table('users')
        //->join('projects','users.id', "=", "projects.leaderId")->get();
        $disp=project::find($id);
        return view('admin.viewproject',['disp'=>$disp, 'x'=>$x]);

    }

    public function shownewForm()
    {
        //$x=DB::table('users')
        //->join('projects','users.id', "=", "projects.leaderId")->get();
        $x=DB::table('users')->get();
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

    

    function update(Request $req)
    {
        $proj = Project::table('projects')->where('projectId', $id)->first();

        $proj->projectName=$req->projectName;
        $proj->projectCategory=$req->projectCategory;
        $proj->projectLeader=$req->projectLeader;

        $proj->save();

        return redirect('projects');
    }

    public function deleteproject($id) //delete user
    {
        $data=project::find($id);
        $data->delete();
        return redirect()->back();
    }

}
