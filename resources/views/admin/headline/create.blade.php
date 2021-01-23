@extends('admin.layouts.app')

@section('title')
    Create Headline
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
        <h3 class="panel-title">Create New Headline</h3>
        <p class="panel-subtitle">Headline will be processing for checking</p>
    </div>
    <div class="panel-body">
        <form action="{{ url('admin/headline/headline/store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" name="headline" rows="3" placeholder="Your headline here"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <input list="keywords" class="form-control" name="keywords" placeholder="Keyword Here" required>
                    <datalist id="keywords">
                        @foreach($keywords as $keyword)
                            <option value="{{ $keyword->keyword_text }}">
                        @endforeach
                    </datalist>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" name="emotion" required>
                            <option value="">-- Choose Emotion --</option>
                            <option value="e0">Need of Guarantee</option>
                            <option value="e1">Need of Variety</option>
                            <option value="e2">Need of Excellent</option>
                            <option value="e3">Need of Recognition</option>
                            <option value="e4">Need of Achievement</option>
                            <option value="e5">Need of Love</option>
                            <option value="e6">Need of Growth</option>
                            <option value="e7">Need of Contribution</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" name="business" required>
                            <option value="">-- Type of Business --</option>
                            <option value="beauty">Beauty</option>
                            <option value="fashion">Fashion</option>
                            <option value="healthy">Healthy</option>
                            <option value="foodnbeverages">Food & Beverages</option>
                            <option value="service">Service</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">List Headline</h3>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Headline</th>
                        <th>Keyword</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($headline as $h)
                            <tr>
                                <td>{{ $h->headline_id }}</td>
                                <td>{{ $h->headline_text }}</td>
                                <td>{{ $h->keyword }}</td>
                                <td>{{ $h->created_at }}</td>
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