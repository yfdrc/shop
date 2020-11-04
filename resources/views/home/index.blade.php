@extends('layouts.app')

@section('content')
    @include('common.errors')

    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">

                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>

@endsection
