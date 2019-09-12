@extends('templates.main')
@section('title', 'Intranet - Add Quran/Hadist/Qoutes')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Quran/Hadist/Qoutes')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ route('storepencerahan') }}" method="post">
                    @csrf
                   <div class="form-group">
                        <label for="judulartikel">Quran/Hadist/Qoutes</label>
                            <select  name="type" id="" class="form-control @error('type') is-invalid @enderror">
                                <option value="">-- Pilih --</option>
                                @foreach($type as $tipe)
                                <option value="{{ $tipe->id_type}}">{{$tipe->nama}}</option>
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
                        <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">{{old('deskripsi')}}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                *Deskripsi wajib diisi
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
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
