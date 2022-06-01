@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Data Siswa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('sisw.index') }}"> Back</a>
            </div>
        </div>
    </div>
    
    <table border="1"  height="50">
        <tr>
            <th width="200">Nama Siswa:</th>
            <td  width="500">{{$sisw->NamaSiswa}}</td>
        </tr>
        <tr>
            <th>NIS:</th>
            <td >{{$sisw->NIS}}</td>
        </tr>
        <tr>
            <th>TTL:</th>
            <td >{{$sisw->TTL}}</td>
        </tr>
        <tr>
            <th>Orang Tua:</th>
            <td >{{$sisw->OrangTua}}</td>
        </tr>
        <tr>
            <th>Alamat:</th>
            <td >{{$sisw->Alamat}}</td>
        </tr>

    </table>
    <br>
    <form method="convert">
    <button onclick="window.print()" type="button" class="btn btn-success">CETAK</button>    
    </form>
    @endsection
