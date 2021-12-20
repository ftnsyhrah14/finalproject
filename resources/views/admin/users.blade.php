

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss") 
  </head>
  <body>
  <div class="container-scroller">
  @include("admin.adminnavbar") 
  <h1 style="align:center">List of UNITEN staff</h1>
    <div style="position: relative; top:60px; right:=150px">
        <table bgcolor="grey" border="3px">
            <tr align="center">
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Action</th>
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
