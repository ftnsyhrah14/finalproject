<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.usercss") 
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 110%;
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
    margin:auto;
}

h1{
  text-align:center;
}
</style>
  </head>
  <body>
  <div class="container-scroller">
  @include("user.usernavbar") 
  <div class="tab">
  <h1>Project List</h1></br>
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
                <td><a href="{{url('/updownproject',$data->projectId)}}">Edit</a></td>
            </tr>
            @endforeach
        </table>

  </div>
</div>
  @include("user.userscript") 
  </body>
</html>
