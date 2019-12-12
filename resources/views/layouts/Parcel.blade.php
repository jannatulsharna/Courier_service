<!DOCTYPE html>
<html>
<head>
  <title>Crud app</title>
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
<div class="container"></div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Create</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <table border="1px solid black">
    <tr>
      <td>Name</td>
      <td>Address</td>
      <td>Phone</td>
      <td>Action</td>
    </tr>
    
  
  @foreach ($Parcel as $value)
    <tr>
    <td>{{ $value->name }} </td>
    <td>{{ $value->address }}</td>
    <td>{{ $value->Phone }}</td>
    <td> <a href=""><button style="background-color: pink;,padding: 10px 10px;">Edit</button></a>&nbsp;<a href=""><button style="background-color: red;,padding: 10px 10px;">Delete</button></a></td>
</tr>
  @endforeach

</table>

</div>

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.css')}}"></script>
</body>
</html>