   
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
                                    <a href="{{route('admin.user.index')}}" class="btn btn-danger btn-sm">Back</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('admin.user.update',$license->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row gy-4">
                                        <!-- Movie Details -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ $license->name ?? old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="image" class="form-label">Father/Husband Name</label>
                                                <input type="text" class="form-control" name="father_or_husband" placeholder="Enter father or husband name" value="{{ $license->father_or_husband ?? old( 'father_or_husband')}}" required>
                                                @error('father_or_husband')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="license_no" class="form-label">License no</label>
                                                <input type="number" class="form-control" name="license_no" placeholder="Enter license no" value="{{ $license->license_no ?? old('license_no') }}">
                                                @error('license_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" placeholder="Enter Movie Artist" required value="{{ $license->dob ?? old('dob') }}">
                                                @error('dob')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="issue_date" class="form-label">Issue Date</label>
                                                <input type="date" class="form-control" name="issue_date" value="{{ $license->issue_date ?? old('issue_date') }}">
                                                @error('issue_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="artist" class="form-label">Valid Upto</label>
                                                <input type="date" class="form-control" name="valid_upto" value="{{ $license->valid_upto ??  old('valid_upto') }}">
                                                
                                                @error('valid_upto')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <!-- Description Section -->
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">CNIC</label>
                                            <input type="number" class="form-control" name="cnic" placeholder="Enter CNIC no" value="{{ $license->cnic ?? old('cnic')}}">
                                            @error('cnic')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{ $license->address ?? old('address')}}">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="blood_group" class="form-label">Blood Group</label>
                                            <input type="text" class="form-control" name="blood_group" placeholder="Enter blood group" value="{{ $license->blood_group ?? old('blood_group')}}">
                                            @error('blood_group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="identification_mark" class="form-label">Identification Mark</label>
                                            <input type="text" class="form-control" name="identification_mark" placeholder="Enter identification mark" value="{{ $license->identification_mark ?? old('identification_mark')}}">
                                            @error('identification_mark')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="old_dl" class="form-label">Old DL</label>
                                            <input type="number" class="form-control" name="old_dl" placeholder="Enter old dl" value="{{ $license->old_dl ?? old('old_dl')}}">
                                            @error('old_dl')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">status</label>
                                            <select name="status" class="form-control">
                                                <option value="1" {{$license->status == '1' ? 'selected':''}} >Active</option>
                                                <option value="0" {{$license->status == '0' ? 'selected':''}} >Inactive</option>
                                            </select>
                                            @error('status')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">Category</label>
                                            <select name="category" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->name}}" {{ $category->name == $license->category ? 'selected' : '' }} >{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">Image</label>
                                            <input type="file" name="image" class="form-control" placeholder="Enter remarks" value="{{old('remarks')}}">
                                            <img src="{{asset($license->image)}}" alt="" width="70">
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <label for="cnic" class="form-label">Remarks</label>
                                            <textarea  name="remarks" rows="3" class="form-control" placeholder="Enter remarks">{{ $license->remarks ?? old('remarks')}}</textarea> 
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
 