@extends('backend.layouts.admin-master')
@section('title','Punjab License View')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Punjab License</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Punjab License</a></li>
                                <li class="breadcrumb-item active">Punjab License view</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
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
                                                   <img src="{{asset($Punjablicense->image)}}" alt="User image" style="width:200px">
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
                                                    <a href="{{ route('admin.print-punjablicense', $Punjablicense->id) }}" class="btn btn-primary float-end">Print Punjab License Card</a>
                                                </h5>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Full Name :</th>
                                                                <td class="text-muted">{{ $Punjablicense->name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Father/Husband Name :</th>
                                                                <td class="text-muted">{{ $Punjablicense->son_daughter_wife }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">License No :</th>
                                                                <td class="text-muted">{{ $Punjablicense->license_no }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Category :</th>
                                                                <td class="text-muted">{{ $Punjablicense->category->name ?? 'N/A' }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Date of Birth :</th>
                                                                <td class="text-muted">{{ $Punjablicense->dob }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Issue Date :</th>
                                                                <td class="text-muted">{{ $Punjablicense->issue_date }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Valid Upto :</th>
                                                                <td class="text-muted">{{ $Punjablicense->valid_till }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Cnic No :</th>
                                                                <td class="text-muted">{{ $Punjablicense->cnic }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Address :</th>
                                                                <td class="text-muted">{{ $Punjablicense->address }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Blood Group :</th>
                                                                <td class="text-muted">{{ $Punjablicense->blood_group }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Emergency Contact :</th>
                                                                <td class="text-muted">{{ $Punjablicense->emergency_contact }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Previous License No :</th>
                                                                <td class="text-muted">{{ $Punjablicense->previous_license_number }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Passport Number :</th>
                                                                <td class="text-muted">{{ $Punjablicense->passport_number }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Nationality :</th>
                                                                <td class="text-muted">{{ $Punjablicense->nationality }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Status :</th>
                                                                @if ($Punjablicense->status == 1)
                                                                    <td class="text-success">Active</td>
                                                                @else
                                                                    <td class="text-danger">Inactive</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                <th class="ps-0" scope="row">Remarks :</th>
                                                                <td class="text-muted">{{ $Punjablicense->remarks ?? 'N/A' }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>
                        </div>
                        
                        <!--end tab-content-->
                    </div>
                </div>
               
                
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    
</div>

@endsection
