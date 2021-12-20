<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Project;

class userControl extends Controller
{
    public function userproject()
    {
        //$proj=project::all();

        $proj = project::all();
        return view ("user.ownproject",compact("proj"));
        //$x=DB::table('users')
        //->join('projects','users.id', "=", "projects.leaderId")->get();
        //return view ("user.ownproject",['x'=>$x]);
        //return view('generate')->with('attendance',$attendance);
    }

    public function showForm()
    {
        $x=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view ("user.ownproject",['x'=>$x]);
    }

    public function showData($id)
    {
        $data=Project::find($id);
        $data=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view('user.updateownproject',['disp'=>$data]);
    }

    function update(Request $req)
    {
        $data=Project::find($req->projectId);

        $data->projectName = $req->projectName;
        $data->projectCategory = $req->projectCategory;
        $data->startDate = $req->startDate;
        $data->endDate = $req->endDate;
        $data->projectDuration = $req->projectDuration;
        $data->projectCost = $req->projectCost;
        $data->projectClient = $req->projectClient;
        $data->projectProgress = $req->projectProgress;
        $data->projectStatus = $req->projectStatus;

        $data->save();
        return redirect('ownproject');
    }
}
