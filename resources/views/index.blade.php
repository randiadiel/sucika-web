<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sucika</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body style="background-image: url('{{asset('img/bg.jpg')}}'); background-size: cover;">
    <div style="background-color: rgba(0,0,0,0.8); height: 100vh;">
    <div class="container" style="height=100vh;">
      <h2 class="text-primary">Sucika</h2><br/>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="form-group col-md-8">
            <h1 class="text-light">Halo !</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-8">
              <form action="{{url('search')}}" method="post">
              @csrf
                <h5 class="text-light">Masukkan Unique Code :</h5>
                <input class="form-control" type="text" name="password">
                <input class="my-2 btn btn-primary" type="submit">
              </form>
            </div>
          </div>
        </div>
    </div>
    <div class="text-center bg-primary">&copy; Randi Adiel Gianufian 2019</div>
    </div>
  </body>
</html>