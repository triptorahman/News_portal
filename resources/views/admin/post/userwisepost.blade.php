@extends('admin.layouts.master')
@section('content')

<div class="container">
  <h2>User Information</h2>

  

@if(Session::has('message'))
<div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
  
    
    <div class="form-group">
      <label for="name">User Name:</label>
      <input type="text" class="form-control" name="name" id="name" readonly=""  value="{{$user->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email Name:</label>
      <input type="email" class="form-control" name="email" id="email" readonly="" value="{{$user->email}}">
    </div>
    
  
</div>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Post List</h1>
                    </div>
                </div>
            </div>
           
            

        </div>
        @if(Session::has('message'))
                <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Table</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Short Description</th>
                        <th>Status</th>
                        <th>Hot News</th>
                        <th>Total View</th>
                        <th>Comment</th>
                        <th>Posted by</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                       @foreach ($posts as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                              <td>{{$row->title}}</td>
                              <td><a target="_blank" href="{{asset('public/post_photoes/main/'.$row->main_image)}}"><img src="{{asset('public/post_photoes/list/'.$row->list_image)}}"></a></td>
                              <td>{{$row->short_description}}</td>
                              <td>
                                @if($row->status==1)
                                    <div class="alert alert-success">Active</div>

                                @else
                                    <div class="alert alert-danger">Inactive</div>

                                @endif

                              </td>
                              <td>
                                @if($row->hot_news==1)
                                    <div class="alert alert-success">Yes</div>

                                @else
                                    <div class="alert alert-danger">No</div>

                                @endif

                              </td>
                              <td>{{$row->view_count}}</td>
                              <td>
                                @if($row->status==1)
                                    <div>{{$row->comment}}</div>

                                @else
                                    <div class="alert-danger">{{$row->comment}}</div>

                                @endif

                              </td>
                              
                              <td><a href="{{route('admin.user.profile', $row->user->id)}}" title="Show User Info">{{ $row->user->email }}</a></td>
                            
                            <td>
                                
                                <a href="{{route('admin.post.comment', $row['id'])}}"><i class="fas fa-comment-dots"></i> Review Post</a>{!! "&nbsp;&nbsp;" !!}
                                
                                <a href="{{route('admin.post.delete', $row['id'])}}"><i class="fas fa-trash"></i> Delete</a>
                                

                            </td>
                           
                       </tr>
                        @endforeach
          
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection