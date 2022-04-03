@extends('app')
@section('content')

            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{ url('images') }}/{{ Auth::user()->foto }}"
                                    alt="profile.jpg" class="img-raised rounded-circle img-fluid"
                                    style="width: 300px; height:auto;">
                            </div>
                            <div class="name">
                                <h2 class="title">{{ Auth::user()->name }}</h2>
                                <h6></h6>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description text-center">
                    <p>
                        <h3><b>NIK : {{ Auth::user()->nik }}</b></h3>
                        <h3><b>Alamat : {{ Auth::user()->alamat }}</b></h3>
                        <h3><b>No Telepon : {{ Auth::user()->no_telp }}</b></h3>
                        <h3><b>Email : {{ Auth::user()->email }}</b></h3>
                    </p>
                    <br>
                    <br>
                </div>
                <div class="row">



                  <table class="table table-striped">
                    <thead>
                      <tr bgcolor="gray">
                        <th scope="col" style="font-family:Algerian;">#</th>
                        <th scope="col" style="font-family:Algerian;">Perjalanan</th>
                        <th scope="col" style="font-family:Algerian;">Tanggal</th>
                        <th scope="col" style="font-family:Algerian;">Jam</th>
                        <th scope="col" style="font-family:Algerian;">Lokasi</th>
                        {{-- <th scope="col" style="font-family:Algerian;">Kota</th> --}}
                        <th scope="col" style="font-family:Algerian;">Suhu Tubuh</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($perjalanan as $no => $isi)
                        <tr>
                            <th scope="row">{{ $no+1 }}</th>
                            {{-- <td>{{ $isi->user->name }}</td> --}}
                            <td>{{ $isi->nama_perjalanan }}</td>
                            <td>{{ $isi->tanggal }}</td>
                            <td>{{ $isi->jam }}</td>
                            <td>{{ $isi->lokasi }}</td>
                            {{-- <td>{{ $isi->kota->nama_kota }}</td> --}}
                            <td>{{ $isi->suhu_tubuh }}°C</td>
                            
                                
                        </tr>
                        @endforeach
                    </tbody>
                  </table> 
                  
                  <p style="font-family:Algerian;"> Total Perjalanan Anda Saat Ini : {{$perjalanan->total()}}</p>
                </div>
                <br><br><br>
                <form method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                  @csrf
              
                  <div class="form-group row">
                      <label for="name" class="col-md-2 col-form-label text-md-right">Nama</label>
              
                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
              
                          @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="nik" class="col-md-2 col-form-label text-md-right">nik</label>
              
                      <div class="col-md-6">
                          <input id="nik" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $user->nik }}" required autocomplete="nik">
              
                          @error('nik')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
              
                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
              
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="no_telp" class="col-md-2 col-form-label text-md-right">No Telepon</label>
                      <div class="col-md-6">
                          <input id="no_telp" type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ $user->no_telp }}" required autocomplete="no_telp" autofocus>
              
                          @error('no_telp')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>
                      <div class="col-md-6">
                          <textarea for="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" required="">{{ $user->alamat }}</textarea>
              
                          @error('alamat')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                    <label for="foto" class="col-md-2 col-form-label text-md-right">{{ __('Foto') }}</label>
                    <div class="col-md-6">
                        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" autocomplete="new-foto">
            
                        @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                  <div class="form-group row">
                      <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>
                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
              
                          @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                  </div>
              
                  <div class="form-group row">
                      <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                      <div class="col-md-6">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                      </div>
                  </div>
              
                  <div class="form-group row mb-0">
                      <div class="col-md-6 offset-md-2">
                          <button type="submit" class="btn btn-primary">
                              <i class="fa fa-pencil-alt"></i> Edit
                          </button>
                      </div>
                  </div>
              </form>
            </div>
        @stop