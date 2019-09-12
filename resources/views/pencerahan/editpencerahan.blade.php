@extends('templates.main')
@section('title', 'Intranet - Edit Quran/Hadist/Qoutes')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Edit Quran/Hadist/Qoutes')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-warning pt-3">
                    <form action="{{url ('/pencerahan/' .$pencerahan->id_pencerahan)}}" method="post">
                    @method('patch')
                    @csrf
                   <div class="form-group">
                        <label for="judulartikel">Quran/Hadist/Qoutes</label>
                            <select  name="type" id="" class="form-control @error('type') is-invalid @enderror">
                                @foreach($mastertype as $type)
                                <option value="{{$type->id_type}}" @if($pencerahan->type == $type->id_type) selected @endif>{{$type->nama}}</option>    
                                @endforeach                
                            </select>
                        @error('type')
                            <div class="invalid-feedback">
                            *wajib dipilih
                            </div>
                        @enderror
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Quran/Hadist/Quotes</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">{{$pencerahan->deskripsi}}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                *Deskripsi wajib diisi
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Rubah</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('pencerahan')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
