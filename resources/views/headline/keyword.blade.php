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
    <div class="row">
        <div class="col-md-3">
            <a href="{{ url('headline') }}/{{ $business }}/{{ $emotion }}/jaminan-pulangan-wang" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Jaminan pulangan wang</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Berhasil 100%</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Dijamin halal</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Barang boleh tukar</b></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-3">
            <a href="{{ url('headline/beauty-gurantee-wangdipulangkansemula') }}" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Tiada bahan pengawet</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Boleh ganti baru</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Pasti berhasil</b></h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card shadow">
                    <div class="card-body bg-primary text-light py-4 px-4">
                        <h6 class="card-title"><b>Selamat digunakan</b></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection

@section('js')
    
@endsection