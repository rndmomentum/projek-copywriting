@extends('layouts.app')

@section('title')
    Available Keywords
@endsection

@section('css')
    
@endsection

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Choose Keywords</h3>
            <hr>
        </div>
    </div>
    @foreach($headline as $keyword)
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('headline') }}/{{ $business }}/{{ $emotion }}/{{ $keyword->keyword }}" class="text-decoration-none">
                    <div class="card shadow">
                        <div class="card-body bg-primary text-light py-4 px-4">
                            <h6 class="card-title"><b>{{ $keyword->keyword_text }}</b></h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('js')
    
@endsection