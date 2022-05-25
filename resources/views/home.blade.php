@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="d-flex justify-content-start">
        <div class="my-2 border border-grey px-5 py-2">
            <p class="h4">Categories</p>
            <ul class="list-group">
                @foreach($category as $key => $value)
                <li class="list-group-item">
                    <a href="{{route('category', ['id' => $value->id])}}" class="text-decoration-none text-secondary">{{$value->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="d-flex flex-wrap justify-content-center">
            @foreach( $products as $key => $value)
            <div class="card m-2" style="width: 18rem;">
               <img class="card-img-top" src="/storage/{{$value['image_1']}}" alt="Card image cap" style="height: 286px; width: 286px;">
               <div class="card-body">
                  <h5 class="card-title">{{$value['title']}}</h5>
                  <p class="card-text">{{$value['desc']}}</p>
                  <a href="{{ route('product', ['id' => $value['id']]) }}" class="btn btn-primary w-100">Buy</a>
               </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection