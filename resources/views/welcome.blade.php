<!DOCTYPE html>
<html>

<head>
    <title>BUYQ</title>
    <link rel="shortcut icon" href="{{ URL('v.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   @include('style')
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light.bg-gradient">
        <a href="http://127.0.0.1:8000/"><img class="navbar-brand Logos" style="width:30px;hight:30px;margin-right: 18px" src="https://cdn-icons-png.flaticon.com/512/1271/1271380.png"></a>
        <button style="outline: none;box-shadow: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a  style="font-size: 18px;text-decoration: none;color:rgb(67, 142, 255)" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($cats as $cat)
                            <a class="dropdown-item" href="{{ route('cat.show', [$cat->id]) }}">{{ $cat->name }}</a>
                        @endforeach



                        {{-- <a id="default" class="dropdown-item" href="{{ route('laptops') }}">Laptops</a>
                        <a class="dropdown-item" href="{{ route('tv') }}">TV</a> --}}
                    </div>
                </li>

            </ul>
            @guest

                   {{--  <a class="navbar__buttons-login" href="{{ route('login') }}" style="text-decoration: none;text-align:center">Login</a>&nbsp;&nbsp;
                    <a class="navbar__buttons-register" href="{{ route('register') }}"
                        style="text-decoration: none;text-align:center">Register</a> --}}

                <a style="outline: none;box-shadow: none;" class="nav-link btn also" href="{{ route('login') }}">Login</a>&nbsp;
                <a style="outline: none;box-shadow: none;"  class="nav-link btn regis" href="{{ route('register') }}">Register</a>
            @else
                <a style="outline: none;box-shadow: none;"  class="nav-link btn " href="{{ route('logout') }}">Logout</a>

            @endguest
        </div>
    </nav>
    @section('content')




        <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
        @foreach ($products as $product)





              <div class="hp mb-2 col-md-4 col-xl-4">
                <div class="card h-100 shadow-sm">
                  <a href="#">
                    <img src="{{$product->image}}" class="card-img-top" alt="product.title" />
                  </a>

                  <div class="label-top shadow-sm">
                    <a class="text-white" href="#">10% off</a>
                  </div>
                  <div class="card-body">
                    <div class="clearfix mb-3">
                      <span class="float-start badge rounded-pill bg-success">{{$product->price}} DH</span>

                      <span class="float-end"><a href="#" class="small text-muted text-uppercase aff-link">{{$product->name}}</a></span>
                    </div>
                    <h5 class="card-title">
                      <a target="_blank" href="#">{{$product->desc}}</a>
                    </h5>

                    <div class="d-grid gap-2 my-4">

                      <a href="{{route('addtocartguest')}}" class="btn btn-warning bold-btn">add to cart</a>

                    </div>
                    <div class="clearfix mb-1">

                      <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

                      <span class="float-end">
                        <i class="far fa-heart" style="cursor: pointer"></i>

                      </span>
                    </div>
                  </div>
                </div>
              </div>


              @endforeach

                </div>
              </div>




        @endsection


    @yield('content')
    @include('products.filtring')

    <script type="text/javascript">
        document.addEventListener('contextmenu', (e) => e.preventDefault());

        function ctrlShiftKey(e, keyCode) {
            return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
        }

        document.onkeydown = (e) => {
            // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
            if (
                event.keyCode === 123 ||
                ctrlShiftKey(e, 'I') ||
                ctrlShiftKey(e, 'J') ||
                ctrlShiftKey(e, 'C') ||
                (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
            )
                return false;
        };
    </script>
</body>

</html>
