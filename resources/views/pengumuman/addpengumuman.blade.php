@extends('templates.main')
@section('title', 'Intranet - Add Pengumuman')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Pengumuman')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ route('storepengumuman') }}" method="post">
                    @csrf
                   <div class="form-group">
                        <label for="judulpengumuman">Judul pengumuman</label>
                        <input type="text" value="{{old('judul')}}" name="judul" class="form-control @error('judul') is-invalid @enderror" id="judulpengumuman" placeholder="Judul">
                        @error('judul')
                            <div class="invalid-feedback">
                                *Kolom wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Pilih divisi</label>
                        <select name="divisi" id="" class="form-control @error('divisi') is-invalid @enderror">
                            <option value="">-- Pilih divisi mana --</option>
                            @foreach($masterdivisi as $divisi)
                                <option value="{{$divisi->id_divisi}}">{{$divisi->nama_divisi}}</option>
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
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">{{old('deskripsi')}}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                *Wajib ngisi isi pengumumannya
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
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
