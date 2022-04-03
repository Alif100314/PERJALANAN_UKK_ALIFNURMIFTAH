{{-- @extends('app')
@section('content')
   
@stop--}}

@extends('app')
@section('content')
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @include('layouts.profilClude')
                <div class="col-lg-9 col-md-6">
                    <form method="POST" action="/perjalanan/store">@csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Perjalanan</label>
                            <input type="text" name="nama_perjalanan" class="form-control" id="exampleFormControlInput1" placeholder="Wisata, Jalan-jalan, dll.">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Tanggal Perjalanan</label>
                            <input type="date" name="tanggal" class="form-control" id="exampleFormControlInput2" placeholder="Wisata, Jalan-jalan, dll.">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Jam Perjalanan</label>
                            <input type="Time" name="jam" class="form-control" id="exampleFormControlInput3">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Lokasi Perjalanan</label>
                            <input type="text" name="lokasi" class="form-control" id="exampleFormControlInput4" placeholder="Lokasi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput5">Suhu Tubuh </label>
                            <input type="text" name="suhu_tubuh" class="form-control" id="exampleFormControlInput5" placeholder="36.5°C">
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-end">
                                <a href="/perjalanan" class="btn btn-danger">Kembali</a>
                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </div>
                        </div>
                
                
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@stop
