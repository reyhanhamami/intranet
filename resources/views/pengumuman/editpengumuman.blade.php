@extends('templates.main')
@section('title', 'Intranet - Edit Pengumuman')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Edit Pengumuman')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-warning pt-3">
                    <form action="{{ url ('pengumuman/'.$pengumuman->id_pengumuman) }}" method="post">
                    @method('patch')
                    @csrf
                   <div class="form-group">
                        <label for="judulpengumuman">Judul pengumuman</label>
                        <input type="text" value="{{$pengumuman->judul}}" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judulpengumuman" placeholder="Judul">
                        @error('judul')
                            <div class="invalid-feedback">
                                *Kolom wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Pilih divisi</label>
                        <select name="divisi" id="" class="form-control @error('divisi') is-invalid @enderror">
                            @foreach($masterdivisi as $divisi)
                                <option value="{{$divisi->id_divisi}}"
                                @if($divisi->id_divisi == $pengumuman->divisi)
                                selected
                                @endif    
                                >{{$divisi->nama_divisi}}</option>
                            @endforeach
                        </select>
                        @error('divisi')
                            <div class="invalid-feedback">
                                *Wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Detail pengumuman</label>
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">{{$pengumuman->deskripsi}}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                *Wajib ngisi isi pengumumannya
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Rubah</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('pengumuman')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
