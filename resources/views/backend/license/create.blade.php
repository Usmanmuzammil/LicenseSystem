   
@extends('backend.layouts.admin-master')
@section('title','Create License')
@section('content')
    
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create License</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Licenses</a></li>
                                <li class="breadcrumb-item active">Create License</li>
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
                            <h4 class="card-title mb-0 flex-grow-1">Create License</h4>
                            <div class="flex-shrink-0">
                                <div class="form-check form-switch form-switch-right form-switch-md">
                                    <a href="{{route('admin.user.index')}}" class="btn btn-danger btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <form action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data" id="userForm">
                                    @csrf
                                    <div class="row gy-4">
                                        <!-- Movie Details -->
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="image" class="form-label">Father/Husband Name</label>
                                                <input type="text" class="form-control" name="father_or_husband" placeholder="Enter father or husband name" value="{{old('father_or_husband')}}" required>
                                                @error('father_or_husband')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="license_no" class="form-label">License no</label>
                                                <input type="number" class="form-control" name="license_no" placeholder="Enter license no" value="{{ old('license_no') }}">
                                                @error('license_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" placeholder="Enter Movie Artist" required value="{{ old('dob') }}">
                                                @error('dob')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="issue_date" class="form-label">Issue Date</label>
                                                <input type="date" class="form-control" name="issue_date" value="{{ old('issue_date') }}">
                                                @error('issue_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-md-6">
                                            <div>
                                                <label for="artist" class="form-label">Valid Upto</label>
                                                <input type="date" class="form-control" name="valid_upto" value="{{ old('valid_upto') }}">
                                                
                                                @error('valid_upto')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <!-- Description Section -->
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">CNIC</label>
                                            <input type="number" class="form-control" name="cnic" placeholder="Enter CNIC no" value="{{old('cnic')}}">
                                            @error('cnic')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Enter address" value="{{old('address')}}">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="blood_group" class="form-label">Blood Group</label>
                                            <input type="text" class="form-control" name="blood_group" placeholder="Enter blood group" value="{{old('blood_group')}}">
                                            @error('blood_group')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="identification_mark" class="form-label">Identification Mark</label>
                                            <input type="text" class="form-control" name="identification_mark" placeholder="Enter identification mark" value="{{old('identification_mark')}}">
                                            @error('identification_mark')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="old_dl" class="form-label">Old DL</label>
                                            <input type="number" class="form-control" name="old_dl" placeholder="Enter old dl" value="{{old('old_dl')}}">
                                            @error('old_dl')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cnic" class="form-label">status</label>
                                            <select name="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
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
                                                    <option value="{{$category->name}}" >{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        

                                        <div class="col-md-6">
                                            <label for="imageInput" class="form-label">Image</label>
                                            <input type="file" id="imageInput" name="image" class="form-control" accept="image/*">
                                            <img id="imagePreview" style="display:none; max-width: 100%;" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        

                                        <div class="col-md-12">
                                            <label for="cnic" class="form-label">Remarks</label>
                                            <textarea  name="remarks" rows="3" class="form-control" placeholder="Enter remarks">{{old('remarks')}}</textarea> 
                                            @error('remarks')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                
                                        <!-- Submit Button -->
                                        <div class="row mb-3 mt-3">
                                            <div class="col-xxl-3 col-md-6">
                                                <button class="btn btn-primary" type="submit">Submit</button>
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

@push('scripts')
<script>
    // let cropper;

    // document.getElementById('imageInput').addEventListener('change', function (event) {
    //     const files = event.target.files;
    //     const done = (url) => {
    //         const imagePreview = document.getElementById('imagePreview');
    //         imagePreview.src = url;
    //         imagePreview.style.display = 'block';
    //     };

    //     if (files && files.length > 0) {
    //         const reader = new FileReader();
    //         reader.onload = function (event) {
    //             done(event.target.result);
    //         };
    //         reader.readAsDataURL(files[0]);
    //     }

    //     if (cropper) {
    //         cropper.destroy();
    //     }

    //     const image = document.getElementById('imagePreview');
    //     cropper = new Cropper(image, {
    //         aspectRatio: 1, // Set desired aspect ratio
    //         viewMode: 1,
    //         autoCropArea: 1,
    //     });
    // });

    // // Get cropped image data before form submission
    // document.querySelector('form').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent default form submission

    //     if (cropper) {
    //         // Get the cropped image data
    //         const canvas = cropper.getCroppedCanvas();
    //         canvas.toBlob((blob) => {
    //             const formData = new FormData(this);
    //             formData.append('image', blob, 'croppedImage.png'); // Append cropped image

    //             // Use fetch or AJAX to submit the form
    //             fetch(this.action, {
    //                 method: 'POST',
    //                 body: formData,
    //                 headers: {
    //                     'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF protection
    //                 }
    //             })
    //             .then(response => {
    //                 if (response.ok) {
    //                     // Handle success, e.g., redirect or show a success message
    //                     console.log("Image uploaded successfully.");
    //                 } else {
    //                     // Handle errors
    //                     console.error("Error uploading image.");
    //                 }
    //             })
    //             .catch(error => {
    //                 console.error("Error:", error);
    //             });
    //         }, 'image/png');
    //     }
    // });






    // let cropper;

    // document.getElementById('imageInput').addEventListener('change', function (event) {
    //     const files = event.target.files;

    //     if (files.length > 0) {
    //         const reader = new FileReader();
    //         reader.onload = function (event) {
    //             const imagePreview = document.getElementById('imagePreview');
    //             imagePreview.src = event.target.result;
    //             imagePreview.style.display = 'block';

    //             // Initialize cropper after the image is loaded
    //             if (cropper) {
    //                 cropper.destroy(); // Destroy the previous instance
    //             }
    //             cropper = new Cropper(imagePreview, {
    //                 aspectRatio: 1, // Set desired aspect ratio
    //                 viewMode: 1,
    //                 autoCropArea: 1,
    //             });
    //         };
    //         reader.readAsDataURL(files[0]);
    //     }
    // });

    // // Get cropped image data before form submission
    // document.querySelector('form').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent default form submission

    //     if (cropper) {
    //         const canvas = cropper.getCroppedCanvas();
    //         canvas.toBlob((blob) => {
    //             const formData = new FormData(this);
    //             formData.append('image', blob, 'croppedImage.png'); // Append cropped image

    //             // Use fetch to submit the form
    //             fetch(this.action, {
    //                 method: 'POST',
    //                 body: formData,
    //                 headers: {
    //                     'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF protection
    //                 }
    //             })
    //             .then(response => {
    //                 if (response.ok) {
    //                     // Handle success (e.g., redirect or show a success message)
    //                     console.log("Image uploaded successfully.");
    //                 } else {
    //                     console.error("Error uploading image.");
    //                 }
    //             })
    //             .catch(error => {
    //                 console.error("Error:", error);
    //             });
    //         }, 'image/png');
    //     }
    // });










    // let cropper;

    // document.getElementById('imageInput').addEventListener('change', function (event) {
    //     const files = event.target.files;

    //     if (files.length > 0) {
    //         const reader = new FileReader();
    //         reader.onload = function (event) {
    //             const imagePreview = document.getElementById('imagePreview');
    //             imagePreview.src = event.target.result;
    //             imagePreview.style.display = 'block';

    //             // Initialize cropper after the image is loaded
    //             if (cropper) {
    //                 cropper.destroy(); // Destroy the previous instance
    //             }
    //             cropper = new Cropper(imagePreview, {
    //                 aspectRatio: 1, // Set desired aspect ratio
    //                 viewMode: 1,
    //                 autoCropArea: 1,
    //             });
    //         };
    //         reader.readAsDataURL(files[0]);
    //     }
    // });

    // // Get cropped image data before form submission
    // document.querySelector('form').addEventListener('submit', function (event) {
    //     event.preventDefault(); // Prevent default form submission

    //     if (cropper) {
    //         const canvas = cropper.getCroppedCanvas();
    //         canvas.toBlob((blob) => {
    //             const formData = new FormData(this);
    //             formData.append('image', blob, 'croppedImage.png'); // Append cropped image

    //             // Append other form data
    //             const inputs = this.querySelectorAll('input, textarea, select');
    //             inputs.forEach(input => {
    //                 if (input.name && input.name !== 'image') {
    //                     formData.append(input.name, input.value);
    //                 }
    //             });

    //             // Use fetch to submit the form
    //             fetch(this.action, {
    //                 method: 'POST',
    //                 body: formData,
    //                 headers: {
    //                     'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF protection
    //                 }
    //             })
    //             .then(response => {
    //                 if (response.ok) {
    //                     // Handle success (e.g., redirect or show a success message)
    //                     console.log("Image uploaded successfully.");
    //                 } else {
    //                     console.error("Error uploading image.");
    //                 }
    //             })
    //             .catch(error => {
    //                 console.error("Error:", error);
    //             });
    //         }, 'image/png');
    //     }
    // });














    let cropper;

document.getElementById('imageInput').addEventListener('change', function (event) {
    const files = event.target.files;

    if (files.length > 0) {
        const reader = new FileReader();
        reader.onload = function (event) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.src = event.target.result;
            imagePreview.style.display = 'block';

            // Initialize cropper after the image is loaded
            if (cropper) {
                cropper.destroy(); // Destroy the previous instance
            }
            cropper = new Cropper(imagePreview, {
                aspectRatio: 1, // Set desired aspect ratio
                viewMode: 1,
                autoCropArea: 1,
            });
        };
        reader.readAsDataURL(files[0]);
    }
});

// Get cropped image data before form submission
document.getElementById('userForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    console.log("Form submitted"); // Debug message

    if (cropper) {
        const canvas = cropper.getCroppedCanvas();
        canvas.toBlob((blob) => {
            const formData = new FormData(this);
            formData.append('image', blob, 'croppedImage.png'); // Append cropped image

            // Append other form data
            const inputs = this.querySelectorAll('input, textarea, select');
            inputs.forEach(input => {
                if (input.name && input.name !== 'image') {
                    formData.append(input.name, input.value);
                }
            });

            // Use fetch to submit the form
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF protection
                }
            })
            .then(response => {
                if (response.ok) {
                    console.log("Image uploaded successfully.");
                    window.location.href = "{{route('admin.user.index')}}"
                    toast('License created successfully','success')
                } else {
                    console.error("Error uploading image.");
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
        }, 'image/png');
    } else {
        console.error("Cropper not initialized."); // Debug message if cropper is not initialized
    }
});

</script>
@endpush
