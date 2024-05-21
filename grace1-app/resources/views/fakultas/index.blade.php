@extends('layout.main')

@section('title', 'Fakultas')

@section('content')
   {{-- <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
        @foreach ($fakultas as $item)
            <li> {{$item["nama"]}} {{$item["singkatan"]}}</li>
        @endforeach
    </ul> --}}
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Fakultas</h4>
            <p class="card-description">
              Add class <code>.table</code>
            </p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Fakultas</th>
                    <th>Singkatan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                    <tr> 
                        <td>{{$item["nama"]}} </td>
                        <td>{{$item["singkatan"]}}</td>
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