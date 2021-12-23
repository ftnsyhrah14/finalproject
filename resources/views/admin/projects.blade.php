
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss") 
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 140%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #000000;
}
.tab{
    margin-top:auto;
}

h1{
  text-align:center;
}
</style>
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.adminnavbar") 

  <div class="tab">
  <h1>Project List</h1></br>
  <div><a href="/new">New Project</a><br></div>
        <table>
            <tr align="center">
                <th style="padding: 30px">Project Name</th>
                <th style="padding: 30px">Project Category</th>
                <th style="padding: 30px">Project Leader</th>
                <th colspan="2" style="padding: 30px">Action</th>
            </tr>
            @foreach($x as $data)
            <tr align="center">
                <td>{{$data->projectName}}</td>
                <td>{{$data->projectCategory}}</td>
                <td>
                  @if($data->leaderId==$data->id)

                  {{$data->name}}

                  @endif
                </td>
                <td><a href="{{url('/viewproject',$data->projectId)}}">View</a></td>
                <td><a href="{{url('/delproject',$data->projectId)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

  </div>
</div>
  @include("admin.adminscript") 
  </body>
</html>
