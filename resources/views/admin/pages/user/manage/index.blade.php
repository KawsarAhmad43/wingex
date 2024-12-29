@extends('admin.layout.master')

@section('title', 'User Management')


@section('content')
    <div class="row">
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded table-darkBGImg">
                    <div class="card-body">
                        <div class="col-sm-8">
                            <h3 class="text-white upgrade-info mb-0"><span class="fw-bold">User management</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons for Back and Add -->
        <div class="row flex-grow mt-2">
            <div class="col-md-12">
                <div class="btn-container">
                    <a href="" class="btn btn-secondary">Back</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPlanModal">
                        Add New User
                    </button>
                </div>


                <!-- Responsive Card Deck -->
                <div class="custom-container mt-3">
                    <!-- Search Bar -->
                    <input type="text" class="form-control search-bar" placeholder="Search Users">

                    <div class="row card-deck">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding New Plan -->
    @include('admin.pages.user.manage.form')

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Success message
            @if (session('success'))
                Swal.fire({
                    title: 'Success!',
                    text: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif

            // Error message
            @if ($errors->any())
                Swal.fire({
                    title: 'Error!',
                    text: "{{ $errors->first() }}",
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            @endif
        });
    </script>
@endpush
