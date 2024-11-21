<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sindh Traffic Police</title>
    <link rel="shortcut icon" href="{{ asset(get_setting('site_favicon')) }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @media print {
            body {
                -webkit-print-color-adjust: exact; /* Ensures colors are printed */
                color-adjust: exact; /* For non-Webkit browsers */
            }
    
            .navbar {
                display: none;
            }
    
            .card {
                border: 1px solid #000;
                box-shadow: none; /* Remove any shadow to save printer ink */
                max-width: 100%; /* Adjust to full width for printing */
                margin: 0 auto;
                border-radius: 10px;
            }
    
            .card-body {
                background: linear-gradient(135deg, #f3f3f3, #ffffff);
                padding: 20px;
                color: #000;
            }
    
            .card-body img {
                max-width: 100%;
                height: auto;
            }
    
            .btn {
                display: none; /* Hide the print button */
            }
    
            /* Ensure text and image formatting remains intact */
            .col-md-4, .col-md-8 {
                width: 50%;
                float: left;
            }
    
            .col-md-4 img {
                max-width: 80px;
                margin-bottom: 10px;
            }
    
            .col-md-8 img {
                width: 100px;
                margin-bottom: 10px;
            }
        }
    </style>
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
        <div class="card mt-3" style="max-width: 380px;  margin: 0 auto; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="card-body" style="background: linear-gradient(135deg, #f3f3f3, #ffffff); border-radius: 10px; padding: 20px;">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center">
                        <p style="color: green; font-weight: bold;     position: relative;top: -23px;">Verified</p>
                        <img src="{{ asset('assets/backend/uploads/logo.png') }}" alt="Logo" class="img-fluid" style="width: 80px; border-radius: 50%; border: 2px solid #ddd; background: #fff; padding: 5px;position: relative;top: -141px;">
                    </div>
                    <div class="col-md-8">
                        <img src="{{ asset($license->image) }}" alt="User Image" class="img-fluid mb-3" style="width: 50%; height: auto; border-radius: 8px; border: 2px solid #ddd;margin-left: 100px;">
                        <div class="card-info" style="
                        margin-left: -121px;
                    ">

                        <p style="margin: 5px 0;"><strong>License No:</strong> {{ $license->license_no }}</p>
                        <p style="margin: 5px 0;"><strong>Name:</strong> {{ $license->name }}</p>
                        <p style="margin: 5px 0;"><strong>F/H Name:</strong> {{ $license->father_or_husband }}</p>
                        <p style="margin: 5px 0;"><strong>Date of Birth:</strong> {{ $license->dob }}</p>
                        <p style="margin: 5px 0;"><strong>Issue Date:</strong> {{ $license->issue_date }}</p>
                        <p style="margin: 5px 0;"><strong>Expiry Date:</strong> {{ $license->valid_upto }}</p>
                        <p style="margin: 5px 0;"><strong>Category:</strong> {{ $license->category }}</p>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>