@extends('admin.layout.master')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="home-tab">
                @include('admin.include.extras.tab-menu')
                <div class="tab-content tab-content-basic">
                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                        <div class="row">
                            @include('admin.include.extras.statistics')
                        </div>
                        <div class="row">
                            @include('admin.include.extras.linechart')
                            @include('admin.include.extras.status-summery')
                        </div>
                        <div class="row">
                            <div class="col-lg-8 d-flex flex-column">
                                @include('admin.include.extras.market')
                                @include('admin.include.extras.upgrade')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
