@extends('templates.main')

@section('title', 'Intranet - List Employee')

    <!-- start content -->
    <div class="container-fluid">
    @section('judul', 'List Employee')
    @section('sub', 'BWA')
        @section('konten')
          @if(!Auth::user())
          @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
            <a href="{{route('addlistemployee')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah data karyawan</a>
          @else
          @endif
          @if(session('success'))
           <div class="alert alert-success">{{session('success')}}</div>
          @endif
          @if(session('hapus'))
            <div class="alert alert-danger">{{session('hapus')}}</div>
          @endif
          @if(session('update'))
            <div class="alert alert-info">{{session('update')}}</div>
          @endif
            <!-- start row  -->
    
          
            <div class="card shadow mb-5">
              <div class="card-header">
                 
                <h6 class="d-inline"><i class="fas fa-users"> </i> Daftar karyawan</h6>
                 <!-- Topbar Search -->
                <form action="{{url('/listemployee/cari')}}" method="GET" class="float-right d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input value="{{ old('cari') }}" type="text" name="cari" style="background-color:white !important" class="form-control border-0 small" placeholder="Cari karyawan..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
                <!-- end search  -->
              
              <!-- looping data karyawan  -->
             <div class="row container">
              @foreach($join as $joins)
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{$joins->nama}}</h5>
                      <h6>{{$joins->jabatan}} - {{$joins->nama_divisi}}</h6>
                      <a href="mailto:{{$joins->email}}"><p class="card-text"><i class="fas fa-envelope"></i> {{$joins->email}} </a> </p>
                      <p class="h6"><i class="fas fa-mobile"></i> {{$joins->handphone}}</p>
                      <a href="detail/{{$joins->id_employee}}" class="btn btn-primary "><i class="fas fa-clipboard-list text-white"> Detail</i></a>
                      @if(!Auth::user())
                      @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                      <form action="{{$joins->id_employee}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                        <button class="btn btn-danger float-right ml-1"><i class="fas fa-trash-alt text-white"></i></button>
                      </form>
                      <a href="{{$joins->id_employee}}/editemployee" class="btn btn-success float-right"><i class="fas fa-edit text-white"></i></a>
                      @else
                      @endif
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
              <!-- end data karyawan  -->

              </div>
            </div>
      
        
            <!-- end row  -->
              
        @endsection('konten')
    </div>