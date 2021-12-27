<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Project;
use DateTime;

class userControl extends Controller
{
    public function userproject()
    {
        

        $proj = project::all();
        return view ("user.ownproject",compact("proj"));
        //$x=DB::table('users')
        //->join('projects','users.id', "=", "projects.leaderId")->get();
        //return view ("user.ownproject",['x'=>$x]);

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
        $user=User::all();
        $x=DB::table('users')
        ->join('projects','users.id', "=", "projects.leaderId")->get();
        return view('user.updateownproject',['data'=>$data, 'user'=>$user,'x'=>$x]);
    }

    function update(Request $req)
    {
        $data=Project::find($req->projectId);

        
        echo $data->projectMembers=implode(',',(array)$req->projectMembers); 
        $data->projectName = $req->projectName;
        $data->projectCategory = $req->projectCategory;

        $data->startDate = $req->startDate;
        $data->endDate = $req->endDate;
        $sdate = new Datetime($req ->startDate);
        $edate = new Datetime($req ->endDate);
        $interval = $sdate ->diff($edate);
        $data->projectDuration= $interval ->format('%m');
       
        $data->projectCost = $req->projectCost;
        $data->projectClient = $req->projectClient;
        $data->projectProgress = $req->projectProgress;
        $data->projectStatus = $req->projectStatus;
        

        $data->save();
        return redirect('ownproject');
    }
    function showDetail($id)
    {
        $x=user::all();
        //$x=DB::table('users')
        //->join('projects','users.id', "=", "projects.leaderId")->get();
        $disp=project::find($id);
        
        $startdate = $disp->startDate;
        $enddate = $disp->endDate;
        $sdate = new Datetime($startdate);
        $edate = new Datetime($enddate);
        $interval = $sdate ->diff($edate);
        $duration= $interval ->format('%y year,%m month');

        return view('user.viewdetails',['disp'=>$disp, 'x'=>$x,'duration'=>$duration]);



    }
}
