@extends('templates.main')
@section('title', 'Intranet - Add Artikel')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Artikel')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ route('events.storecooporatecalender') }}" method="post">
                    {!! csrf_field() !!}
                   <div class="form-group">
                        <label for="judulartikel">Judul Artikel</label>
                        <input type="text" class="form-control" id="judulartikel" placeholder="Judul">
                    </div>
                   <div class="form-group">
                        <label for="judulartikel">Upload gambar ukuran 358x250 pixel</label>
                        <input type="file">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Artikel</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('artikel.index')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
