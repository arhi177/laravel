<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="{{url ('/js/search.js')}}"></script>   
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo right">Logo</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="{{url(route('product.add'))}}">Добавление</a></li>
            <li><a href="{{url(route('products'))}}">Продукты</a></li>
        </ul>
        </div>
    </nav>
        <div class="container">
            <div class="card z-depth-4">
                <div class="card-content">
                    @yield('content')
                    
                </div>
            </div>
        </div>
</body>
</html>