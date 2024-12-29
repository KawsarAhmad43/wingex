@extends('admin.layout.master')

@section('title', 'Settings')

@push('styles')
    <style>
        .settings-menu {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }

        .settings-menu a {
            color: #495057;
            font-weight: 500;
            display: block;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .settings-menu a:hover {
            background-color: #e9ecef;
            text-decoration: none;
        }

        .settings-menu .submenu {
            padding-left: 20px;
        }

        @media (max-width: 767.98px) {
            .settings-menu a {
                font-size: 14px;
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
                            <h3 class="text-white upgrade-info mb-0"><span class="fw-bold">Settings</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row flex-grow mt-4">
            <div class="col-md-12">
                <div class="settings-menu">
                    <a data-bs-toggle="collapse" href="#accountSettingsMenu" role="button" aria-expanded="false"
                        aria-controls="accountSettingsMenu">
                        Account Settings
                    </a>
                    <div class="collapse submenu" id="accountSettingsMenu">
                        <a href="{{ route('admin.settings.profile') }}">Profile Setting</a>
                        <a href="{{ route('admin.settings.info') }}">Personal Info Setting</a>
                    </div>

                    <a data-bs-toggle="collapse" href="#appearanceSettingsMenu" role="button" aria-expanded="false"
                        aria-controls="appearanceSettingsMenu">
                        Appearance Settings
                    </a>
                    <div class="collapse submenu" id="appearanceSettingsMenu">
                        <a href="">Site Setting</a>

                    </div>

                    <a href="#">Language</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Feedback</a>
                    <a href="#">Location</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Custom JS if needed
    </script>
@endpush
