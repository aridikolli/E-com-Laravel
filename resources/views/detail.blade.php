@extends('master')
@section('content')


    <div class="container">

        <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product->gallery}}" alt="">
        </div>
         <div class="col-sm-6">
             <a href="/"> Go back</a>
        <h2>Product : {{$product->name}}</h2>
             <p>Description : {{$product->description}}</p>
             <h2>Price : {{$product->price}}</h2>
             <h2>Category : {{$product->category}}</h2>

             <form action="/add_to_cart" method="post">
                 @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                 <button class="btn btn-primary"> Add to cart </button>
             </form>

             <br> <br>
            <button class="btn btn-success"> Buy Now</button>

         </div>
        </div>

    </div>


@endsection
