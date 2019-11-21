@extends('templates.main')
@section('title', 'Intranet - Edit Projects')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Edit Projects')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ url('projects/edit/'.$projects->id_projects) }}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                   <div class="form-group">
                        <label for="nama_projects">nama projects</label>
                        <input type="text" class="form-control @error('nama_projects') is-invalid @enderror" value="{{$projects->nama_projects ?? old('nama_projects')}}" id="nama_projects"  name="nama_projects">
                        @error('nama_projects')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror('nama_projects')
                    </div>
                   
                   <div class="form-group">
                        <label for="divisi_projects">Divisi</label>
                        <select name="divisi_projects" id="" class="form-control @error('divisi_projects') is-invalid @enderror">
                            @foreach($masterdivisi as $divisi)
                            <option value="{{$divisi->id_divisi}}" 
                            @if($divisi->id_divisi == $projects->divisi_projects) selected @endif
                            >{{$divisi->nama_divisi}}</option>
                            @endforeach
                        </select>
                        @error('divisi_projects')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>
                    
                   <div class="form-group">
                        <label for="status_projects">Status projects</label>
                        <select name="status_projects" id="" class="form-control @error('status_projects') is-invalid @enderror">
                            <option value="Target" @if($projects->status_projects == 'Target') selected @endif>Target</option>
                            <option value="Delayed" @if($projects->status_projects == 'Delayed') selected @endif>Delayed</option>
                            <option value="Completed" @if($projects->status_projects == 'Completed') selected @endif>Completed</option>
                        </select>
                        @error('status_projects')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>

                   <div class="form-group">
                        <label for="date_projects"> Rencana Selesai Projects</label><span class="text-info"> *Optional</span>
                        <input type="date" name="date_projects" value="{{$projects->date_projects ?? old('date_projects')}}" class="form-control @error('date_projects') is-invalid @enderror" id="date_projects">
                        @error('date_projects')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>

                   <div class="form-group">
                        <label for="persentase_projects">persentase projects</label>
                        <input type="text"  name="persentase_projects" class="form-control @error('persentase_projects') is-invalid @enderror" value="{{$projects->persentase_projects ?? old('persentase_projects')}}" id="persentase_projects">
                        @error('persentase_projects')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="form-group  mt-4">
                        <button class="btn btn-primary mr-2 mt-2" type="submit">Edit</button>
                        <a href="{{ route('detailprojects')}}" class="btn btn-warning mt-2">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
