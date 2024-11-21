   
@extends('backend.layouts.admin-master')
@section('title','Edit License')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Edit License</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">License</a></li>
                                <li class="breadcrumb-item active">Edit License</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Edit License</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{route('admin.punjablicense.index')}}" class="btn btn-danger btn-sm">Back</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('admin.punjablicense.update', $license->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')  <!-- This is important to tell Laravel it's an update request -->
                                    <div class="row gy-4">
                                        <!-- Personal Details -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name', $license->name) }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="son_daughter_wife" class="form-label">Son/Daughter/Wife</label>
                                                <input type="text" class="form-control" name="son_daughter_wife" placeholder="Enter father or husband name" value="{{ old('son_daughter_wife', $license->son_daughter_wife) }}" required>
                                                @error('son_daughter_wife')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="license_no" class="form-label">License No</label>
                                                <input type="number" class="form-control" name="license_no" placeholder="Enter license no" value="{{ old('license_no', $license->license_no) }}">
                                                @error('license_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" value="{{ old('dob', $license->dob) }}" required>
                                                @error('dob')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="issue_date" class="form-label">Issue Date</label>
                                                <input type="date" class="form-control" name="issue_date" value="{{ old('issue_date', $license->issue_date) }}">
                                                @error('issue_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="valid_till" class="form-label">Valid Till</label>
                                                <input type="date" class="form-control" name="valid_till" value="{{ old('valid_till', $license->valid_till) }}">
                                                @error('valid_till')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                
                                        <!-- Address and Other Info -->
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">CNIC</label>
                                            <input type="number" class="form-control" name="cnic" placeholder="Enter CNIC no" value="{{ old('cnic', $license->cnic) }}">
                                            @error('cnic')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ old('address', $license->address) }}">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="blood_group" class="form-label">Blood Group</label>
                                            <input type="text" class="form-control" name="blood_group" placeholder="Enter blood group" value="{{ old('blood_group', $license->blood_group) }}">
                                            @error('blood_group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="emergency_contact" class="form-label">Emergency Contact</label>
                                            <input type="number" class="form-control" name="emergency_contact" placeholder="Enter blood group" value="{{old('emergency_contact', $license->emergency_contact)}}">
                                            @error('emergency_contact')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="passport_number" class="form-label">Passport Number</label>
                                            <input type="number" class="form-control" name="passport_number" placeholder="Enter blood group" value="{{old('passport_number', $license->passport_number)}}">
                                            @error('passport_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="nationality" class="form-label">Nationality</label>
                                            <input type="text" class="form-control" name="nationality" placeholder="Enter blood group" value="{{old('nationality',$license->nationality)}}">
                                            @error('nationality')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="previous_license_number" class="form-label">Previous License Number</label>
                                            <input type="number" class="form-control" name="previous_license_number" placeholder="Enter old dl" value="{{old('previous_license_number',$license->previous_license_number)}}">
                                            @error('previous_license_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status" class="form-label">Status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{ old('status', $license->status) == '1' ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ old('status', $license->status) == '0' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="category" class="form-label">Category</label>
                                            <select name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category', $license->category) == $category->name ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-6">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                                            <img src="{{ asset($license->image) }}" alt="" width="70">
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <div class="col-md-12">
                                            <label for="remarks" class="form-label">Remarks</label>
                                            <textarea name="remarks" rows="3" class="form-control" placeholder="Enter remarks">{{ old('remarks', $license->remarks) }}</textarea>
                                            @error('remarks')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                
                                        <!-- Submit Button -->
                                        <div class="row mb-3 mt-3">
                                            <div class="col-xxl-3 col-md-6">
                                                <button class="btn btn-primary" type="submit">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div> <!-- container-fluid -->
    </div><!-- End Page-content -->
   
</div>

@endsection
 