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
    <h1 class="text-center text-warning py-3">DRIVERS LICENSING AUTHORITY <br>
        National Highways & Motorway Police</h1>

    <div class="container" style="background-color: white; display: block;">
        <b><p style="margin-right: 20px;font-size: 24px;text-align:center;padding: 10px;">Check Your License</p></b>
        {{-- <button class="btn btn-warning" style="float: right;margin-top: -65px;">Back</button> --}}
        <a href="{{url('/')}}" class="btn text-white" style="float: right;margin-top: -65px;background-color: rgb(171, 54, 11)">Back</a>
    </div>

    <div class="container" style="height: 450px;background-color: rgb(243, 243, 243); margin-top: -20px;">
        <div class="container">
            <div class="card mt-3" style="max-width: 450px; margin: 0 auto; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-body" style="background: linear-gradient(135deg, #f4f4f9, #ffffff); padding: 20px;">
                    <div class="row align-items-center ">
                        <!-- License Status Section -->
                        <div class="col-md-4 text-center">
                            {{-- <p style="color: green; font-weight: bold; position: relative;top: -30px;">Verified</p> --}}
                            {{-- <img src="{{ asset('assets/backend/uploads/logo.png') }}" alt="Logo" class="img-fluid" style="width: 80px; border-radius: 50%; border: 2px solid #ddd; background: #fff; padding: 5px; position: relative; top: -150px;"> --}}
                        </div>
                        
                        <!-- License Information -->
                        <div class="col-md-12">
                            {{-- <img src="{{ asset($license->image) }}" alt="User Image" class="img-fluid mb-3" style="width: 50%; height: auto; border-radius: 8px; border: 2px solid #ddd;margin-left: 100px;"> --}}
                            <table style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">License No:</td>
                                    <td style="padding: 8px;">{{ $license->license_no }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Name:</td>
                                    <td style="padding: 8px;">{{ $license->name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">CNIC:</td>
                                    <td style="padding: 8px;">{{ $license->cnic }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">S/D Name:</tgid>
                                    <td style="padding: 8px;">{{ $license->son_daughter_wife }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Date of Birth:</td>
                                    <td style="padding: 8px;">{{ $license->dob }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Issue Date:</td>
                                    <td style="padding: 8px;">{{ $license->issue_date }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Expiry Date:</td>
                                    <td style="padding: 8px;">{{ $license->valid_till }}</td>
                                </tr>
                                <tr>
                                    <td style="padding: 8px; font-weight: bold;">Category:</td>
                                    <td style="padding: 8px;">{{ $license->category->name }}</td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>