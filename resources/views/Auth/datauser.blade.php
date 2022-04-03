@extends('app')
@section('content')
<div class="site-blocks-cover">
  <div class="container">
      <div class="row align-items-center justify-content-center">

          <div class="col-md-12 aos-init aos-animate" style="position: relative;" data-aos="fade-up">

              <div class="row">
                  <div class="col-md-6">
                      <p style="margin: 0; font-size: 24px; font-weight: 700; color: #012970;">Data User</p>
                  </div>
                  <div class="col-md-6">
                    <a href="/datauser/pdf" target="_blank" class=" d-flex justify-content-end">Cetak PDF</a>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nik</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Telpon</th>
        <th scope="col">Role</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $id => $datauser)
      <tr>
        <td>{{ $id + 1 }}</td>
        <td>{{ $datauser['nik'] }}</td>
        <td>{{ $datauser['name'] }}</td>
        <td>{{ $datauser['email'] }}</td>
        <td>{{ $datauser['no_telp'] }}</td>
        <td>{{ $datauser['role'] }}</td>
      </tr>
  @endforeach
    </tbody>
  </table>
  </nav>
@stop