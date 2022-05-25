@extends('admin.layout')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <p class="h4">Edit Product</p>
                </div>

                <div class="px-5">
                    <form action="{{ route('admin.products.update', [$id]) }}" method="POST" files=true enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        @csrf
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{$product->title}}">
                          </div>

                          <div class="form-group">
                            <label for="desc">Description</label>
                            <input name="desc" type="text" class="form-control" id="desc" placeholder="Enter Description" value="{{$product->desc}}">
                          </div>

                          <div class="form-group">
                            <label for="categoryId">Category</label>
                            <select class="form-select" name="categoryId">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $product->categoryId ? 'selected' : '' }}>{{$category->title}}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="price">Price</label>
                            <input name="price" type="number" class="form-control" id="desc" placeholder="Enter price" value="{{$product->price}}">
                          </div>

                          <div class="form-group">
                            <label for="sale_price">Sale Price</label>
                            <input name="sale_price" type="number" class="form-control" placeholder="Enter Sale price" value="{{$product->sale_price}}">
                          </div>

                          <div class="form-group">
                            <label for="">Change image 1</label>
                            <input type="file" name="image_1" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="">Change image 2</label>
                            <input type="file" name="image_2" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="">Change image 3</label>
                            <input type="file" name="image_3" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="">Change image 4</label>
                            <input type="file" name="image_4" class="form-control">
                          </div>

                          <div class="form-group">
                            <label for="">Change image 5</label>
                            <input type="file" name="image_5" class="form-control">
                          </div>

                          <div class="form-group">
                              <button class="btn btn-primary">Save Changes</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection