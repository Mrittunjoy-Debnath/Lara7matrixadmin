@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('admin.update-school',['id'=>$school->id]) }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title ">Edit School</h4>
                            <h4 class="text-center text-success font-weight-bold">{{ Session::get('success') }}</h4>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label col-form-label">School Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="school_name"  value="{{ $school->school_name }}">
                                    <span class="text-danger">{{ $errors->has('school_name') ? $errors->first('school_name') : ''}}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 text-right control-label">Publiscation Status</label>
                                <div class="col-sm-9">
                                    <input type="radio"  name="publication_status" value="1" {{ $school->publication_status==1?'checked':'' }}>Published
                                    <input type="radio"  name="publication_status" value="0" {{ $school->publication_status==0?'checked':'' }}>Unpublished
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
