@extends('layout.main')

@section('title', 'Prodi')

@section('content')
   {{-- <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
        @foreach ($fakultas as $item)
            <li> {{$item["nama"]}} {{$item["singkatan"]}}</li>
        @endforeach
    </ul> --}}
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Prodi</h4>
            <p class="card-description">
              Add class <code>.table</code>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Prodi</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($prodi as $item)
                    <tr> 
                        <td>{{$item["nama"]}} </td>
                        <td>{{$item["singkatan"]}}</td>
                        <td>{{$item["fakultas"] ["nama"]}}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
 @endsection
