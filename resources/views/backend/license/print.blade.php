@extends('backend.layouts.admin-master')
@section('title','License View')
@section('content')

<style>
     @media print {
            body {
                -webkit-print-color-adjust: exact; /* Ensures colors are printed */
                color-adjust: exact; /* For non-Webkit browsers */
            }
            .print-buttton{
                display: none;
            }

            .card-image{
                position: relative;
                top: -220px;
                right: -130px;
            }

            .front-heading{
                margin-left: -20px !important
            }

            .front-subheading{
                font-weight: bold;
                margin-left: -10px !important;
            }

            .issue_authority{
                width: 100px;
                margin-left: 120px;
                margin-top: 20px
            }
        }
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">License</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">License</a></li>
                                <li class="breadcrumb-item active">License view</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                {{-- <div class="col-lg-4">
                    <div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Image
                                                </h5>
                                                <div class="table-responsive text-center">
                                                   <img src="{{asset($license->image)}}" alt="User image" style="width:200px">
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">
                            <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                <div class="row">
                                    <div class="col-xxl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Info
                                                    <button class="btn btn-primary float-end" onclick="printLicenseCard()">Print License Card</button>
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                <td class="text-muted">{{$license->name}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                                <th class="ps-0" scope="row">Father/Husband Name :</th>
                                                                <td class="text-muted">{{$license->father_or_husband}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">License no :</th>
                                                                <td class="text-muted">{{$license->license_no}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Category :</th>
                                                                <td class="text-muted">{{$license->category}}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Date of Birth</th>
                                                                <td class="text-muted">{{$license->dob}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Issue Date</th>
                                                                <td class="text-muted">{{$license->issue_date}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Valid Upto</th>
                                                                <td class="text-muted">{{$license->valid_upto}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Cnic No</th>
                                                                <td class="text-muted">{{$license->cnic}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Address</th>
                                                                <td class="text-muted">{{$license->address}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Blood Group</th>
                                                                <td class="text-muted">{{$license->blood_group}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Identification Mark</th>
                                                                <td class="text-muted">{{$license->identification_mark}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Old DL</th>
                                                                <td class="text-muted">{{$license->old_dl}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Status</th>
                                                                @if ($license->status == 1)
                                                                    <td class="text-success" >Active</td>
                                                                    @else
                                                                    <td class="text-danger">Inactive</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Remarks</th>
                                                                <td class="text-muted">{{$license->remarks}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->

                                        
                                        <!--end card-->
                                    </div>
                                    <!--end col-->
                                 
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            
                        </div>
                        <!--end tab-content-->
                    </div>
                </div> --}}
                <button class="btn btn-primary float-end print-buttton" style="width:50px;" onclick="printLicenseCard()"><i class="bi bi-printer-fill"></i></button>

                <div class="container card-design">

                    {{-- <div class="card mt-3 front-card" style="max-width: 500px; height:250px; margin: 0 auto; border-radius: 10px;">
                        <div class="card-body" style="padding: 10px;">
                            <div class="row">
                                <!-- Front side of the card -->
                                <div class="col-md-8 front-card">
                                    <img src="{{asset('assets/backend/uploads/logo.png')}}" alt="" width="50">
                                    <h4 class="text-center front-heading" style="margin-top: -47px;" >Driving License</h4>
                                    <p class="text-center front-subheading ">Sindh Pakistan</p>
                                    <div style="margin-top: 1px">
                                        <div class="license-details">
                                            <p><strong>License No:</strong> <span class="detail-value">{{ $license->license_no }}</span></p>
                                            <p><strong>Name:</strong> <span class="detail-value">{{ $license->name }}</span></p>
                                            <p><strong>Father/Husband:</strong> <span class="detail-value">{{ $license->father_or_husband }}</span></p>
                                            <p><strong>Date of Birth:</strong> <span class="detail-value">{{ $license->dob }}</span></p>
                                            <p><strong>Issue Date:</strong> <span class="detail-value">{{ $license->issue_date }}</span></p>
                                            <p><strong>Valid Upto:</strong> <span class="detail-value">{{ $license->valid_upto }}</span></p>
                                            <p><strong>Category:</strong> <span class="detail-value">{{ $license->category }}</span></p>
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="col-md-4 text-center card-image">
                                    <img src="{{ asset($license->image) }}" alt="User Image" style="width: 100px; border-radius: 5px; border: 2px solid #ddd;">
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="card mt-3 back-card" style="max-width: 500px; height:250px; margin: 20px auto; border-radius: 10px;">
                        <div class="card-body" style="padding: 10px;">
                            <div class="row">
                                <!-- Back side of the card -->
                                <div class="col-12">
                                    <div class="license-details">

                                    <p><strong>Address:</strong> <span class="detail-value"> {{ $license->address }} </span> </p>
                                    <p><strong>CNIC:</strong>  <span class="detail-value">{{ $license->cnic }} </span> </p>
                                    <p><strong>Blood Group:</strong> <span class="detail-value"> {{ $license->blood_group }} </span> </p>
                                    <p><strong>Identification Mark:</strong> <span class="detail-value"> {{ $license->identification_mark }} </span> </p>
                                   <div class="mt-3">
                                    <p style="font-size: 11px  text-center" > <strong> <span class="detail-value">This license is a property of Sindh Police, If founddrop in the nearest post box office of DIGP Traffic police (L&T), Sindh Zamzama street karachi sindh. </span> </strong> </p>
                                   </div>
                                    <div style="border-top: 1px solid #000; margin-top: 10px; padding-top: 5px;">
                                        <p class="text-muted text-center"> <strong> <span class="detail-value">  Printed Date: {{ \Carbon\Carbon::now()->format('d-m-Y') }}  </span> </strong> </p>
                                        <p class="text-muted text-center"> <strong> <span class="detail-value"> Clifton Branch </span> </strong></p>
                                    </div>
                                </div>
                            </div> 

                            </div>
                        </div>
                    </div> --}}

                    <div class="card mt-3 front-card" style="max-width: 500px; height:250px; margin: 0 auto; border-radius: 10px;">
                        <div class="card-body" style="padding: 10px;">
                            <div class="row">
                                <div class="col-md-8 front-card">
                                    <img src="{{asset('assets/backend/uploads/logo.png')}}" alt="" width="50">
                                    <h4 class="text-center front-heading" style="margin-top: -47px;">Driving License</h4>
                                    <p class="text-center front-subheading">Sindh Pakistan</p>
                                    <div style="margin-top: 1px ; line-height: 15px;">
                                        <div class="license-details">
                                            <p><strong>License No:</strong> <span class="detail-value">{{ $license->license_no }}</span></p>
                                            <p><strong>Name:</strong> <span class="detail-value">{{ $license->name }}</span></p>
                                            <p><strong>Father/Husband:</strong> <span class="detail-value">{{ $license->father_or_husband }}</span></p>
                                            <p><strong>Date of Birth:</strong> <span class="detail-value">{{ $license->dob }}</span></p>
                                            <p><strong>Issue Date:</strong> <span class="detail-value text-danger">{{ $license->issue_date }}</span></p>
                                            <p><strong>Valid Upto:</strong> <span class="detail-value text-danger ">{{ $license->valid_upto }}</span></p>
                                            <p><strong>Category:</strong> <span class="detail-value text-danger ">{{ $license->category }}</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center card-image">
                                    <img src="{{ asset($license->image) }}" alt="User Image" style="width: 100px; border-radius: 5px; border: 2px solid #ddd; margin-top: -48px;">
                                    <p class="margin-top:10px text-center issue_authority">
                                        <strong>
                                            Issuing Authority DSP M Abbas Malir Cantt Karachi
                                        </strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3 back-card" style="max-width: 500px; height:250px; margin: 20px auto; border-radius: 10px;">
                        <div class="card-body" style="padding: 10px;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="license-details">
                                        <p><strong>Address:</strong> <span class="detail-value"> {{ $license->address }} </span> </p>
                                        <p><strong>CNIC:</strong> <span class="detail-value">{{ $license->cnic }} </span></p>
                                        <p><strong>Blood Group:</strong> <span class="detail-value"> {{ $license->blood_group ?? 'N/A' }} </span></p>
                                        <p><strong>Identification Mark:</strong> <span class="detail-value"> {{ $license->identification_mark ?? 'N/A' }} </span></p>
                                        <div class="mt-3">
                                            <p style="font-size: 11px; text-align: center;"> <strong> <span class="detail-value">This license is a property of Sindh Police. If found, drop in the nearest post box office of DIGP Traffic police (L&T), Sindh Zamzama street Karachi Sindh. </span> </strong> </p>
                                        </div>
                                        <div style="border-top: 1px solid #000; margin-top: 10px; padding-top: 5px;">
                                            <p class=" text-center"> <strong> <span class="detail-value" style="margin-left: 100px" >  Printed Date: {{ \Carbon\Carbon::now()->format('d-m-Y') }}, Clifton Branch </span> </strong> </p>
                                            {{-- <p class="text-muted text-center"> <strong> <span class="detail-value">  </span> </strong></p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    
</div>

@endsection

<script>
    function printLicenseCard() {
        window.print();
    }
</script>