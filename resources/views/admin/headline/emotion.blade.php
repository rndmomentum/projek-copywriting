@extends('admin.layouts.app')

@section('title')
    Add Emotion
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
        <h3 class="panel-title">Add Emotion</h3>
        <p class="panel-subtitle">Below list will be use on headline</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <form action="{{ url('admin/headline/emotion/store') }}" method="POST">
                @csrf
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="emotion" placeholder="Your text here" required>
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
        <h3 class="panel-title">List Emotion</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Type of Emotion</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($emotion as $e)
                        <tr>
                            <td>{{ $e->emotion_id }}</td>
                            <td>{{ $e->emotion_text }}</td>
                            <td>{{ $e->created_at }}</td>
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