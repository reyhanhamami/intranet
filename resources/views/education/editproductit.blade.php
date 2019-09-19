@extends('templates.main')
@section('title', 'Intranet - Add Education ProductIT')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Education ProductIT')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ url('education/'.$education->id_education) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                   <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" value="{{$education->judul}}" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="Judul">
                        @error('judul')
                            <div class="invalid-feedback">
                             *judul wajib diisi
                            </div>   
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="judul">Divisi</label>
                        <select name="divisi" id="" class="form-control @error('divisi') is-invalid @enderror">
                            
                            @foreach($masterdivisi as $divisi)
                                <option value="{{$divisi->id_divisi}}"
                                @if($divisi->id_divisi == $education->divisi) selected @endif
                                >{{$divisi->nama_divisi}}</option>
                            @endforeach
                        </select>
                        @error('divisi')
                            <div class="invalid-feedback">
                             *divisi wajib diisi
                            </div>   
                        @enderror
                    </div>
                    <div class="form-group">
                        <label >Upload File(.pdf)</label>
                        <input type="file" name="file" id="" class="form-control @error('file') is-invalid @enderror">
                        @error('file')
                            <div class="invalid-feedback">
                             {{$message}}
                            </div>   
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Rubah</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('education.productit')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
