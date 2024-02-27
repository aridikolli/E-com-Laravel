@extends('master')
@section('content')


    <div class="custom-product">

        <div class="col-sm-10">


            <table class="table">

                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$10 </td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>$ {{$total +10}} </td>
                </tr>

                </tbody>
            </table>




        </div>


        <form action="/action_page.php">
            <div class="form-group">
                <textarea name="" class="form-control" placeholder="Enter your address"> </textarea>
            </div>
            <div class="form-group"><br>
                <label for="pwd">Payment Method:</label> <br>
                <input type="radio" name="payment" ><span>Online Payment</span> <br>
                <input type="radio" name="payment" ><span>EMI Payment</span> <br>
                <input type="radio" name="payment" ><span>Delivery Payment</span>

            </div>

            <button type="submit" class="btn btn-success">Check Out</button>
        </form>



    </div>


@endsection
