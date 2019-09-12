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
                    <form action="{{ route('events.storecooporatecalender') }}" method="post">
                    {!! csrf_field() !!}
                   <div class="form-group">
                        <label for="judulpengumuman">Judul pengumuman</label>
                        <input type="text" class="form-control" id="judulpengumuman" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label >Pilih divisi</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- Pilih divisi mana --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Detail pengumuman</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
