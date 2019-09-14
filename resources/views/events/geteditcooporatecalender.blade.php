@extends('templates.main')
@section('title', 'Intranet - Edit Cooporate event')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Edit Cooporate event')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row ">
            <div class="col-12 ">
                <div class="card shadow border-left-warning container">
                    <form action="{{ url('events/'.$event->id_eventcooporate) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                        <div class="form-group  ">
                            <label for="acara" class="form-label  col-form-label">Nama Acara</label>
                            <input id="acara" type="text" value="{{$event->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Acaranya apa?" name="title">
                            @error('title')
                            <div class="invalid-feedback">
                                *Kolom acara wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="foto" class="form-label d-block  col-form-label">Rubah Foto Acara? (Ukuran 447 width 401 height pixel)</label>
                            <img src='{{url("public/assets/cooporateevent/".$event->foto)}}' alt="gambar ngak ada" width="100" height="100"> <small>*Gambar sebelumnya</small>
                            <input id="foto" type="file" value="{{$event->foto}}"  class="form-control @error('foto') is-invalid @enderror" name="foto">
                            @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="warna" class="form-label  col-form-label">Warna</label>
                            <input id="warna" value="{{$event->color}}" type="color" class="form-control " name="color">
                        </div>
                        <div class="form-group  ">
                            <label for="start-date" class="form-label  col-form-label">Dari tanggal</label>
                            <input id="start-date" type="date" value="{{$event->start_date}}"  class="form-control @error('start_date') is-invalid @enderror" name="start_date">
                            @error('start_date')
                                <div class="invalid-feedback">
                                *Tanggal Wajib diisi
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="end-date" class="form-label  col-form-label">Sampai tanggal</label>
                            <input id="end-date" type="date" value="{{$event->end_date}}" class="form-control @error('end_date') is-invalid @enderror" name="end_date">
                            @error('end_date')
                            <div class="invalid-feedback">
                                *Tanggal wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="deskripsi" class="form-label  col-form-label">Deskripsi ringkas tentang acara</label>
                            <textarea name="deskripsi" id="deskripsi" class="@error('deskripsi') is-invalid @enderror">{{$event->deskripsi}}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                *deskripsi wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="url" class="form-label  col-form-label d-inline">Url atau link acara <small class="text-info">*optional bisa dikosongkan</small></label>
                            <input id="url" type="text" value="{{$event->url}}" class="form-control " name="url" placeholder="https:://">
                        </div>
                        <div class="form-group  ml-3 mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Rubah</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('events.cooporatecalender')}}" class="btn btn-warning mt-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
@section('scriptExternal')
    <script>
        $(document).ready(function(){
            $('#deskripsi').summernote({
                height:250,
                codeviewFilter: false,
                codeviewIframeFilter: true,
                popover:[

                ]
            });
        })
    </script>
@endsection(scriptExternal)