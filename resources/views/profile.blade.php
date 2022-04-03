@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="row g-3 needs-validation" method="POST" action="{{route('update')}}">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" class="form-control"  id="validationCustom01" value="{{$user->name}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">Country</label>
              <input type="text" class="form-control"  id="validationCustom01" value="{{$user->countery}}" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Gender</label>
              <input type="text" class="form-control" id="validationCustom02" value="{{$user->gender}}" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomjob" class="form-label">Job</label>
                <input type="text" class="form-control" id="validationCustomjob" value="{{$user->job}}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">facebook</label>
              <input type="text" class="form-control" id="validationCustom03" value="{{$user->facebook}}" required>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Twitter</label>
              <input type="text" class="form-control" id="validationCustom05" value="{{$user->twitter}}" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
            @php
                
            @endphp
          </form>
    </div>
@endsection