@extends('layouts/master')

@section('pagetitle')
    Projects overview
@endsection

@section('headerDropDown')
    
@endsection

@section('breadcrumb')
    Home > Projects > Projects overview
@endsection

@section('content')
    <!-- Latest projects -->

    <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
            <h3 class="panel-title">Projects overview</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-hover centre-text">
                <tr>
                    <th>ID</th>
                    <th>PROJECT</th>
                    <th>PROVIDER</th>
                    <th>LINK</th>
                    <th>OWNER</th>
                    <th>STATUS</th>
                    <th>VIEW</th>
                </tr>

                @foreach ($projects as $project)
                <tr>
                    <th class="vertical-align">{{ $project->id }}</th>
                    <th>{{ $project->projectName }}</th>
                    <th>{{ $project->projectProvider }}</th>
                    <th>{{ $project->projectLink }}</th>
                    <th>{{ $project->owner }}</th>
                    <th class="font-green">{{ $project->status }}</th>
                    <th><a href="{{ url('/projects') }}/{{ $project->id }}"><button type="button" class="btn btn-danger">View</button></a></th>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection