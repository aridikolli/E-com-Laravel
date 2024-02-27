<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home </a></li>

                <li class="active"><a href="#">Orders </a></li>


            <form  action="/search"   class="navbar-form navbar-left">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="search" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
            @php
                if(Session()->has('user')){
                $id=Session()->get('user')->id;
                $result=\App\Models\Cart::where('user_id',$id)->get()->count();
                $name=Session()->get('user')->username;
                }
                else{
                    $result=0;
                }
 @endphp
                <li><a href="/cartlist">Cart({{$result}})</a></li>

                   @if(Session()->has('user'))



                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Session()->get('user')->username}}
                        </a>
                        <i class="bi bi-file-arrow-down-fill"></i>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/logout">Log out</a>

                        </div>
                    </li>

                   @endif



            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
