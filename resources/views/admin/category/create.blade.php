@extends('admin.layouts.master')
@section('content')
<div class="container">
  <h2>Add Catagory</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


  <form method="POST">
    {{@csrf_field()}}
    <div class="form-group">
      <label for="catagory_name">Catagory Name:</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Catagory Name">
    </div>
    
    
      
<div class="form-group">
      
    <input type="submit" class="btn btn-default" value="Add" name="Add">
    </div>
  
    
    
  </form>
</div>

@endsection