@extends('templates.main')
@section('title', 'Intranet - tasks')

<!-- start body -->
<div class="container-fluid">
    @section('judul', 'Tasks')
    @section('sub', 'BWA')

    @section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card container shadow border-left-success pt-3">
                    <form action="{{route('storetasks')}}" method="post">
                    @csrf
                    <h3>Push tugas ke anggota team</h3>
                    <div class="form-group">
                        <label for="employee">Nama Karyawan</label>
                        <select name="employee" id="employee" class="form-control">
                            <option value="">-- pilih karyawan --</option>
                            @foreach($user as $users)
                            <option value="{{$users->id}}">{{$users->name}}</option>
                            @endforeach
                        </select>
                        @error('employee')
                            <div class="invalid-feedback">
                                *Tasks wajib diisi
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Task">Nama Task</label>
                        <input  class="form-control @error('nama_tasks') is-invalid @enderror" type="text" name="nama_tasks" id="Task">
                        @error('nama_tasks')
                            <div class="invalid-feedback">
                                *Tasks wajib diisi
                            </div>
                        @enderror
                    </div>
                        <div class="form-group  mt-4">
                            <button class="btn btn-primary mr-2 mt-2" type="submit">Kirim <i class="fas fa-paper-plane"></i></button>
                            <!-- <a href="" class="btn btn-primary mr-2 mt-2">Simpan</a> -->
                        </div>
                    </form>
                </div> 
        </div>
    </div>
        <!-- section 2 -->
        <div class="row">
            <div class="col-6 py-2">
                <div class="card">
                    <div class="card-header">
                    @if(empty($tasks[0]))
                    @else
                        <h5>{{$join[0]->name}}</h5>
                    @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title border-bottom">List Tasks :</h5>
            @foreach($join as $joins)
                        <h6 class="card-text border-bottom">{{$joins->nama_tasks}}</h6>
            @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection('konten')
</div>