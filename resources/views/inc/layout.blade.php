<!doctype html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="keywords" content="">
            <link rel="shortcut icon" href="" type="image/x-icon">
            <!--CSS Files-->
            <link href="{{asset('css/fontawsome/all.min.css')}}" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
            <link href="{{asset('css/app.css')}}" rel="stylesheet">
            <title> @yield('title', 'Mally App') </title>
          </head>
          <body>

{{--  Start navbar  --}}
@include('inc/navbar')
{{--  Start navbar  --}}


<section class="appContnt py-5">

    <div class="container">

        @yield('content')
    
    </div>
    
</section>

{{--  Start Footer  --}}
@include('inc/footer')
{{--  End Footer  --}}

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="{{asset('js/fontawsome/all.min.js')}}"></script>

    @yield('additionJS')

  </body>
</html>