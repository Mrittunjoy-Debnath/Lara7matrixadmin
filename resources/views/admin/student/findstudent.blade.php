@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h2>Class 6 </h2>
                                <p><a href="{{ route('admin.show-class6-secA') }}" class="btn btn-success text-white">Section_A</a></p>
                                <p><a class="btn btn-primary text-white">Section_B</a></p>
                                <p><a class="btn btn-warning text-white">Section_C</a></p>
                            </div>
                            <div class="col-md-4">
                                <h2>Class 7 </h2>
                                <p><a class="btn btn-success text-white"> Section_A</a></p>
                                <p><a class="btn btn-primary text-white"> Section_B</a></p>
                                <p><a class="btn btn-warning text-white"> Section_C</a></p>
                            </div>
                            <div class="col-md-4">
                                <h2>Class 8 </h2>
                                <p><a class="btn btn-success text-white"> Section_A</a></p>
                                <p><a class="btn btn-primary text-white"> Section_B</a></p>
                                <p><a class="btn btn-warning text-white"> Section_C</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
