@extends('templates.main')
@section('title', 'Intranet - Add personal event')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add personal event')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row ">
            <div class="col-12 ">
                <div class="card shadow border-left-success container">
                    <form action="{{ route('storepersonalevent') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group  ">
                            <label for="acara" class="form-label  col-form-label">Nama Acara</label>
                            <input id="acara" type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Acaranya apa?" name="title">
                            @error('title')
                            <div class="invalid-feedback">
                                *Kolom acara wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="foto" class="form-label  col-form-label">Foto Acara (Ukuran 447 width 400 height pixel)</label>
                            <input id="foto" type="file"  class="form-control @error('foto') is-invalid @enderror" name="foto">
                            @error('foto')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="warna" class="form-label  col-form-label">Warna</label>
                            <input id="warna" type="color" class="form-control " name="color">
                        </div>
                        <div class="form-group  ">
                            <label for="start-date" class="form-label  col-form-label">Dari tanggal</label>
                            <input id="start-date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date">
                            @error('start_date')
                                <div class="invalid-feedback">
                                *Tanggal Wajib diisi
                                </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="end-date" class="form-label  col-form-label">Sampai tanggal</label>
                            <input id="end-date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date">
                            @error('end_date')
                            <div class="invalid-feedback">
                                *Tanggal wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="deskripsi" class="form-label  col-form-label">Deskripsi ringkas tentang acara</label>
                            <textarea name="deskripsi" id="deskripsi" class="@error('deskripsi') is-invalid @enderror">{{old('deskripsi')}}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                *deskripsi wajib diisi
                            </div>
                            @enderror
                        </div>
                        <div class="form-group  ">
                            <label for="url" class="form-label  col-form-label d-inline">Url atau link acara <small class="text-info">*optional bisa dikosongkan</small></label>
                            <input id="url" type="text" value="{{old('url')}}" class="form-control " name="url" placeholder="https:://">
                        </div>
                        <div class="form-group  ml-3 mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('personalevent')}}" class="btn btn-warning mt-2">Cancel</a>
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
                popover:[

                ]
            });
        })
    </script>
@endsection(scriptExternal)