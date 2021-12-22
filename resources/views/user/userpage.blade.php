<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.usercss") 
  <style>
    .tab{
    margin:auto;
}
h1{
  text-align:center;
}
h3{
  text-align:center;
}
</style>
  </head>
  <body>
  <div class="container-scroller">
  @include("user.usernavbar")
  <div class="tab">
  <h1>UNITEN R&D Sdn Bhd (URND)</h1>
  <br/>
  <h3> Welcome Leader</h3>
  </div>
  @include("user.userscript") 
  </body>
</html>
