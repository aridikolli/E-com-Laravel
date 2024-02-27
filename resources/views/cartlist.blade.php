@extends('master')
@section('content')


    <div class="container">

        <div class="row">
            <a href="ordernow">
                <button class="btn btn-success"> Order Now</button>
            </a>
            @foreach($products as $product)


                <br> <br>
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product->gallery}}" alt="">
            </div>
            <div class="col-sm-6">
                <h2>Product : {{$product->name}}</h2>
                <p>Description : {{$product->description}}</p>
                <h2>Price : {{$product->price}}</h2>
                <h2>Category : {{$product->category}}</h2>

                <form action="/delete_from_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button  type="submit" class="btn btn-danger"> Remove From Cart </button>
                </form>

                <br> <br>


            </div>
        </div>
        @endforeach
        <a href="ordernow">
            <button class="btn btn-success"> Order Now</button>
        </a>

    </div>


@endsection
