@extends('templates.main')
@section('title', 'Intranet - Product IT')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Product IT')
    @section('sub', 'BWA')

    @section('konten')
        @section('konten')
        @if(!Auth::user())
        @elseif(Auth::user()->name == 'admin')
          <a href="{{route('education.addproductit')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah Education tentang IT</a>
        @else
        @endif
        @if(session('success'))
          <div class="alert alert-success">
            {{session('success')}}
          </div>
        @endif
        @if(session('delete'))
          <div class="alert alert-danger">
            {{session('delete')}}
          </div>
        @endif
        @if(session('update'))
          <div class="alert alert-info">
            {{session('update')}}
          </div>
        @endif
        <div class="row">
            <div class="col-12">
            <div class="card shadow mb-5">
              <div class="card-header">
                 
                <h6 class="d-inline"><i class="fas fa-book"> </i> Daftar Document</h6>
                 <!-- Topbar Search -->
                <form action="{{url('/education/cari')}}" method="GET" class=" float-right d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input value="{{ old('cari') }}" type="text" name="cari" style="background-color:white !important" class="form-control border-0 small" placeholder="Cari Dokument..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
                <div class="card-body  pl-2 pr-2">
                  <ul class="list-group list-group-flush">
                    <!--looping list -->
                    <?php $i = 1 ?>

                    @foreach($masterdivisi as $divisi)
                    <a href="response()->file({{url('public/assets/document/1991889713-WebMeeting.pdf')}})" target="_blank"><li class="list-group-item">{{$i++}}.@if($masterdivisi == NULL) Data tidak ditemukan @else{{$divisi->judul}} @endif | <span>Divisi @if($masterdivisi == NULL) @else{{$divisi->nama_divisi}}@endif</span>
                      @if(!Auth::user())
                      @elseif(Auth::user()->name == 'admin')
                      <form action="@if($masterdivisi == NULL) @else{{$divisi->id_education}} @endif" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                        <button class="btn btn-danger float-right ml-1"><i class="fas fa-trash-alt text-white"></i></button>
                      </form>
                      <a href="@if($masterdivisi == NULL) @else{{$divisi->id_education}}/editproductit @endif" class="btn btn-success float-right"><i class="fas fa-edit text-white"></i></a>
                      @else
                      @endif
                    </li>
                    </a>
                    @endforeach
                    <!-- end looping   -->
                    <div class="btn btn-info btn-sm col-1 mt-3">Jumlah data : {{$masterdivisi->total()}} </div>
                    {{$masterdivisi->links()}}
                  </ul>
                  
              </div> 
            </div> 
        </div>
    @endsection('konten')
</div> <!-- end body  -->