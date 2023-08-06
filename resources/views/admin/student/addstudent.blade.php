@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('admin.save-student') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title ">Add Student</h4>
                            <h4 class="text-center text-success font-weight-bold">{{ Session::get('success') }}</h4>
                            <div class="form-group row">

                                <label  class="col-sm-3 text-right control-label col-form-label">School Name</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="school_id">
                                        <option>---------Select School Name---------</option>
                                        @foreach($school as $category)
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
                                        @foreach($class as $brand)
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
                                        @foreach($section as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->section_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->has('section_id') ? $errors->first('section_id') : ''}}</span>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Student Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="student_name" placeholder="Student Name">
                                    <span class="text-danger">{{ $errors->has('student_name') ? $errors->first('student_name') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Father Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="father_name" placeholder="Father Name">
                                    <span class="text-danger">{{ $errors->has('father_name') ? $errors->first('father_name') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Moble Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
                                    <span class="text-danger">{{ $errors->has('mobile_number') ? $errors->first('mobile_number') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">Student Village</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="student_village" placeholder="Student Village">
                                    <span class="text-danger">{{ $errors->has('student_village') ? $errors->first('student_village') : ''}}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label">Publiscation Status</label>
                                <div class="col-sm-9 radio">
                                    <input type="radio"  name="publication_status" value="1" >Published
                                    <input type="radio"  name="publication_status" value="0" >Unpublished
                                    <br>
                                    <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                {{-- <input type="submit"  class="btn btn-primary" value="Submit"> --}}
                                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
