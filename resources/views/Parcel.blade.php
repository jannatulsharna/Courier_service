<@extends('layouts/Parcel')

@section('body')

<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="javascript:void(0)">Brand</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="javascript:void(0)">Active</a></li>
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Dropdown header</li>
            <li><a href="javascript:void(0)">Separated link</a></li>
            <li><a href="javascript:void(0)">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control col-md-8" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:void(0)">Link</a></li>
        <li class="dropdown">
          <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
            <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="javascript:void(0)">Action</a></li>
            <li><a href="javascript:void(0)">Another action</a></li>
            <li><a href="javascript:void(0)">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="javascript:void(0)">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection
