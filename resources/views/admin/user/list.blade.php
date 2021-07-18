
@extends('admin.layouts.master')
@section('content')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>User Permission</h1>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permissions</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                       @foreach ($users as $row)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                          <td>{{$row->name}}</td>
                          <td>{{$row->email}}</td>
                          
                          <td>
                            @if(!empty($row->getAllPermissions()))
                            @foreach($row->getAllPermissions() as $permission)
                                <label class="badge badge-success">{{ $permission->name }}</label>
                            @endforeach
                          @endif
                          </td>
                          
                          
                        <td><a href="{{route('user.add', $row['id'])}}"><i class="fas fa-plus"></i> Add Permission</a>{!! "&nbsp;&nbsp;" !!}<a href="{{route('user.delete', $row['id'])}}"><i class="fas fa-trash-alt"></i></i> Delete Permission</a>{!! "&nbsp;&nbsp;" !!}<a href="{{route('user.edit', $row['id'])}}"><i class="fas fa-edit"></i> Edit Information</a></td>
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