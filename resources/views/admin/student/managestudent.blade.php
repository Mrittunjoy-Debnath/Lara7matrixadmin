@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Student</h5>
                        <h4 class="text-center text-success font-weight-bold">{{ Session::get('success') }}</h4>
                        <div class="table-responsive">

                            <form action="{{ route('admin.show-student') }}" method="POST">
                            @csrf
                                    <div class="form-group row">

                                        <label  class="col-sm-3 text-right control-label col-form-label">School Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="school_id">
                                                <option>---------Select School Name---------</option>
                                                @foreach($school_id as $category)
                                                    <option value="{{ $category->id }}">{{ $category->school_name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->has('school_id') ? $errors->first('school_id') : ''}}</span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Class Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="class_id">
                                                <option>---------Select Class Name---------</option>
                                                @foreach($class_id as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->class_name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->has('class_id') ? $errors->first('class_id') : ''}}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 text-right control-label col-form-label">Section Name</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="section_id">
                                                <option>---------Select Section Name---------</option>
                                                @foreach($section_id as $sec)
                                                    <option value="{{ $sec->id }}">{{ $sec->section_name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger">{{ $errors->has('section_id') ? $errors->first('section_id') : ''}}</span>
                                        </div>
                                    </div>


                                {{-- <a href="{{ route('admin.show-student',['id1'=>$id1,'id2'=>$id2, 'id3'=>$id3]) }}" class="btn btn-primary">Show Student</a> --}}
                                <input type="submit" class="btn btn-primary" value="Submit">
                             </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
