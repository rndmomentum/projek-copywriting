@extends('admin.layouts.app')

@section('title')
    Add Business
@endsection

@section('css')
    
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ session('success') }}
    </div>
@endif
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Add Business</h3>
        <p class="panel-subtitle">Below list will be use on headline</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{ url('admin/headline/business/store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="business" placeholder="Your text here" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">List Business</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Type of Business</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($business as $b)
                            <tr>
                                <td>{{ $b->business_id }}</td>
                                <td>{{ $b->business_type }}</td>
                                <td>{{ $b->created_at }}</td>
                                <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection