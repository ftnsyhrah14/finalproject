

<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top:30%;
  margin-left: auto;
  margin-right: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #000000;
}

.t{
  margin-top:5%;
  text-align:center;
}

h1{
  text-align:center;
}
</style>
  @include("admin.admincss") 
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.adminnavbar") 
  <span class="t">
  <h1>List of UNITEN staff</h1>
</span>
  <div class="tab">
        <table>
            <tr align="center">
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="0")
                <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                @else
                <td><a >Not Allowed</a></td>

                @endif

            </tr>
            @endforeach
</table>
  </div>
</div>

  @include("admin.adminscript") 

 
  </body>
</html>
