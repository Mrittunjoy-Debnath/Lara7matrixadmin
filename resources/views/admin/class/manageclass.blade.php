@extends('admin.master')

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Manage Class</h5>
                        <h4 class="text-center text-success font-weight-bold">{{ Session::get('success') }}</h4>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>Class Name</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach ($class as $category)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $category->class_name }}</td>
                                        <td>{{ $category->publication_status ==1? 'Published' : 'Unpublished'}}</td>

                                        <td>
                                            @if($category->publication_status ==1)
                                            <a href="{{ route('admin.unpublished-class',['id'=> $category->id]) }}" class="btn btn-primary">
                                                <span><i class="fa fa-arrow-up"></i></span>
                                            </a>
                                            @else
                                            <a href="{{ route('admin.published-class',['id'=> $category->id]) }}" class="btn btn-warning">
                                                <span><i class="fa fa-arrow-down"></i></span>
                                            </a>
                                            @endif
                                            <a href="{{ route('admin.edit-class',['id'=>$category->id]) }}" class="btn btn-success">
                                                <span><i class="fa fa-edit"></i></span>
                                            </a>
                                            <a href="{{ route('admin.delete-class',['id'=>$category->id]) }}" class="btn btn-danger">
                                                <span><i class="fa fa-trash"></i></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL No.</th>
                                        <th>School Name</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
