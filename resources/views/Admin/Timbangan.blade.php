@extends('Admin.layout.main-dashboard')
@section('timbangan')

@include('Admin.template.navbar')

<div class="container-fluid">
  @include('Admin.template.sidebar')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <h2>Hasil Timbangan</h2>
        <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Total Berat</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                </tr>
                <tr>
                  <td>1,001</td>
                  <td>random</td>
                  <td>data</td>
                  <td>placeholder</td>
                </tr>

              </tbody>
            </table>







      </div>
    </main>
@endsection
