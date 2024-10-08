@extends('layouts.layout')

@section('title')
    <title>Pemain MU</title>
@endsection

@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Daftar Pemain</h2>
        <table class="table table-stripped">
            <thead class="text-center">
                <tr class="table-primary">
                    <th>id</th>
                    <th>Nama Pemain</th>
                    <th>No Punggung</th>
                    <th>Posisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_pemain as $pemain)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pemain->nama_pemain }}</td>
                        <td>{{ $pemain->no_punggung }}</td>
                        <td>{{ $pemain->posisi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection