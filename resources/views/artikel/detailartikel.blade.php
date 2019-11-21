@extends('templates.main')

@section('title', 'Intranet - Dashboard')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
            @section('judul', 'Dashboard')
            @section('sub', 'BWA')

        @section('konten') 
        <!-- Pengumuman -->
        <div class="container">
        <a href="{{route('artikel.index')}}" class="btn btn-outline-info mb-2"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="bd-example row mb-5 card shadow">
            <div class="col-md-12 " style="padding-right:0px !important;">
            <h1>{{$artikel->judul}}</h1>
            <div class="border-bottom"></div>
            <p><i class="fas fa-calendar"></i> {{$artikel->tanggal}}</p> 
            <img src="{{public_path('assets/artikel'.$artikel->foto)}}" alt="">
                {!! $artikel->deskripsi !!}
            </div>
        </div> 
        </div>
        <!-- end pengumuman  -->

     
     @endsection('konten')
        </div>
        <!-- /.container-fluid -->