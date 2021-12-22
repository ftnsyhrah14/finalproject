<!DOCTYPE html>
<html lang="en">
  <head>
  <!DOCTYPE html>
<html>
  <head>
    <title>Entertainment Booking Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 32px;
      color: #fff;
      z-index: 2;
      }
      h5 {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      background:#000000;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0 #095484; 
      }
      .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/01/c43630149befa5c9559813f72e99bcb6bf149e62.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.5); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder, a {
      color: #095484;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #095484;
      color: #095484;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio, label.check {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      .checkbox-item label {
      margin: 5px 20px 10px 0;
      }
      label.radio:before, label.check:before {
      content: "";
      position: absolute;
      left: 0;
      }
      label.radio:before {
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #095484;
      }
      label.check:before {
      top: 2px;
      width: 16px;
      height: 16px;
      border-radius: 2px;
      border: 1px solid #095484;
      }
      input[type=checkbox]:checked + .check:before {
      background: #095484;
      }
      label.radio:after {
      left: 5px;
      border: 3px solid #095484;
      }
      label.check:after {
      left: 4px;
      border: 3px solid #fff;
      }
      label.radio:after, label.check:after {
      content: "";
      position: absolute;
      top: 6px;
      width: 8px;
      height: 4px;
      background: transparent;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after, input[type=checkbox]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .city-item input {
      width: calc(50% - 20px);
      }
      .city-item select {
      width: calc(50% - 8px);
      }
      }
    </style>
  </head>
  <body>
  <div class="container-scroller">
  <div class="testbox">
  <form action="/edit" method="post">
        @csrf
      <div class="banner">
        <h1>Update Project Form</h1>
      </div>
            <div class="item">
            <p>Project Name</p>
            <input type="text" name="projectName" value="{{$data->projectName}}" readonly/>
            </div>
            <div class="question">
              <p>Project Category:</p>
              <div class="question-answer">
                <input type="radio" name="projectCategory"  value="Consultancy Project" 
                {{ $data->projectCategory == 'Consultancy Project' ? 'checked' : '' }} >
                <label for="radio_1" class="radio"><span>Consultancy Project</span></label>
                <input type="radio" name="projectCategory"  value="Research Grant Project" 
                {{ $data->projectCategory == 'Research Grant Project' ? 'checked' : '' }} >
                <label for="radio_2" class="radio"><span>Research Grant Project</span></label>
              </div>
            </div>
            <div class="item">
              <p>Project Leader:</p>
              <input type="text" name="projectLeader" value="{{$data->leaderId}}" readonly/>
            </div>
            <div class="item">
              <p>Start Date:</p>
              <input type="date" name="startDate" />
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
              <p>End Date:</p>
              <input type="date" name="endDate" />
              <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="item">
              <p>Duration(in month):</p>
              <input type="text" name="projectDuration" value="{{$data->projectDuration}}"/>
            </div>
            <div class="item">
              <p>Cost(in RM):</p>
              <input type="text" name="projectCost" value="{{$data->projectCost}}"/>
            </div>
            <div class="item">
              <p>Client:</p>
              <input type="text" name="projectClient" value="{{$data->projectClient}}"/>
            </div>
            <div class="item">
                <p>Project Progress</p>
                  <?php $progress = array("Inception", "Milestone 1", "Milestone 2","Final Report","Closing");   ?>
                  <?php $options=$data->projectProgress ?>
                  <select id="projectProgress" name="projectProgress">
                  @foreach($progress as $prog)
                  <option value="{{$prog}}" {{($prog==$options)? 'selected':'' }}>{{$prog}}</option>
                  @endforeach
                  </select>
              </div>  
            <div class="item">
                <p>Project Status</p>
                  <?php $status = array("On Track", "Delayed", "Extended","Completed");   ?>
                  <?php $option=$data->projectStatus ?>
                  <select id="projectStatus" name="projectStatus">
                  @foreach($status as $stat)
                  <option value="{{$stat}}" {{($stat==$option)? 'selected':'' }}>{{$stat}}</option>
                  @endforeach
                  </select>
            </div>
            <div class="question">
            <div class="question-answer checkbox-item">
              <div>
                <p>Project Member</p>
                 @foreach($user as $d)
                @if ($d->usertype=='0')
                <input type="checkbox" id="projectMembers" name="projectMembers" value="{{$data->projectMembers}}">
                <label for="projectMembers" class="check"><span>{{$d->name}}</span></label><br/>
                @endif
                @endforeach
              </div>  
            </div>
            </div>
            <div class="btn-block">
              <button type="submit" name="projectId" value="{{$data->projectId}}" href="/">UPDATE</button>
            </div>
    </form>
</div>
</div>
  </body>
</html>