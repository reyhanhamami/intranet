@extends('templates.main')

@section('title', 'Intranet - Detail Employee')

    <!-- start content -->
    <div class="container-fluid">
    @section('judul', 'Detail Employee')
    @section('sub', 'BWA')
        @section('konten')

            <!-- start row  -->
             <div class="row container">
              <!-- looping data karyawan  -->
              <div class="card mx-auto" style="width: 20rem;">
                <img src="{{url('public/assets/listemployee/'.$listemployee->foto)}}" alt="">
                <div class="card-body">
                   <div class="card-post__author d-flex">
                      <h1 class="card-post__category badge badge-pill badge-info mt-3 mx-auto">{{$listemployee->nama}}</h1>
                    </div>
                     <div class="text-center">
                      <h1 class="card-post__category badge badge-pill badge-info ">{{$join[0]->nama_divisi}}</h1>
                      <h1 class="card-post__category badge badge-pill badge-info ">{{$listemployee->jabatan}}</h1>
                      <br>
                      <span class="text-muted"> {{$listemployee->handphone}}</span>
                    </div>
                 
                    <a class="btn btn-info text-white " href="mailto:{{$listemployee->email}}">
                      <span class="text-white">Kirim <i class="fas fa-paper-plane">  email</i> <br> {{$listemployee->email}}</span>
                    </a>
                    <br>
                    <a href="{{route('listemployee')}}" class="text-muted "><i class="fas fa-arrow-alt-circle-left"></i> back</a>
                 
                </div>
              </div>
       
              <!-- end data karyawan  -->
      
        
            <!-- end row  -->
              
        @endsection('konten')
    </div>