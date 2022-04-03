@extends('app')
@section('content')

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
            <div class="row">
                @include('layouts.profilClude')
                <div class="col-lg-9 col-md-6">
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
                            <td>{{ $user->no_telp }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <div class="mt-5">
        <form method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">@csrf

            <div class="form-group">
                <label for="exampleFormControlInput1">NIK</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="nik"
                    value="{{ $user->nik }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" name="name"
                    value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">No Telepon</label>
                <input type="number" class="form-control" id="exampleFormControlInput4" name="no_telp"
                    value="{{ $user->no_telp }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput4">Foto</label>
                <input type="file" class="form-control" id="exampleFormControlInput4" name="foto">
            </div>
            <div class="form-group">
                <label class="form-label">Provinsi</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectProvinsi">Provinsi</label>
                    </div>
                    <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                        {{-- <option>Provinsi</option> --}}
                    </select>
                </div>
            </div>
            {{-- kabupaten/kota --}}
            <div class="form-group">
                <label class="form-label">Kabupaten</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKabupaten">Kabupaten</label>
                    </div>
                    <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                        {{-- <option>Kabupaten</option> --}}
                    </select>
                </div>
            </div>
            {{-- kecamatan --}}
            <div class="form-group">
                <label class="form-label">Kecamatan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKecamatan">Kecamatan</label>
                    </div>
                    <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                        {{-- <option value="Kecamatan"></option> --}}
                    </select>
                </div>
            </div>
            {{-- kelurahan --}}
            <div class="form-group">
                <label class="form-label">Kelurahan</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="selectKelurahan">Kelurahan</label>
                    </div>
                    <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                        {{-- <option> Kelurahan </option> --}}
                    </select>
                </div>
            </div>

            {{-- final alamat --}}
            <div class="form-group">
                <label class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat">{{ $user->alamat }}</textarea>
            </div>
            {{-- end alamat --}}
            <div class="form-group">
                <label for="exampleFormControlInput4">No Telepon</label>
                <input type="number" class="form-control" id="exampleFormControlInput4" name="no_telp"
                    value="{{ $user->no_telp }}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput5">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput5" name="email"
                    value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="passwoord">{{ __('Password') }}</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
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
    <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKabupaten = document.getElementById('selectKabupaten');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener('DOMContentLoaded', function() {
            fetchProvinsi();
            selectKabupaten.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            getValueToAlamat();
        });
        const config = {
            method: 'GET'
        }
        // fetch provinsi get data
        async function fetchProvinsi() {
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
            await fetch(URL, config)
                .then(response => response.json())
                // .then(provinsi => console.log(provinsi))
                .then(provinsi => {
                    if (provinsi != null || undefined) {
                        provinsi.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectProvinsi.appendChild(opt);
                            // console.log(selectProvinsi)
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectProvinsi.appendChild(opt);
                    }
                }).catch(error => alert(`Data provinsi tidak ada`));
        }
        // fetch kabupaten/kota get data
        async function fetchKabupaten(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kabupaten => {
                    if (kabupaten !== null || undefined) {
                        kabupaten.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKabupaten.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKabupaten.appendChild(opt);
                    }
                })
        }
        // fetch kecamatan get data
        async function fetchKecamatan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kecamatan => {
                    if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKecamatan.appendChild(opt);
                    }
                })
        }

        async function fetchKelurahan(id) {
            const URL =
                `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
                .then(response => response.json())
                .then(kelurahan => {
                    if (kelurahan !== null || undefined) {
                        kelurahan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKelurahan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data Tidak Tersedia";
                        selectKelurahan.appendChild(opt);
                    }
                })
        }
        selectProvinsi.addEventListener('change', () => {
            fetchKabupaten(selectProvinsi.value);
            selectKabupaten.style.display = "block";
            selectKabupaten.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKabupaten.addEventListener('change', () => {
            fetchKecamatan(selectKabupaten.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });

        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });

        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value =
                    `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);

            });
        }
    </script>

@stop
