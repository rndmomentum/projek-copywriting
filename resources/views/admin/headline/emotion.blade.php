@extends('admin.layouts.app')

@section('title')
    Add Emotion
@endsection

@section('css')
    
@endsection

@section('content')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Add Emotion</h3>
        <p class="panel-subtitle">Below list will be use on headline</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="emotion" placeholder="Your text here" required>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
            </div>
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
                        <tr>
                            <td>e0</td>
                            <td>Need of Guarantee</td>
                            <td>2020-01-19 12:09:14</td>
                            <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>e1</td>
                            <td>Need of Variety</td>
                            <td>2020-01-19 12:09:14</td>
                            <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection