@extends('templates.main')

@section('title', 'Intranet - artikel')

    <!-- template content start  -->
    <div class="container-fluid">
        @section('judul', 'Artikel')
        @section('sub', 'BWA')

        @section('konten')

        @section('konten')
        @if(!Auth::user())
        @elseif(Auth::user()->name == 'admin')
        <a href="{{route('addartikel')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah Artikel</a>
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
            <!-- artikel looping  -->
            @foreach($artikels as $artikel)
            <div class="col-12">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <!-- <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Foto</text></svg> -->
                      <img src="../public/assets/artikel/{{$artikel->foto}}" alt="Gambar tidak ditemukan">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-success">{{$artikel->judul}}</h5>
                            <p class="card-text"><small class="text-muted"><i class="fas fa-calendar"></i> {{$artikel->tanggal}}</small></p>
                            <p class="card-text" id="isicode">
                                 {!! str_limit(strip_tags($artikel->deskripsi), 350) !!}
                                <a href="{{$artikel->id_artikel.'/detail'}}" class="btn btn-info btn-sm">Baca Selengkapnya</a>
                            </p>
                            @if(!Auth::user())
                            @elseif(Auth::user()->name == 'admin')
                            <form action="{{$artikel->id_artikel}}" method="post">
                            @method('delete')
                            @csrf
                              <button class="btn btn-danger float-right ml-1" style="cursor:pointer;" data-toggle="modal" data-target="#deleteArtikel"><i class="fas fa-trash-alt text-white"></i></button>
                            </form>
                            <a class="btn btn-success float-right" href="{{$artikel->id_artikel}}/editartikel"><i class="fas fa-edit text-white"></i></a>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
            <!-- end looping artikel  -->
        </div>

            <!-- delete Modal-->
              <!-- <div class="modal fade" id="deleteArtikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus Artikel ini?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                      <div class="d-inline">
                      <a class="btn btn-danger w-50" style="border-radius:0 !important" href="{{}}">delete</a>
                      <button class="btn btn-dark w-50 float-right" style="border-radius:0 !important" type="button" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
                </div>
              </div> -->
        @endsection('konten')
    </div>


