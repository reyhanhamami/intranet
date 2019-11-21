@extends('templates.main')
@section('title', 'Intranet - Pencerahan')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Pencerahan')
    @section('sub', 'BWA')

    @section('konten')
    @if(!Auth::user())
    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
    <a href="{{route('addpencerahan')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah Quran/Hadist/Qoutes</a>
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
    <div class="row">
        <!-- looping pengumuman  -->
        @foreach($pencerahan as $cerah)
        <div class="col-6 py-2">
            <div class="card" id="card1">
                <div class="card-header">
                    @if(!Auth::user())
                    @elseif(Auth::user()->name == 'admin' or Auth::user()->login == 'Indra.Purnama')
                        <form action="{{$cerah->id_pencerahan}}" class="d-inline" method="post">
                        @method('delete')
                        @csrf
                            <button class="btn btn-danger float-right ml-1 " data-toggle="model" data-target="#deletePencerahan"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    <!-- <a class="btn btn-danger float-right ml-1" style="cursor:pointer;" data-toggle="modal" data-target="#deletePencerahan"><i class="fas fa-trash-alt text-white"></i></a> -->
                    <a href="{{$cerah->id_pencerahan}}/editpencerahan" class="btn btn-success float-right"><i class="fas fa-edit text-white"></i></a>
                    @else
                    @endif
                    <h5>{{ $cerah->nama}}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">{{$cerah->deskripsi}}</p>
                </div>
            </div>
        </div><!-- end Pencerahan  -->
        @endforeach
    </div>

              <!-- delete Modal-->
              <!-- <div class="modal fade" id="deletePencerahan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus data ini?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                      <div>
                        <form action="{{$cerah->id_pencerahan}}" class="d-inline">
                        @method('delete')
                        @csrf
                            <button class="btn btn-danger w-50 " style="border-radius:0 !important">delete</button>
                        </form>
                            <button class="btn btn-dark w-50 float-right" style="border-radius:0 !important" type="button" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
                </div>
              </div> -->
    @endsection('endkonten')
</div> <!-- end start body  -->