@extends('templates.main')
@section('title', 'Intranet - Pengumuman')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Pengumuman')
    @section('sub', 'BWA')

    @section('konten')
    @if(!Auth::user())
    @elseif(Auth::user()->name == 'admin')
    <a href="{{route('addpengumuman')}}" class="btn btn-primary mb-2"><i class="fas fa-plus-square"></i> Tambah pengumuman</a>
    @else
    @endif
    <div class="row">
        <!-- looping pengumuman  -->
        <div class="col-6 py-2">
            <div class="card" id="card1">
                <div class="card-header">
                    @if(!Auth::user())
                    @elseif(Auth::user()->name == 'admin')
                    <a class="btn btn-danger float-right ml-1" style="cursor:pointer;" data-toggle="modal" data-target="#deletePengumuman"><i class="fas fa-trash-alt text-white"></i></a>
                    <a class="btn btn-success float-right"><i class="fas fa-edit text-white"></i></a>
                    @else
                    @endif
                    <h5>Pemadaman seluruh server</h5>
                    <small class="d-inline">Divisi</small> <small>IT</small>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pengumuman</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium minima architecto est obcaecati, a voluptates, dolor unde quia voluptatibus in beatae tempora labore provident, veritatis aspernatur accusantium officia aliquid?</p>
                </div>
            </div>
        </div><!-- end pengumuman  -->
    </div>

              <!-- delete Modal-->
              <div class="modal fade" id="deletePengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus Pengumuman ini?</h5>
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
              </div>
    @endsection('endkonten')
</div> <!-- end start body  -->