<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.usercss") 
  </head>
  <body>
  <div class="container-scroller">
  @include("user.usernavbar") 


  <h1 style="center">Project List</h1></br><br>
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
                <td><a href="{{url('/updownproject',$data->projectId)}}">Edit</a></td>
                <td><a href="{{url('/delownproject',$data->projectId)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

  </div>
</div>
  @include("user.userscript") 
  </body>
</html>
