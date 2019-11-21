@extends('templates.main')
@section('title', 'Intranet - Detail Projects')

<!-- start template -->
<div class="container-fluid">
    @section('judul', 'Detail Projects')
    @section('sub', 'BWA')

    @section('konten')
        <div class="row">
            <div class="col-12">
                <div class="card shadow border-left-warning">
                       <!-- upcoming joinss personal-->
                        <div class="col-12">
                            <div class="card shadow">
                            <div class="card-header">
                                <h6>Upcoming Personal joinss</h6>
                                <a href="{{ route('projects.index')}}" class="btn btn-secondary mt-2"><i class="fas fa-undo mr-2"></i>Kembali</a>
                                   @if(session('delete'))
                                        <div class="alert alert-danger mt-2">
                                        {{session('delete')}}
                                        </div>
                                    @endif
                                   @if(session('update'))
                                        <div class="alert alert-info mt-2">
                                        {{session('update')}}
                                        </div>
                                    @endif
                            </div>
                            <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama projects</th>
                                    <th scope="col">Divisi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tanggal selesai</th>
                                    <th scope="col">Persentase Projects</th>
                                    <th scope="col"><i class="fas fa-cogs"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($join as $joins)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$joins->nama_projects}}</td>
                                    <td>{{$joins->nama_divisi}}</td>
                                    <td>{{$joins->status_projects}}</td>
                                    <td>{{$joins->date_projects}}</td>
                                    <td>{{$joins->persentase_projects}} %</td>
                                    
                                    <td>
                                        <a href="{{url('projects/edit/'.$joins->id_projects)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                        <form action="{{url('projects/delete/'.$joins->id_projects)}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                            <button  class="btn btn-danger btn-sm " type="submit"><i class="fas fa-trash"></i> hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            </div>
                        </div> <!-- end upcoming joins personal -->
                    
                </div>
            </div>
        </div>
    @endsection(konten)
</div>
<!-- end container fluid -->
