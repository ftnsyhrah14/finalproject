
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss") 
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.adminnavbar") 


  <h1 style="center">Project List</h1></br><br>
  <div><a href="/new">New Project</a><br></div>
    <div style="position: relative; top:60px; right:=150px">
        <table bgcolor="grey" border="3px">
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
                <td><a href="{{url('/updateproject',$data->projectId)}}">Edit</a></td>
                <td><a href="{{url('/deleteproject',$data->projectId)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

  </div>
</div>
  @include("admin.adminscript") 
  </body>
</html>
