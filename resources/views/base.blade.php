<!-- Plantilla base-->
<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Laravel 8 & MySQL CRUD Tutorial</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 <div class="container">
   @yield('main')
 </div>
 <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>