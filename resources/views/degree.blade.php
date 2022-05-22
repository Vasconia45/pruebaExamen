@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"> {{ __('Degrees')}} </div>
                <div class="card-body">

                    <form role="form" method="GET">
                        @csrf
                        <div class=" row justify-content-end">
                            <div class=" col-1">
                                <button type="submit" formaction="{{ route('back') }}"
                                    class="btn btn-success">BACK</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection