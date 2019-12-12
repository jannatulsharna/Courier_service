@extends('layouts/customer')
@section('body')
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<form class="form-horizontal" action="/requestStore" method="post" >
  <fieldset>
    <div id="legend" style="text-align: center;"><b>
      <legend class="">Request For Parcel</legend></b>
    </div>
    <div class="control-group">
      <!-- Username -->
      {{csrf_field()}}  
      <label class="control-label"  for="name">Name</label>
      <div class="controls">
        <input type="text" name="username" placeholder="your name" class="input-xlarge" required=" ">
        
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input type="email" id="email" name="email" placeholder="" class="input-xlarge"  required=" ">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Phone</label>
      <div class="controls">
        <input type="phonenumber" id="phone" name="phone" placeholder="" class="input-xlarge"  required=" ">
        </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Address</label>
      <div class="controls">
        <input type="phonenumber" id="address" name="address" placeholder="" class="input-xlarge"  required=" ">
        </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Our Branch Name</label>
      <div class="controls">
        <input type="text" id="brachName" name="brachName" placeholder="" class="input-xlarge"  required=" ">
        </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Receiver Address</label>
      <div class="controls">
        <input type="text" id="where" name="where" placeholder="" class="input-xlarge"  required=" ">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Date</label>
      <div class="controls">
        <input type="date" id="date" name="date" placeholder="" class="input-xlarge"  required=" ">
        </div>
    </div>
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Receiver Name</label>
      <div class="controls">
        <input type="text" id="receiverName" name="receiverName" placeholder="" class="input-xlarge"  required=" ">
        </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Receiver Phone</label>
      <div class="controls">
        <input type="text" id="receiverPhone" name="receiverPhone" placeholder="" class="input-xlarge"  required=" ">
        
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
@endsection