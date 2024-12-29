@extends('admin.layout.master')

@section('title', 'Plans')

@push('styles')
<style>
    .custom-container {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .search-bar {
        width: 100%;
        max-width: 300px;
        margin-bottom: 20px;
    }

    @media (max-width: 576px) {
        .btn-container {
            flex-direction: column;
            align-items: stretch;
        }

        .btn-container a {
            margin-bottom: 10px;
            width: 100%;
            text-align: center;
        }
    }
</style>
@endpush

@section('content')
<div class="row">
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
            <div class="card card-rounded table-darkBGImg">
                <div class="card-body">
                    <div class="col-sm-8">
                        <h3 class="text-white upgrade-info mb-0"><span class="fw-bold">Plans</span></h3>
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
                    Add New Plan
                </button>
            </div>

            <!-- Responsive Table -->
            <div class="custom-container mt-3">
                <!-- Search Bar -->
                <input type="text" class="form-control search-bar" placeholder="Search Plans">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Start Date</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Learn Laravel</td>
                                <td>12 July, 2024</td>
                                <td>90 days</td>
                                <td><span class="badge bg-success">Ongoing</span></td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Adding New Plan -->
<div class="modal fade" id="addPlanModal" tabindex="-1" aria-labelledby="addPlanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPlanModalLabel">Add New Plan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="duration" class="form-label">Duration (in days)</label>
                        <input type="number" class="form-control" id="duration" name="duration" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Custom JS if needed
</script>
@endpush
