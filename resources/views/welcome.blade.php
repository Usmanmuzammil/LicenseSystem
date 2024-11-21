<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{
        background-color: rgb(24, 24, 95);
      }
    </style>
  </head>
  <body>
    <h1 class="text-center text-warning">DRIVERS LICENCING AUTHORITY <br>
      National Highways & Motorway Police</h1>
      <div class="container" style="background-color: white; display: block;">
        <b><p style=" margin-right: 20px;font-size: 24px;text-align:center;padding: 10px;">Home </p></b>
      </div>

      <div class="container" style="height: 400px;background-color: rgb(243, 243, 243); margin-top: -20px;">
        <h1 class="text-center text-dark"> Driving Licence Verification</h1>
        <form action="{{ route('search') }}" method="POST" class="mt-3">
          @csrf
          <div class="input-group w-75" style=" margin: 0 auto;">
              <input type="number" placeholder="CNIC 'Formate 1234512345671'" name="cnic" required class="form-control " value="{{old('cnic')}}">
              @error('cnic')
                  <span class="text-danger" >{{$message}}</span>
              @enderror
          </div>
          <div class="form-group mt-3">
              <div class="text-center">
                  <button class="btn pl-5 pr-5 p-3 text-white" type="submit" style="background-color: rgb(171, 54, 11)">CHECK LICENSE</button>
              </div>
          </div>
      </form>

      <!-- Display Error Message -->
@if (session('error'))
<div class="alert alert-danger text-center" style="max-width: 500px; margin: 20px auto;">
  <strong>{{ session('error') }}</strong>
</div>
@endif

      </div>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>