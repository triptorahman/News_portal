@extends('admin.layouts.master')
@section('content')

<div class="container">
  <h2>Check Post</h2>

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
      <input type="text" class="form-control" value="{{ $post->title }}" disabled="" name="title" id="title" placeholder="Enter Post Title">
    </div>
    <div class="form-group">
      <label for="short_description">Short Description:</label>
      <textarea class="form-control" id="short_description" disabled="" name="short_description">{{ $post->short_description }}</textarea>
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      <textarea class="form-control" id="description" disabled="" readonly="" name="description">{{ $post->description }}</textarea>
    </div>

    <div class="form-group">
      <label for="Catagory">Select Category:</label>
      <select class="form-control" aria-label="Catagory" name="category_id">

       
        <option value="{{$post->category->id}}">{{$post->category->name}}</option>

        
      </select>
    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      
    </div>

    <div class="form-group">
      
      <a target="_blank" href="{{asset('public/post_photoes/main/'.$post->main_image)}}"><img src="{{asset('public/post_photoes/main/'.$post->main_image)}}"></a>
    </div>

    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" id="comment"  name="comment"></textarea>
    </div>

    <div class="form-group">
      <label for="Status">Post Status:</label>
      <select class="form-control" aria-label="Status" name="status">

       @if($post->status==1)

         <option value="1" selected="">Approve</option>
         <option value="0">Declined</option>

       @else

         <option value="1">Approve</option>
         <option value="0" selected="">Declined</option>

       @endif
        

        
      </select>
    </div>

    <div class="form-group">
      <label for="Hot News">Hot News:</label>
      <select class="form-control" aria-label="Hot News" name="hot_news">

       @if($post->hot_news==1)

         <option value="1" selected="">Yes</option>
         <option value="0">No</option>

       @else

         <option value="1">Yes</option>
         <option value="0" selected="">No</option>

       @endif
        

        
      </select>
    </div>
      

  <div class="form-group">
       
      <input type="submit" class="btn btn-secondary" value="Save" name="Save">
  </div>

  </form>

</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'description' );
</script>

@endsection