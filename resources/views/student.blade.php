@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Students') }}</div>
                <div class="card-body">

                    <form role="form" method="GET">
                        @csrf
                        <div class="row mt-3 text-center">
                            <div class="col-3">
                                <a href="{{ route('listOfStudents') }}" class="btn btn-success">List of Student</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn btn-success">Search a Student</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn btn-success">Insert a Student</a>
                            </div>
                            <div class="col-3">
                                <a href="" class="btn btn-success">Delete a Student</a>
                            </div>
                        </div>

                        <div class="row justify-content-end mt-3">
                            <div class="col-1">
                                <button type="submit" formaction="{{ route('back') }}"
                                    class="btn btn-success">BACK</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            @if (isset($students))
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row">
                        <table>
                            <tbody>
                                <th class="text-success">ID:</th>
                                <th class="text-success">NAME:</th>
                                <th class="text-success">CITY:</th>
                                <th class="text-success">PHONE:</th>
                                <th class="text-success">FECHA_NAC:</th>
                                <th class="text-success">DEGREE_CODE:</th>

                                @foreach ($students as $student)
                                <tr>
                                    <th>{{ $student->id}}</th>
                                    <th>{{ $student->name}}</th>
                                    <th>{{ $student->city}}</th>
                                    <th>{{ $student->phone}}</th>
                                    <th>{{ $student->fecha_nac}}</th>
                                    <th>{{ $student->degreeCode}}</th>
                                    <form role="form" method="GET">
                                        @csrf
                                        <th><a href="{{ route('editStudents', $student->id)}} "
                                                class="btn btn-success"><i class="bi bi-pencil-fill"></i></a></th>
                                    </form>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection