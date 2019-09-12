@extends('templates.main')

@section('title', 'Intranet - List Employee')

    <!-- start content -->
    <div class="container-fluid">
    @section('judul', 'List Employee')
    @section('sub', 'BWA')
        @section('konten')
          @if(!Auth::user())
          @elseif(Auth::user()->name == 'admin')
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
            <div class="row mt-4">
            <div class="col-12">
             <!-- Divisi IT -->
             <h4>Divisi IT </h4>
            <div class="card-group">
              <!-- looping employee  -->
              @foreach($join as $joins)
              <div class="card">
                <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><rect width="100%" height="100%" fill="#868e96"></rect><title>Placeholder</title><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Foto</text></svg> -->
                <img src="../public/assets/listemployee/{{$joins->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$joins->nama}}</h5>
                  <small class="text-muted">{{$joins->jabatan}}</small>
                  <p class="mt-3">Email : <a href="mailto:{{$joins->email}}">{{$joins->email}}</a></p>
                  <p>HP : <span>{{$joins->handphone}}</span></p>
                  <button class="btn btn-primary">Kirim pesan <i class='fab fa-telegram-plane'> </i></button>
                    @if(!Auth::user())
                    @elseif(Auth::user()->name == 'admin')
                    <form action="{{$joins->id_employee}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                      <button class="btn btn-danger ml-1" style="cursor:pointer;"><i class="fas fa-trash-alt text-white" data-toggle="modal" data-target="#deleteModal"></i></button>
                    </form>
                    <a href="{{$joins->id_employee}}/editemployee" class="btn btn-success" style="cursor:pointer;"><i class="fas fa-edit text-white"></i></a>
                    @else
                    @endif
                </div>
                <div class="card-footer">
                  <small class="text-muted">Support For BWA</small>
                </div>
              </div>
              @endforeach
              <!-- end looping employee  -->
            </div>
            </div>
            </div><!-- end divisi it -->

              <!-- delete Modal-->
              <!-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus karyawan ini?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                      <div class="d-inline">
                      <a class="btn btn-danger w-50" style="border-radius:0 !important" href="{{route('listemployee')}}">delete</a>
                      <button class="btn btn-dark w-50 float-right" style="border-radius:0 !important" type="button" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
                </div>
              </div> -->
        @endsection('konten')
    </div>