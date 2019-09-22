@extends('templates.main')
@section('title', 'Intranet - Add Tasks')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Tasks')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{route('storetasks')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Task">Nama Task</label>
                        <input  class="form-control @error('nama_tasks') is-invalid @enderror" type="text" name="nama_tasks" id="Task">
                        @error('nama_tasks')
                            <div class="invalid-feedback">
                                *Tasks wajib diisi
                            </div>
                        @enderror
                        <input hidden type="text" name="employee" value="{{Auth::user()->id}}">
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                            <a href="{{ route('dashboard')}}" class="btn btn-warning mt-2">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
