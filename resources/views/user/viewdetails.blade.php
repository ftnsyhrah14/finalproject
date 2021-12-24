<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UNITEN R&D</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset ('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/URND.png" />
  @include("user.usercss")
  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 140%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #000000;
}

.tab{
    margin-left:auto;
    margin-right:auto;
    margin-top:auto;
}

h3{
  text-align:center;
  margin-buttom: 10px;
}

.back {
    margin-top:20px;
  display:block;
}
</style>
  </head>
  <body>
  <div class="container-scroller">
  @include("user.usernavbar") 
  <div class="tab">
      <h3>Project Details</h3>
  <table>
      <tr>
          <td>Project Name :</td>
          <td>{{$disp->projectName}}</td>
      </tr>
      <tr>
          <td>Project Category :</td>
          <td>{{$disp->projectCategory}}</td>
      </tr>
      <tr>
          <td>Project Members :</td>
          <td>
            @foreach($x as $data)

            @foreach(explode(',',$disp->projectMembers) as $name)

            @if ($name==$data->id)

            <ul style="list-style-type:square">
                <li>{{$data->name}}</li>
            </ul>
            @endif

            @endforeach

            @endforeach

          </td>
      </tr>
      <tr>
          <td>Start Date :</td>
          <td>{{$disp->startDate}}</td>
      </tr>
      <tr>
          <td>End Date :</td>
          <td>{{$disp->endDate}}</td>
      </tr>
      <tr>
          <td>Project Duration :</td>
          <td>{{$disp->projectDuration}} month</td>
      </tr>
      <tr>
          <td>Project Cost :</td>
          <td>RM {{$disp->projectCost}}</td>
      </tr>
      <tr>
          <td>Project Progress :</td>
          <td>{{$disp->projectProgress}}</td>
      </tr>
      <tr>
          <td>Project Status :</td>
          <td>{{$disp->projectStatus}}</td>
      </tr>
  </table> 
</div>  
  </div>
  @include("user.userscript") 
  </body>
</html>
