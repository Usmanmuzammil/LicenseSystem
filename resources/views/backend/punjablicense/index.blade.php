@extends('backend.layouts.admin-master')
@section('title','Punjab License')
@section('content')
    
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Punjab License</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Punjab License</a></li>
                                        <li class="breadcrumb-item active">Index</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Punjab License</h4>
                                    <div class="flex-shrink-0">
                                        <div class="form-check form-switch form-switch-right form-switch-md">
                                            <a href="{{route('admin.punjablicense.create')}}"  class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Add Punjab License</a>
                                            
                                        </div>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap mb-0 table-striped category-table">
                                                <thead>
                                                    <tr>
                                                        {{-- <th scope="col"><input type="checkbox" id="checkAll"></th> --}}
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Son/Daughter/Wife</th>
                                                        <th scope="col">Punjab License No</th>
                                                        <th scope="col">CNIC</th>
                                                        <th scope="col">Created Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                </tbody>
                                            </table>
                                            {{-- <button id="deleteSelected" class="btn btn-danger">Delete Selected</button> --}}
                                        </div>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
   
@endsection
    

@push('scripts')
<script>
    $(document).ready(function() {
        $('.category-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.punjablicense.index') }}',
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'name', name: 'name' },
                { data: 'son_daughter_wife', name: 'son_daughter_wife' },
                { data: 'license_no', name: 'license_no' },
                { data: 'cnic', name: 'cnic' },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });


    

</script>

@endpush 

