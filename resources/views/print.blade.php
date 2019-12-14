<!-- view.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Print Sucika</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body style="height: 100vh;">
    <div class="container d-flex">
        @foreach($peoples as $people)
        @php
        $date=date('Y-m-d', $people['date']);
        @endphp
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Hi, {{$people['name']}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Scan Below to See Your Sucika</h6>
                <img style="width:80%;" src="{{asset('img/qr.png')}}">
                <p class="card-subtitle text-muted">Your Unique ID is :</p>
                <h4 class="text-muted card-subtitle">{{$people['password']}}</h4>
            </div>
        </div>
        @endforeach
    </div>
  </body>
</html>