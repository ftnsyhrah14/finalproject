<!DOCTYPE html>
<html lang="en">
  <head>
</head>
<body>
    
<h1> Update Project</h1>

<form action="/edit" method="post">
    @csrf
<table>
        <tr>
          <th>
            <div class="item">
            <p>Project Name</p>
            <input type="text" name="projectName" value="{{$disp->projectName}}"/>
            </div>
          </th>
          <th>
            <div class="question">
              <p>Project Category:</p>
              <div class="question-answer">
                <input type="radio" name="projectCategory"  value="Consultancy Project" 
                {{ $disp->projectCategory == 'Consultancy Project' ? 'checked' : '' }} >
                <label for="radio_1" class="radio"><span>Consultancy Project</span></label>
                <input type="radio" name="projectCategory"  value="Research Grant Project" 
                {{ $disp->projectCategory == 'Research Grant Project' ? 'checked' : '' }} >
                <label for="radio_2" class="radio"><span>Research Grant Project</span></label>
              </div>
            </div>
          </th>
        </tr>
        <tr>
          <th>
            <div class="item">
              <p>Project Leader:</p>
              <select id="leaderId" name="leaderId">
            @foreach($disp as $x)
            @if ($x->usertype=='0')
            <option value="{{$x->id}}">{{$x->name}}</option>
            @endif
            @endforeach
          </select>
                <!-- @foreach ($disp as $value)
             <option value="{{ $value->id }}" {{ ( $value->id == $options) ? 'selected' : '' }}>
                {{ $value->name }}
              <input type="text" name="leaderId" value="{{$disp->leaderId}}" /></option>
              @endforeach-->
            </div>
          </th>
    <button type="submit">Update Project</button>
</table>
</form>
</body>
</html>