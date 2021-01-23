@extends('layouts.app')

@section('title')
    Home
@endsection

@section('css')
    
@endsection

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Welcome, Danial Adzhar</h3>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            <i class="fas fa-check"></i> New Keyword
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($keywords as $keyword)
                                <li class="list-group-item">{{ $keyword->keyword_text }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-light">
                            <i class="fas fa-list"></i> Mostly Used
                        </div>
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item">Barang boleh tukar</li>
                          <li class="list-group-item">Jaminan pulangan wang</li>
                          <li class="list-group-item">Boleh ganti baru</li>
                          <li class="list-group-item">Dijamni halal</li>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body px-5 py-5">
                                  <h5 class="card-title"><b>Build Your Headline</b></h5>
                                  <p class="card-text">Here you will be surveyed by the system to determine the appropriate headline, make sure you answer correctly, because if you enter incorrectly, you will get the wrong headline suggestions.</p>
                                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#findnow">Find Now <i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="findnow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Take a Survey</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form action="{{ url('headline/findnow') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <select class="form-control" name="business" required>
                                    <option value="">-- Type of Business --</option>
                                    @foreach($business as $b)
                                        <option value="{{ $b->business_id }}">{{ $b->business_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="emotion" required>
                                    <option value="">-- Type of Emotion --</option>
                                    @foreach($emotion as $e)
                                        <option value="{{ $e->emotion_id }}">{{ $e->emotion_text }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Find Now <i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection
