@extends('layouts.master')


@section('title')

Edit-Registered Travel Destinations

@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Edit travel destination details: </h4> 

</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<form action="/role-dregister-update/{{ $destinations->id}}" method="POST">
{{ csrf_field() }}
{{method_field('PUT') }}
<div class="form-group">

          <label >Continent:</label>
          <select name="continent" class="form-control">
    <option value="Africa">Africa</option>
    <option value="N.America">N.America</option>
    <option value="Europe">Europe</option>
    <option value="Asia">Asia</option>
    </select>
    </div>

    <div class="form-group">
    <label>Country</label>
    <input type="text" value="{{$destinations->country}}" class="form-control" name="country">
    </div>
   
    <div class="form-group">
    <label>City</label>
    <input type="text" value="{{$destinations->city}}" class="form-control" name="city">
    </div>

    <div class="form-group">
    <label>Currency</label>
    <input type="text" value="{{$destinations->currency}}" class="form-control" name="currency">
    </div>
 

    <div class="form-group">
    <label>Places</label>
    <input type="text" value="{{$destinations->place}}" class="form-control" name="place">
    </div>


    <div class="form-group">
    <label>estimated Price</label>
    <input type="text" value="{{$destinations->estimatedP}}" class="form-control" name="estimatedP">
    </div>



    <div class="form-group">

          <label >Category:</label>
          <select name="category" class="form-control">
    <option value="local">Local Travel</option>
    <option value="Long">Long Distance Travel</option>
    <option value="international">International Travel</option>
    
    </select>
    </div>
    
    <div class="form-group">
    <label>Description</label>
    <input type="text" value="{{$destinations->description}}" class="form-control" name="description">
    </div>

    <div class="form-group">
    <label>Picture</label>
    <input type="text" value="{{$destinations->picture}}" class="form-control" name="picture">
    </div>

<!--
    <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
    <option value="admin">Admin</option>
    <option value="sprovider">Service Provider</option>
    <option value="traveller">Traveller</option>
    <option value="NULL">NULL</option>
    </select>
    </div>
  -->
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/destinations" class="btn btn-danger">Cancel</a>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection


@section('scripts')

@endsection