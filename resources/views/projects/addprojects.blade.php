@extends('templates.main')
@section('title', 'Intranet - Add Projects')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Add Projects')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card container shadow border-left-success pt-3">
                    <form action="{{ route('storeprojects') }}" method="post" enctype="multipart/form-data">
                    @csrf
                   <div class="form-group">
                        <label for="nama_projects">nama projects</label>
                        <input type="text" placeholder="example : HRIS" class="form-control @error('nama_projects') is-invalid @enderror" value="{{old('nama_projects')}}" id="nama_projects"  name="nama_projects">
                        @error('nama_projects')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror('nama_projects')
                    </div>
                   
                   <div class="form-group">
                        <label for="divisi_projects">Divisi</label>
                        <select name="divisi_projects" id="" class="form-control @error('divisi_projects') is-invalid @enderror">
                            <option value="">-- Pilih divisi --</option>
                            @foreach($masterdivisi as $divisi)
                            <option value="{{$divisi->id_divisi}}">{{$divisi->nama_divisi}}</option>
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
                            <option value="">-- status projects --</option>
                            <option value="Target">Target</option>
                            <option value="Delayed">Delayed</option>
                            <option value="Completed">Completed</option>
                        </select>
                        @error('status_projects')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>

                   <div class="form-group">
                        <label for="date_projects"> Rencana Selesai Projects</label><span class="text-info"> *Optional</span>
                        <input type="date" name="date_projects" value="{{old('date_projects')}}" class="form-control @error('date_projects') is-invalid @enderror" id="date_projects">
                        @error('date_projects')
                            <div class="invalid-feedback">
                                *wajib diisi
                            </div>
                        @enderror
                    </div>

                   <div class="form-group">
                        <label for="persentase_projects">persentase projects</label>
                        <input type="text" placeholder="example : 0-100" name="persentase_projects" class="form-control @error('persentase_projects') is-invalid @enderror" value="{{old('persentase_projects')}}" id="persentase_projects">
                        @error('persentase_projects')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                   
                    <div class="form-group  mt-4">
                        <button class="btn btn-primary mr-2 mt-2" type="submit">Simpan</button>
                        <a href="{{ route('projects.index')}}" class="btn btn-warning mt-2">Kembali</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
