@extends('master')
@section('content')
<div class="container-fluid ami my-3">
    <div class="row">
        <div class="col-sm-8 ">
            <h1>Add Employe Details</h1>
<form action="/updateemploye" method="POST">
    @csrf
   <input type="hidden" name=id value="{{$employeData->id}}"> 
  <div class="mb-3">
    <label for="name" class="form-label">Employe Name</label>
    <input type="text" value="{{$employeData->name}}" class="form-control"  name="name"id="name" >
  </div>
  <div class="mb-3">
    <label for="dateOfBirth" class="form-label">Date-Of-Birth</label>
    <input type="date"  value="{{$employeData->dateOfBirth}}"class="form-control" name="dateOfBirth" id="dateOfBirth">
  </div>
  <div class="mb-3">
    <label for="dateOfJoining" class="form-label">Date-OF-Joining</label>
    <input type="text" value="{{$employeData->dateOfJoining}}" class="form-control" name="dateOfJoining" id="dateOfJoining">
  </div>
  <div class="mb-3">
    <label for="Location" class="form-label">Location</label>
    <input type="text"  value="{{$employeData->Location}}"class="form-control"  name="Location"id="Location">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Mobile Number</label>
    <input type="text" value="{{$employeData->phone}}"class="form-control" name="phone" id="phone">
  </div>
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <input type="text" value="{{$employeData->status}}" class="form-control" name="status" id="status">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</div>
</div>
@endsection