@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Welcome ' . Auth::user()->name . ":") }}

                    <div class="row mt-3 text-center">
                        <div class="col-6">
                            <a href="{{ route('students') }}" class="btn btn-success col-5">Student</a>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('degrees') }}" class="btn btn-success col-5">Degree</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection