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
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e1" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e1">
                            <label class="form-check-label" for="e1">
                                Need of Guarantee
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e2" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e2">
                            <label class="form-check-label" for="e2">
                                Need of Variety
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e3" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e3">
                            <label class="form-check-label" for="e3">
                                Need of Excellent
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e4" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e4">
                            <label class="form-check-label" for="e4">
                                Need of Recognition
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e5" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e5">
                            <label class="form-check-label" for="e5">
                                Need of Achievement
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e6" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e6">
                            <label class="form-check-label" for="e6">
                                Need of Love
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e7" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e7">
                            <label class="form-check-label" for="e7">
                                Need of Growth
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="emotion" id="e8" onclick="window.open(this.value)" value="{{ url('headline') }}/{{ $business }}/e8">
                            <label class="form-check-label" for="e8">
                                Need of Contribution
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Available Headline for <b>"Jaminan pulangan wang"</b></h3>
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