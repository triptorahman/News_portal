@extends('admin.layouts.master')
@section('content')

<div class="container">
  <h2>Add Post</h2>

  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif


  <form method="POST" enctype="multipart/form-data">
    {{@csrf_field()}}
    <div class="form-group">
      <label for="title">Post Title:</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter Post Title">
    </div>
    <div class="form-group">
      <label for="short_description">Short Description:</label>
      <textarea class="form-control" id="short_description" name="short_description"></textarea>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <div class="form-group">
      <label for="Catagory">Select Category:</label>
      <select class="form-control" aria-label="Catagory" name="category_id">

        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>

        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" name="image" id="image">
    </div>
      

  <div class="form-group">
       
      <input type="submit" class="btn btn-secondary" value="Add" name="Add">
  </div>

  </form>

</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'description' );
</script>

@endsection