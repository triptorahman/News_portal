
@extends('admin.layouts.master')
@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Category List</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

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
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                       @foreach ($categorys as $row)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                              <td>{{$row->name}}</td>
                              <td>
                                @if($row->status==1)
                                    <div class="alert alert-success">Active</div>

                                @else
                                    <div class="alert alert-danger">Inactive</div>

                                @endif

                              </td>
                            
                            <td><a href="{{route('category.edit', $row['id'])}}"><i class="fas fa-edit"></i> Edit Category</a>{!! "&nbsp;&nbsp;" !!}    
                                @if($row->status==1)
                                <a href="{{route('category.inactive', $row['id'])}}"><i class="fas fa-minus"></i></i> Inactive</a>
                                @else
                                <a href="{{route('category.active', $row['id'])}}"><i class="fas fa-plus"></i></i> Active</a>
                                @endif


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