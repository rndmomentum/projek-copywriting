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
@endsection

@section('js')
    
@endsection