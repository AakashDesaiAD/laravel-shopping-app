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
                            <h1>Products</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                                <li class="breadcrumb-item active">Products</li>
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
                                    <h3 class="card-title">Products</h3>
                                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary float-right"><i class="ion-plus-round mx-2"></i>Add new Product</a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body overflow-scroll">
                                    @if (session('status'))
                                        <h6 class="alert alert-success">{{ session('status') }}</h6>
                                    @endif
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Desc</th>
                                                <th>Category Id</th>
                                                <th>Price</th>
                                                <th>Sale Price</th>
                                                <th>Image 1</th>
                                                <th>Image 2</th>
                                                <th>Image 3</th>
                                                <th>Image 4</th>
                                                <th>Image 5</th>
                                                <th>Created At</th>
                                                <th>Updated At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($products as $key => $value)
                                          	<tr>
                                          		<td>{{$value->id}}</td>
                                          		<td>{{$value->title}}</td>
                                          		<td>{{$value->desc}}</td>
                                          		<td>{{$value->categoryId}}</td>
                                          		<td>{{$value->price}}</td>
                                          		<td>{{$value->sale_price}}</td>
                                          		<td>
                                          			@if($value->image_1)
                                                    <img src="/storage/{{$value->image_1}}" style="height:40px;width: 40px;">
                                          			@else
                                          				-
                                          			@endif
                                          		</td>
                                          		<td>
                                          			@if($value->image_2)
                                          			<img src="/storage/{{$value->image_2}}" style="height:40px;width: 40px;">
                                          			@else
                                          				-
                                          			@endif
                                          		</td>
                                          		<td>
                                          			@if($value->image_3)
                                          			<img src="/storage/{{$value->image_3}}" style="height:40px;width: 40px;">
                                          			@else
                                          				-
                                          			@endif
                                          		</td>
                                          		<td>
                                          			@if($value->image_4)
                                          			<img src="/storage/{{$value->image_4}}" style="height:40px;width: 40px;">
                                          			@else
                                          				-
                                          			@endif
                                          		</td>
                                          		<td>
                                          			@if($value->image_5)
                                          			<img src="/storage/{{$value->image_5}}" style="height:40px;width: 40px;">
                                          			@else
                                          				-
                                          			@endif
                                          		</td>
                                          		<td>{{$value->created_at}}</td>
                                          		<td>{{$value->updated_at}}</td>
                                          		<td>
                                          			<a href="{{ route('admin.products.edit', [$value->id]) }}" class="btn btn-warning"><i class="ion-edit"></i></a>
                                          			<form method="POST" action="{{ route('admin.products.destroy', ['product' => $value->id]) }}">
													    {{ csrf_field() }}
													    {{ method_field('DELETE') }}
													    <button type="submit" class="btn btn-danger"><i class="ion-trash-a"></i></button>
													</form>
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