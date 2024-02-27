@extends('master')
@section('content')



    @if($products->count()==0)
        <h1> No product Found </h1>
        <a href="/"> Return to home</a>

    @else

        @foreach($products as $product)

    <div class="container">

        <div class="row">
            <a href="detail/{{$product->id}}">
                <div class="col-sm-6">
                    <img class="detail-img" src="{{$product->gallery}}" alt="">
                </div>

            </a>

            <div class="col-sm-6">
                <h2>Product : {{$product->name}}</h2>
                <p>Description : {{$product->description}}</p>
                <h2>Price : {{$product->price}}</h2>
                <h2>Category : {{$product->category}}</h2>

                <button class="btn btn-primary"> Add to cart </button>
                <br> <br>
                <button class="btn btn-success"> Buy Now</button>

            </div>
        </div>

    </div>

        @endforeach
        <a href="/"> Go back</a>

    @endif
@endsection
