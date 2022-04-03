@extends('app')
@section('content')
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @include('layouts.profilClude')
                <div class="col-lg-9 col-md-6">
                    <table class="table table-hover ">
                        <thead>
                            <tr align="center">
                                <th scope="col" style="font-family:Algerian;">#</th>
                                <th scope="col" style="font-family:Algerian;">Perjalanan</th>
                                <th scope="col" style="font-family:Algerian;">Tanggal</th>
                                <th scope="col" style="font-family:Algerian;">Jam</th>
                                <th scope="col" style="font-family:Algerian;">Lokasi</th>
                                <th scope="col" style="font-family:Algerian;">Suhu Tubuh</th>
                                <th scope="col" style="font-family:Algerian;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $no => $isi)
                                <tr align="center">
                                    <th scope="row">{{ $no + 1 }}</th>
                                    <td>{{ $isi->nama_perjalanan }}</td>
                                    <td>{{ $isi->tanggal }}</td>
                                    <td>{{ $isi->jam }}</td>
                                    <td>{{ $isi->lokasi }}</td>
                                    <td>{{ $isi->suhu_tubuh }}°C</td>
                                    <td align="center">
                                        <a href="/perjalanan/destroy/{{ $isi->id }}" class="btn btn-danger"><i
                                                class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="/perjalanan/create" class="btn btn-primary btn-sm btn-block">Tambah <i
                            class="fa fa-square-plus"></i></a>
                </div>
            </div>
        </div>
    </section>
    
@stop

{{-- @extends('app')
@section('content')

    <section id="portfolio" class="portfolio">
        <div class="row">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <img src="{{ url('images') }}/{{ Auth::user()->foto }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ Auth::user()->name }}</h4>
                    <p>{{ Auth::user()->email }}</p>
                    <a href="{{ url('images') }}/{{ Auth::user()->foto }}" data-gallery="portfolioGallery"
                        class="portfolio-lightbox preview-link" ><i class="bx bx-user"></i></a>
                    <a href="/logout" class="details-link" title="More Details"><i class="bx bx-power-off"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <table class="table table-hover ">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{ $user->nik }}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ $user->alamat }}</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td>{{ $user->no_telp}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>


    <div>
        <form method="POST" action="/perjalanan/store">@csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">NIK</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nik" value="{{}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Tanggal Perjalanan</label>
                <input type="date" class="form-control" id="exampleFormControlInput2" placeholder="Wisata, Jalan-jalan, dll.">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput3">Jam Perjalanan</label>
                <input type="Time" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Lokasi Perjalanan</label>
                <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Gunung, Pantai, dll.">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput5">Suhu Tubuh </label>
                <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="36.5°C">
            </div>
            <div class="row">
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="/perjalanan" class="btn btn-danger">Kembali</a>
                </div>
                <div class="col-md-6 ">
                    <button type="submit" class="btn btn-primary">
                        Edit
                    </button>
                </div>
            </div>
    
    
        </form>
    </div>

@stop --}}
