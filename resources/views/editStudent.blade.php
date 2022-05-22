@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (isset($student))
                <div class="card-header">{{__('Student')}}</div>
                <div class="card-body">

                    <form role="form" method="POST" action="{{ route('updateStudent') }}">
                        {{ csrf_field() }}
                        @foreach ($student as $st)
                        <div class="row">
                            <div class="col-1">
                                <label>Student:</label>
                            </div>
                            <div class="col-1">
                                <input type="text" style="border: 0;" name="id" value="{{ $st->id }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 text-primary">
                                <p>NAME:</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="name" value="{{ $st->name }}"
                                    class="form-control icon2 rounded">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 text-primary">
                                <p>CITY:</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="city" value="{{ $st->city }}"
                                    class="form-control icon2 rounded">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 text-primary">
                                <p>PHONE:</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="phone" value="{{ $st->phone }}"
                                    class="form-control icon2 rounded">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 text-primary">
                                <p>FECHA_NAC:</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="fecha_nac" value="{{ $st->fecha_nac }}"
                                    class="form-control icon2 rounded">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3 text-primary">
                                <p>DEGREE_CODE:</p>
                            </div>
                            <div class="col-6">
                                <input type="text" name="degreeCode" value="{{ $st->degreeCode }}"
                                    class="form-control icon2 rounded">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-end">
                            <div class="col-2">
                                <a href="{{ route('backStudent') }}" type="submit" class="btn btn-primary">BACK</a>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary">SAVE</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection