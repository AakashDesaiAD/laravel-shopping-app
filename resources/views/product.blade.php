@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="">
        <div class="">
            <section style="background-color: #eee;">
              <div class="container py-5">
                <div class="row justify-content-center">
                  <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                      <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                      <img src="{{$product->image_1}}"
                        class="card-img-top mx-auto" alt="Apple Computer" style="width:100px" />
                      <div class="card-body">
                        <div class="text-center">
                          <h5 class="card-title">{{$product->title}}</h5>
                          <p class="text-muted mb-4">{{$product->desc}}</p>
                        </div>
                        <div>
                          <div class="d-flex justify-content-between">
                            <span>Price</span><strike>{{$product->price}}</strike>
                          </div>
                          <div class="d-flex justify-content-between">
                            <span>Sale price</span><span>{{$product->sale_price}}</span>
                          </div>
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                          <span>Total</span><span>{{$product->sale_price}}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
    </div>
</div>
@endsection