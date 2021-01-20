@extends('admin.layouts.app')

@section('title')
    Add Business
@endsection

@section('css')
    
@endsection

@section('content')
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Add Business</h3>
        <p class="panel-subtitle">Below list will be use on headline</p>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="business" placeholder="Your text here" required>
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
                        <tr>
                            <td>b0</td>
                            <td>Service</td>
                            <td>2020-01-19 12:09:14</td>
                            <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>b1</td>
                            <td>Beauty</td>
                            <td>2020-01-19 12:09:14</td>
                            <td><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>b2</td>
                            <td>Food & Beverages</td>
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