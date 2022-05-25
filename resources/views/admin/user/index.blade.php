@extends('admin.layout')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Users</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Users</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    @if (session('status'))
                                        @if(session('status.status'))
                                            <h6 class="alert alert-success">{{ session('status.message') }}</h6>
                                        @else
                                            <h6 class="alert alert-danger">{{ session('status.message') }}</h6>
                                        @endif
                                    @endif
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>A/c status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($userData as $key => $value)  
                                            <tr>
                                                <td>{{$value['id']}}</td>
                                                <td>{{$value['name']}}</td>
                                                <td>{{$value['email']}}</td>
                                                <td>
                                                    @if ($value['is_admin'] == TRUE)
                                                        <p>Admin</p>
                                                    @else
                                                        <p>User</p>
                                                    @endif
                                                </td>
                                                <td>{{$value['created_at']}}</td>
                                                <td>{{$value['updated_at']}}</td>
                                                <td>
                                                    @if($value['is_active'] == TRUE)
                                                        <p class="badge badge-success">Active</p>
                                                    @else
                                                        <p class="badge badge-danger">Not Active</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($value['is_active'] == TRUE)
                                                        <a href="{{ route('admin.users.edit', ['user' => $value['id']]) }}" class="btn btn-danger">Deactivate</button>
                                                    @else
                                                        <a href="{{ route('admin.users.edit', ['user' => $value['id']]) }}" class="btn btn-success">Activate</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>    
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>
    </div>
</div>
@endsection