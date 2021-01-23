@extends('layouts.app')

@section('title')
    List Headline
@endsection

@section('css')
    
@endsection

@section('content')
<div class="container-fluid px-5 py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <h5 class="mb-4"><b><i class="fas fa-filter"></i> SEARCH FILTER</b></h5>

                    <h6 class="font-weight-bolder">SELECT EMOTION</h6>
                    @foreach($emotion as $e)
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="emotion" id="{{ $e->emotion_id }}" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/{{ $e->emotion_id }}">
                                <label class="form-check-label" for="{{ $e->emotion_id }}">
                                    {{ $e->emotion_text }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Available Headline for <b>"{{ $keyword }}"</b></h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($headline as $h)
                            <div class="col-md-6">
                                <a href="#" data-toggle="modal" data-target="#{{ $h->headline_id }}" class="text-decoration-none">
                                    <div class="card shadow">
                                        <div class="card-body bg-primary text-light py-4 px-4">
                                            <p class="d-inline-block text-truncate" style="max-width: 250px;">{{ $h->headline_text }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Contoh 1 -->
                            <div class="modal fade" id="{{ $h->headline_id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title">Display</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $h->headline_text }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection