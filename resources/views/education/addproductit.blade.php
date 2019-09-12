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
                    <form action="{{ route('events.storecooporatecalender') }}" method="post">
                    {!! csrf_field() !!}
                   <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label >Upload Screenshot 1</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form-group">
                        <label >Upload Screenshot 2</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form-group">
                        <label >Upload Screenshot 3</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="form-group">
                        <label >Upload File(.ppt/.excel/.docx)</label>
                        <input type="file" name="" id="">
                    </div>

                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
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
