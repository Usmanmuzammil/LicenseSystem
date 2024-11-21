<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sindh Traffic Police</title>
    <link rel="shortcut icon" href="{{ asset(get_setting('site_favicon')) }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('assets/backend/uploads/logo-removebg.png')}}" width="90" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        @if (session('error'))
            <div class="alert alert-danger mt-2" >{{session('error')}}</div>
        @endif
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-6 offset-md-3 col-sm-12">
                <div class="card shadow mt-5" style="border-top-color: red;border-top: 3px solid red;">
                    <div class="card-body">
                        <h5 style="font-weight: lighter;"> Verification Panel </h5>
                        <form action="{{ route('search') }}" method="POST" class="mt-3">
                            @csrf
                            <div class="input-group">
                                <input type="number" placeholder="Please enter your CNIC" name="cnic" required class="form-control" value="{{old('cnic')}}">
                                @error('cnic')
                                    <span class="text-danger" >{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <div class="text-center">
                                    <button class="btn btn-outline-danger pl-5 pr-5" type="submit">Verify</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>